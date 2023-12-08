<?php

/***************************************************************************************************
 * Copyright (c) 2020. by Camwel Corporate Solution PVT LTD
 * This project is developed and maintained by Camwel Corporate Solution PVT LTD.
 * Nobody is permitted to modify the source or any part of the project without permission.
 * Project Developer: Bidush Sarkar
 * Developed for: Camwel Corporate Solution PVT LTD
 **************************************************************************************************/
?>
<style>

</style>
<div class="row">
    <?php echo form_open('member/invest') ?>
    <div class="col-sm-6">
        <label>User ID <span class="text-danger">*</span></label>
        <input type="text" value="<?php echo $this->uri->segment(3) ? $this->uri->segment(3) : '' ?>" class="form-control" id="userid" name="userid">
    </div>

    <div class="col-sm-6">
        <label>Epin to Topup <span class="text-danger">*</span></label>
        <select class="form-control myselect" id="topup" name="topup">
            <option value="">Select</option>
            <?php foreach ($epin as $val) {
                echo '<option value="' . $val['epin'] . '">' . $val['epin'] . " | ₹" . number_format($val['amount'], 2) . ' </option>';
            } ?>
        </select>
    </div>
    <div class="col-sm-6">
        <label>Quantity <span class="text-danger">*</span></label>
        <input type="text" value="0" class="form-control" id="quantity" name="quantity" readonly>
    </div>

    <div class="col-sm-6">
        <label>Discount(%) <span class="text-danger">*</span></label>
        <input type="text" value="5" class="form-control" id="discount" name="discount" readonly>
    </div>

    <div class="col-sm-6">
        <label>Paybale Amount <span class="text-danger">*</span></label>
        <input type="text" value="0" class="form-control" id="paybale_amount" name="paybale_amount" readonly>
    </div>



    <div class="col-sm-6">
        <label for="product" class="control-label">Package <span class="text-danger">*</span></label>
        <select class="form-control" id="product" name="product">
            <?php foreach ($products as $val) {
                echo '<option value="' . $val['id'] . '">' . $val['prod_name'] . '. Price :' . config_item('currency') . number_format($val['prod_price'] + ($val['prod_price'] * $val['gst'] / 100), 2) . ' </option>';
            } ?>
        </select>
    </div>

    <div class="col-sm-6">
        <label for="invested_in" class="control-label">Invest In</label>
        <select class="form-control" id="invested_in" name="invested_in" required>
            <option value="">Select</option>
            <option value="IT Business">IT Business</option>
            <option value="Food Beverage">Food Beverage</option>
            <option value="Real Estate">Real Estate</option>
            <option value="Hospitality">Hospitality</option>
        </select>
    </div>
    <div class="col-sm-6"><br />
        <input type="submit" class="btn btn-success" value="Invest" onclick="this.value='Working..'">
    </div>
    <?php echo form_close() ?>
</div>


<script>
    $(document).on('change', '#topup', function() {
        var epin_id = $(this).val();
        $.ajax({
            type: 'POST',
            url: base_url + "Member/get_epin_value",
            data: {
                'epinid': epin_id
            },
            dataType: "JSON",
            success: function(data) {
                var amount = parseInt(data.amount);
                var qty = amount / 1000;
                var pay_amount =amount- amount * (5/100);
                $('#quantity').val(qty);
                $('#paybale_amount').val(pay_amount);
            }

        });
    });
</script>