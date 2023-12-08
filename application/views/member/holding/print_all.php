<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="author" content="Exolim" />
    <meta name="robots" content="noindex, nofollow">
    <title>Your Investment Receipt| <?php echo config_item('company_name') ?></title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <style type="text/css">
        table,
        tr {
            border: 1px solid #ccc
        }
    </style>
</head>
<!-- onload="print()" -->

<body>
    <p style="text-align: center;">
        <img src="<?php echo base_url('uploads/logo.png');?>" alt="">
    </p>
    <hr>
    <p>&nbsp;</p>
    <div class="container-fluid">
        <div class="row table-responsive">
            
        <h4>Name&nbsp;&nbsp;:&nbsp;<?php echo $member['name']; ?></h4>
            <h4>Member Id&nbsp;&nbsp;:&nbsp;<?php echo config_item('ID_EXT') . $member['id']; ?></h4>
            <h4>Email Id&nbsp;&nbsp;:&nbsp;<?php echo   $member['email']; ?></h4>
            <h4>Contact&nbsp;&nbsp;:&nbsp;<?php echo $member['phone']; ?></h4>
            <hr>
           
            <div>
              
                <table class="table table-border" border="1" align="center" style="max-width: 800px">
                    <thead>
                        <th>s.no</th>
                        <th>Invest No</th>
                        <th>Share Quantity</th>
                        <th>Invest Amount(₹)</th>
                        <th>Invested For</th>
                        <th>Investment Date</th>
                        
                        
                       
                    </thead>

                    <tbody>
                        <?php foreach($share as $i=>$shar):?>
                            <tr>
                                <td><?php echo ++$i;?></td>
                                <td><?php echo $shar['user_id'].'LST'.$shar['id'] ?></td>                       
                                <td><?php echo $shar['share_quantity'] ?></td>
                                <td><?php echo $shar['topup_amount'] ?></td>
                                <td><?php echo $shar['invested_in'] ?></td>
                                <td><?php echo date('d-m-Y',strtotime($shar['date'])) ?></td>

                            </tr>
                            <?php endforeach;?>
                    </tbody>


                </table>
                <p align="justify">
                    **NOTICE:**
                    <br>

                    This share certificate is a legal document representing ownership of the specified shares in <?php echo config_item('company_name') ?>. The transfer of shares is subject to the terms and conditions outlined in the company's bylaws and applicable laws. Any unauthorized transfer or attempt to transfer shares in violation of these terms may result in the invalidation of this certificate.

                    

                    The company reserves the right to amend its bylaws, which may affect the rights and privileges associated with ownership of the shares represented by this certificate.

                    This certificate must be surrendered to the company or its duly appointed agent upon transfer of the shares.

                    This certificate is not valid unless it bears the signature of an authorized signatory and is registered by the Transfer Agent.
                    <br>

                <div>
                    <div>
                        <strong>
                            <?php echo config_item('company_name') ?>
                        </strong>

                    </div>
                    <div>
                       Address&nbsp;&nbsp;:&nbsp;<?php echo config_item('company_address') ?>

                    </div>
                    <div>
                       Contact&nbsp;&nbsp;: <?php echo config_item('company_mobile') ?>

                    </div>
                    <div>
                        Email&nbsp;&nbsp;:<?php echo config_item('email') ?>

                    </div>
                    <div>
                        Issue Date&nbsp;:<?php echo date('d-m-Y', strtotime($share['date'])) ?>

                    </div>
                </div>


                </p>

                



            </div>
        </div>
    </div>
</body>

</html>