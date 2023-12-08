<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="author" content="Exolim" />
    <meta name="robots" content="noindex, nofollow">
    <title>Management Dashboard | <?php echo config_item('company_name') ?></title>
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
            <h4>Name&nbsp;&nbsp;:<?php echo $close_info['name'] . '(' . $close_info['member_id'] . ')'; ?></h4>
            <div align="justify">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet atque culpa corrupti, laborum veritatis id voluptate eaque deserunt quisquam dicta aliquam ducimus fugiat nesciunt nostrum ab eveniet perspiciatis eos in praesentium asperiores adipisci ipsam modi, molestiae laudantium! Suscipit et impedit saepe in laudantium aliquid harum debitis nostrum, quos dignissimos minima laborum consequatur praesentium iusto eaque assumenda quo veritatis dicta ducimus culpa adipisci laboriosam, unde molestias quis! A iure id expedita consectetur est nam non aut. Officia odio dolorem debitis velit accusantium, minima eius, laborum nisi quod unde quaerat aspernatur eaque id provident quisquam dignissimos? Impedit ipsam quaerat cum quisquam corrupti.
            </div>
            <div>
                <?php
                $tax_percent = config_item('payout_tax') + config_item('payout_admin_tax');
                $amount_after_tax =$close_info['total_investment'] - $close_info['total_investment'] * ($tax_percent / 100);


                ?>
                <table class="table table-border" align="center" style="max-width: 800px">
                    <thead>
                        <th>s.no</th>
                        <th>Invest Amount</th>
                        <th>Closing Date</th>
                        <th>Returun In</th>
                        <th>Return Amount After tax Deduction</th>
                        <th>Payment Date</th>
                    </thead>

                    <tbody>
                        <td>1</td>
                        <td><?php echo $close_info['total_investment'] ?></td>
                        <td><?php echo $close_info['account_closing_date'] ?></td>
                        <td><?php echo config_item('refund_days').'&nbsp;&nbsp;Days';?></td>
                        <td><?php echo   $amount_after_tax ?></td>
                        <td><?php echo $close_info['investment_refund_date'] ?></td>

                    </tbody>


                </table>
                <p  align="justify">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet voluptatem distinctio quo nostrum eum sint suscipit adipisci cum maiores iusto explicabo similique laudantium libero repudiandae nemo ab id autem numquam cupiditate, veniam rem totam? Eius, sit nam? Ut eius aut a repellat iure corporis ratione quisquam quaerat voluptate? Repudiandae ducimus, perspiciatis ipsum beatae praesentium ratione. Animi eum velit, ab alias praesentium doloribus aliquid atque doloremque ipsam, ex fuga vero. Odio voluptatem, dolorum quo unde doloremque optio officiis sequi. Nihil officiis facere beatae nesciunt ullam illum eveniet quia, aut quaerat soluta, et voluptatum ad suscipit porro placeat, eum sint non ipsam!
                </p>

                <p style="margin-top: 100px;">
                    <span style="margin-left: 400px;">Authrized Seal and Sign</span>
                </p>



            </div>
        </div>
    </div>
</body>

</html>