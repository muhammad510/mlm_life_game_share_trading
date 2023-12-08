<?php

/***************************************************************************************************
 * Copyright (c) 2020. by Camwel Corporate Solution PVT LTD
 * This project is developed and maintained by Camwel Corporate Solution PVT LTD.
 * Nobody is permitted to modify the source or any part of the project without permission.
 * Project Developer: Bidush Sarkar
 * Developed for: Camwel Corporate Solution PVT LTD
 **************************************************************************************************/
?>
<div class="row">
    <?php echo form_open('users/topup_member') ?>
    <div class="col-sm-4">
        <label>User ID</label>
        <input type="text" value="<?php echo $this->uri->segment(3) ? $this->uri->segment(3) : '' ?>" class="form-control" id="userid" name="userid">
    </div>
   
    <div class="col-sm-4">
        <label for="product" class="control-label">Share Price</label>
        <select class="form-control" id="product" name="product" required>
            <?php foreach ($products as $val) {
                echo '<option value="' . $val['id'] . '">' . $val['prod_name'] . '. Price :' . config_item('currency') . number_format($val['prod_price'] + ($val['prod_price'] * $val['gst'] / 100), 2) . ' </option>';
            } ?>
        </select>
    </div>

    <div class="col-sm-4">
        <label for="invested_in" class="control-label">Invest In</label>
        <select class="form-control" id="invested_in" name="invested_in" required>
            <option value="">Select</option>
            <option value="IT Business">IT Business</option>
            <option value="Food Beverage">Food Beverage</option>
            <option value="Real Estate">Real Estate</option>
            <option value="Hospitality">Hospitality</option>            
        </select>
    </div>



    <div class="col-sm-4">
        <label>Quantity</label>
        <input type="text" class="form-control" id="qty" name="qty">       
    </div>

    <div class="col-sm-4">
        <label>Total Amount</label>
        <input type="text" class="form-control" id="total_amount" name="amt" value="0" readonly>       
    </div>

   


    <div class="col-sm-4"><br />
        <input type="submit" class="btn btn-success" value="TopUp" onclick="this.value='Working..'">
    </div>


    <?php echo form_close() ?>
</div>



<script>
$(document).on('change',"#qty",function(){
    let qty = parseInt($("#qty").val());
    let share_price = 1000;
    let total_price= qty*share_price;   
    $('#total_amount').val(total_price);
    
});
</script>