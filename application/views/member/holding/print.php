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

<body style="border:1px double; padding:10px">
    <p style="text-align: center;">
        <img src="<?php echo base_url('uploads/logo.png'); ?>" alt="">
    </p>
    <hr>
    <p>&nbsp;</p>
    <div class="container-fluid">
        <div class="row table-responsive">
            <p style="float:right; padding-right:10px">Certificate Number: <strong class="text-danger"><?php echo $member['id'] . $share['id']; ?></strong></p>
            <br>
            <h2 class="text-center">SHARE CERTIFICATE</h2>
            <h4>Name&nbsp;&nbsp;:&nbsp;<?php echo $member['name']; ?></h4>
            <h4>Member Id&nbsp;&nbsp;:&nbsp;<?php echo config_item('ID_EXT') . $member['id']; ?></h4>
            <h4>Email Id&nbsp;&nbsp;:&nbsp;<?php echo $member['email']; ?></h4>
            <h4>Contact&nbsp;&nbsp;:&nbsp;<?php echo $member['phone']; ?></h4>
            <hr>
            <div align="justify">
                This is to certify that <strong><?php echo $member['name']; ?></strong></div> Registration Number <strong><?php echo config_item('ID_EXT') . $member['id']; ?></strong>


                is the Share holder of <?php echo $share['share_quantity'] ?> shares of <?php echo $share['invested_in'] ?>
                with Total value of <?php echo "₹&nbsp;".$share['topup_amount'] ?>, in the <?php echo config_item('company_name') ?>

            </div>
            <div style="margin:5px auto;">

                <table class="table table-border" border="1" align="center" style="max-width: 800px">
                    <thead>
                        <th>s.no</th>
                        <th>Share No</th>
                        <th>Share Quantity</th>
                        <th>Invest Amount(₹)</th>
                        <th>Invested For</th>
                        <th>Investment Date</th>



                    </thead>

                    <tbody>
                        <td style="text-align:center;">1</td>
                        <td style="text-align:center;"><?php echo $share['user_id'] . 'LST' . $share['id'] ?></td>
                        <td style="text-align:center;"><?php echo $share['share_quantity'] ?></td>
                        <td style="text-align:center;"><?php echo $share['topup_amount'] ?></td>
                        <td><?php echo $share['invested_in'] ?></td>
                        <td><?php echo date('d-m-Y', strtotime($share['date'])) ?></td>
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
                    <p><sup>***</sup>Shareholder may surrender equity after 90 days</p>

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