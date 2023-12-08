<!-- ================ Contact us page ================ -->
<div class="contact-us-page pt-80 pb-55">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <?php echo validation_errors('<div class="alert alert-danger">', '</div>') ?>
        <?php echo $this->session->flashdata('site_flash') ?>
        <?php if (config_item('is_demo') == TRUE) {
          echo '<div class="alert alert-danger">Please Pay your remaining balance to remove this banner !<br/> इस बैनर को हटाने के
        लिए कृपया अपनी शेष राशि का भुगतान करें !</div>';
        } ?>
      </div>
      <div class="col-lg-5 mb-25" style="padding:0% 5%">
        <!-- contact form -->
        <h4 style="text-align:center; padding-top:50px; color:#297ee8;">REGISTERED CUSTOMERS</h4>
        <p>If you have an account, sign in with your ID and Password.</p>
        <?php echo form_open() ?>
        
        <div class="mb-3">
          <label for="user" class="control-label text-dark" style="font-size: 16px;"><b>ID / Username</b> </label>
          <input type="text" class="form-control" id="user" name="username" placeholder="Username" required data-error="Username is required.">
        </div>

        <div class="mb-3">
          <label for="password" class="control-label text-dark" style="font-size: 16px;"><b>Password*</b></label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required data-error="Email is required.">
        </div>

        <button type="submit" class="btn btn-primary mt-2" style="padding: 10px 30px!important;float:right">Login</button>
       
        <?php echo form_close(); ?>
        <!-- contact form end -->
      </div>
      <div class="col-lg-6 mb-25" style="padding: 0% 5%; text-align:center; border-left:5px solid #0055a9">
        <h4 style="text-align:center; padding-top:50px; color:#297ee8;">NEW CUSTOMERS</h4><br>
        <p style="text-align:justify;"><strong><?php echo config_item('company_name') ?>?</strong> Create an account and be a part of our company, enjoy benefits and promotions</p><br>
        <a href="<?php echo base_url() . 'Site/register' ?>" class="btn btn-lg btn-primary" style=" font-size:15px;">Create An Account </a>

      </div>


    </div>
  </div>
</div>
<!-- ================ Contact us page end ================ -->