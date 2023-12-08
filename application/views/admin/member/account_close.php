<?php

/***************************************************************************************************
 * Copyright (c) 2020. by Camwel Corporate Solution PVT LTD
 * This project is developed and maintained by Camwel Corporate Solution PVT LTD.
 * Nobody is permitted to modify the source or any part of the project without permission.
 * Project Developer: Bidush Sarkar
 * Developed for: Camwel Corporate Solution PVT LTD
 **************************************************************************************************/
?>
<div class="table-responsive">
    <table class="table table-striped" style="font-size:13px">
        <thead>
            <tr>
                <th>SN</th>
                <th>User ID</th>
                <th>Name</th>
                <th>Investment</th>
                <th>Available Wallet Balance</th>
                <th>Phone</th>
                <th>Account Close</th>
                <th>Payment Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sn = 1;
            foreach ($members as $e) { ?>
                <tr>
                    <td><?php echo $sn++; ?></td>
                    <td><a href="<?php echo site_url('users/user_detail/' . $e['id']) ?>" target="_blank"><?php echo config_item('ID_EXT') . $e['id']; ?></a></td>
                    <td><?php echo $e['name']; ?></td>
                    <td><?php echo $e['total_investment']; ?></td>
                    <td><?php echo '₹ ' . number_format($this->db_model->select('balance', 'wallet', array('userid' => $e['id'])), 2); ?></td>
                    <td><?php echo $e['phone']; ?></td>

                    <td><?php echo date('d-M-Y', strtotime($e['account_closing_date'])); ?></td>
                    <td><?php echo $e['status']; ?></td>
                    
                    <td>
                        <?php if ($e['account_status'] == "Account_close" && $e['status'] == "Pending" && $e['investment_refund_date'] <= date('Y-m-d')) { ?>
                            <a href="<?php echo site_url('users/close_account_payment/' . $e['id']); ?>" class="btn btn-success btn-xs">Paid</a>
                        <?php } ?>
                        <a href="<?php echo site_url('users/user_detail/' . $e['id']); ?>" class="btn btn-warning btn-xs">View</a>




                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>
</div>
<a href="<?php echo site_url('admin') ?>" class="btn btn-xs btn-danger">&larr; Go Back</a>
<!-- <a onclick="return confirm('Are you sure you want to delete this Member ?')"
                        href="<?php echo site_url('users/remove_member/' . $e['id']); ?>" class="btn btn-danger btn-xs">Delete</a> -->