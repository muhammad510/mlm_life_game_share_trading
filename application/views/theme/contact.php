
<!-- ================ Inner page header ================ -->
<div class="inner-page-header">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
    </ol>
    <h1>Contact Us</h1>
  </div>
</div>
<!-- ================ Inner page header end ================ --> 

<!-- ================ Contact us page ================ -->
<div class="contact-us-page pt-80 pb-55">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mb-25"> 
        <!-- contact form -->
        <form class="contact-form" id="contact-form" method="post" action="<?php echo base_url()?>Site/email_contact" enctype="multipart/form-data">
          <div class="mb-3">
            <input type="text" class="form-control" name="first_name" placeholder="First Name" required data-error="First Name is required.">
            <div class="help-block with-errors"></div>
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" name="last_name" placeholder="Last Name" required data-error="Last Name is required.">
            <div class="help-block with-errors"></div>
          </div>
          <div class="mb-3">
            <input type="email" class="form-control" name="email" placeholder="Email" required data-error="Email is required.">
            <div class="help-block with-errors"></div>
          </div>

          <div class="mb-3">
            <input type="text" class="form-control" name="mobile" placeholder="MObile" required data-error="mobile is required.">
            <div class="help-block with-errors"></div>
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" name="subject" placeholder="Subject" required data-error="Subject is required.">
            <div class="help-block with-errors"></div>
          </div>
          <div class="mb-3">
            <textarea class="form-control" name="message" placeholder="Message" rows="3" required data-error="Message is required."></textarea>
            <div class="help-block with-errors"></div>
          </div>
          <button type="submit" class="btn-style-1">Send Message</button>
          <div class="messages"></div>
        </form>
        <!-- contact form end --> 
      </div>
      <div class="col-lg-6"> 
        <!-- map area -->
        <div class="map-box mb-25">
          <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d65159734.523217455!2d33.462315785403916!3d24.064489111960278!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1539422296993"></iframe>
        </div>
        <!-- map area end --> 
        <!-- contact area -->
        <ul class="contact-info mb-25">
          <li><span>Address:</span> Your address goes here.</li>
          <li><span>Phone:</span><a href="tel:7643060549;" style="color:black;">+91 7643060549</a></li>
          <li><span>Email:</span><a href="mailto:lifegamesharemarketing@gmail.com;" style="color:black;">lifegamesharemarketing@gmail.com</a></li>

        </ul>
        <!-- contact area end --> 
      </div>
    </div>
  </div>
</div>
<!-- ================ Contact us page end ================ --> 

