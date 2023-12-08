<style>
  .dis {
    margin: 22px 44px 0px 44px;

    height: 260px;
    width: 260px;
  }

  .dis {
    display: inline-block;
  }

  .text {
    text-align: center;
    padding: 22px;
    font-size: 18px;
    color: #0058a8;

  }
</style>

<!-- ================ Slider area ================ -->

<div class="slider">
  <div id="carouselsliderControls" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <!-- slider item -->
      <div class="carousel-item slider-one active" style="height:500px;">
        <div class="carousel-caption text-center">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 offset-lg-3">
                <div class="slider-caption-box">
                  <p class="ani_l">Experienced business advisor</p>
                  <h2 class="ani_right"> Life Game Share Trading </h2>
                  <a class="btn-style-1 ani_top" href="about.php">Know More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- slider item end -->
      <!-- slider item -->
      <div class="carousel-item slider-two" style="height:500px;">
        <div class="carousel-caption text-center">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 offset-lg-3">
                <div class="slider-caption-box">
                  <p class="ani_l">Life Game Share Trading</p>

                  <h2 class="ani_right">We help to grow your business</h2>
                  <a class="btn-style-1 ani_top" href="about.php">Know More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- slider item end -->
      <!-- slider item -->
      <div class="carousel-item slider-three" style="height:500px;">
        <div class="carousel-caption text-center">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 offset-lg-3">
                <div class="slider-caption-box">
                  <p class="ani_l">Life Game Share Trading</p>
                  <h2 class="ani_right">We provide solution on your business</h2>
                  <a class="btn-style-1 ani_top" href="about.php">Know More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- slider item end -->
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselsliderControls" data-bs-slide="prev"> <i class="fas fa-caret-left"></i> </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselsliderControls" data-bs-slide="next"> <i class="fas fa-caret-right"></i> </button>
  </div>
</div>
<!-- ================ Slider area end ================ -->
<div class="privacy-policy-page pt-80 pb-80">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div style="border:1px solid black; ">
          <p style="padding: 5px;background-color:#005baa; text-align:center;font-size:18px;color:white; font-weight:600">Today Investment sector</p>
          <?php
           $x=$this->db->select('invested_in,sum(topup_amount) as total')->from('topup_record')->where('date',date('Y-m-d'))->group_by('invested_in')->get()->result_array();
          // $x = $this->db->select('invested_in,sum(topup_amount) as total')->from('topup_record')->group_by('invested_in')->get()->result_array();
          ?>
          <marquee behavior="slow" direction="up" scrollmount="0.1" onmouseover="this.stop()" onmouseout="this.start()" style="height:200px;">
            <?php if (empty($x)) : ?>
              <p style="margin-left:10px;color:red;">Welcome to<?php echo config_item('company_name') ?></p>
            <?php else : ?>



              <?php foreach ($x as $i=>$x) : ?>
                <p style="margin-left:10px;"><?php echo ++$i.'&nbsp;'. $x['invested_in'] . '-' . $x['total']; ?></p>
              <?php endforeach; ?>
            <?php endif; ?>

          </marquee>

        </div>

      </div>
      <div class="col-lg-4">
       <h5>Welcome to <?php echo config_item('company_name')?></h5>
       <p>We are one of the best MLM companie Being at the top of the list of the fastest growing companies is because of its versatility</p>
       
      </div>
      <div class="col-lg-4 ">
        <div style="border:1px solid black;">
          <p style="padding: 5px;  background-color:#005baa; text-align:center;font-size:18px;color:white; font-weight:600">Today Highest Earner</p>
          <?php
          $y = $this->db->select('m.name,e.userid	,sum(e.amount) as total')->from('earning as e')->where('e.date',date('Y-m-d'))->join('member as m', 'm.id=e.userid', 'left')->group_by('e.userid')->limit(10)->get()->result_array();
          ?>

          <marquee behavior="slow" direction="up" scrollmount="0.1" onmouseover="this.stop()" onmouseout="this.start()" style="height:200px;">
            <?php if (empty($y)) : ?>
              <p style="margin-left:10px;color:red;">Welcome to<?php echo config_item('company_name') ?></p>
            <?php else : ?>
              <?php foreach ($y as $j=>$y) : ?>
                <p style="margin-left:10px;"><?php echo ++$j.'&nbsp;'. $y['name'] . '-' . $y['total']; ?></p>
              <?php endforeach; ?>
            <?php endif; ?>

          </marquee>


        </div>

      </div>


    </div>

  </div>
</div>


<!-- ================ first section start ================ -->
<div class="privacy-policy-page pt-80 pb-80">
  <div class="container">
    <div class="privacy-policy-single-content">
      <h3 class="mb-15 action_l">Share Tradeing (Multi-level marketing)</h3>
      <p>Life Share Game Trading is a dynamic and innovative concept that combines the thrill of gaming with the potential for financial success. It's an exciting fusion of entertainment and investment that offers participants a unique opportunity to experience the excitement of the invest in a risk-free and engaging way. Let's delve into this captivating world where gaming and financial trading converge, redefining the traditional boundaries of fun and profit.</p> <br>

      <p>Multi-Level Marketing (Share Trading) in the context of the and life game share trading industry can be an innovative and lucrative business model. Share Trading, also known as network marketing, is a strategy where a company leverages a network of independent distributors to promote and sell share or services. like Hospitality, IT Business, Real Estate Trading, Food and Beverage, In this case, we will explore how share trading can be applied to the Hospitality, IT Business, Real Estate Trading, Food and Beverage, in life game share trading company.</p>
      <br>


      <hr>
    </div>
  </div>
</div>
<!-- ================ first section  end ================ -->

<!-- ================  new section start ================ -->
<div class="blog-post-area pt-80 pb-55 action_l" style="margin-top:-122px;">
  <div class="container">
    <div class="row">
      <div class="col-lg-9">
        <!-- blog post content -->
        <div class="blog-post-content">


          <figure>
            <blockquote class="blockquote"> <i class="fas fa-quote-left"></i>
              <p>Life Game Share Trading is one of the best Share Tradeing companie Being at the top of the list of the fastest
                growing companies is because of its versatility.</p>
              <!-- <p>Life Game Share Marketing is one of the best  MLM companie  working with others and working alone into one effort. Everyone plays a part in the pyramid or handles their “level.” you depend on other participants but do not have to work with them daily in an office setting. You can put in as much or as little time as you want when you start. </p> -->
            </blockquote>
            <figcaption class="blockquote-footer"> Someone famous in <cite title="Source Title">Source Title</cite>
            </figcaption>
          </figure>
          <p>In multi-level marketing, the compensation plan usually pays out to participants from two potential
            revenue streams. The first is based on a sales commission from directly selling the product or service;
            the second is paid out from commissions based upon the wholesale purchases made by other sellers whom
            the participant has recruited to also sell the product. In the organizational hierarchy of MLM
            companies, recruited participants (as well as those whom the recruit recruits) are referred to as one's
            downline distributors.</p>


        </div>
        <!-- blog post content end -->
        <hr class="mt-40 mb-40">

      </div>
      <div class="col-lg-3">
        <aside>
          <!-- sidebar item -->

          <!-- sidebar item end -->
          <!-- sidebar item -->
          <div class="sidebar-item mb-25 action_r">
            <h4 class="sidebar-title mb-20"><span class="sidebar-title-border"></span>Categories</h4>
            <!-- sidebar categories -->
            <ul class="sidebar-categories">
              <li><a href="javaScript:void(0);">IT BUSINESS <i class="fas fa-chevron-right"></i></a></li>
              <li><a href="javaScript:void(0);">FOOD BEVERAGE <i class="fas fa-chevron-right"></i></a></li>
              <li><a href="javaScript:void(0);">REAL STATE <i class="fas fa-chevron-right"></i></a></li>
              <li><a href="javaScript:void(0);">HOSPITALITY <i class="fas fa-chevron-right"></i></a></li>

            </ul>
            <!-- sidebar categories end -->
          </div>
          <!-- sidebar item end -->
        </aside>
      </div>
    </div>
  </div>
</div>
<!-- ================ new section end ================ -->



<!-- ================ About area ================ -->
<div class="about-area pt-80 pb-55" style="margin-top:-185px;">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 mb-25" class="">
        <div class="about-img action_l"> <img src="<?php echo base_url() ?>theme1_assets/img/about/about-img.jpg" alt="Life Game Share Marketing Image" title="Life Game Share Marketing Image"> </div>
      </div>
      <div class="col-lg-6 mb-25" class="">
        <div class="about-us-info"> <i class="fas fa-quote-left"></i>
          <h6 class="action_r">Multi-level marketing is also known as "pyramid selling", "network marketing", and
            "referral marketing.</h6>
          <p class="action_r">
            Life Game Share Trading is one of them which is best MLM companie Being at the top of the list of the
            fastest growing companies is because of its versatility.</p>
          <p class="action_r" style="text-align:justify;">Looking for a platform to organise and run a business? No
            need to wait further!! The best solution awaits you here.
            Life Game Share Trading Technology Pvt. Ltd. one of the world’s most leading web based Development
            Companies fixes your route in the right direction. Our hands with experience and essential technical
            skills will help you reach the heights. We provide open source script for your business needs which are
            customizable.</p>
          <a href="about.php" class="btn bg-primary text-light" data-autoplay="true" data-vbtype="video"> More View
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ================ About area end ================ -->




<!-- ================ Services area ================ -->
<div class="services-area pt-80 pb-55 bg-light" style="margin-top:-88px;">
  <div class="container">
    <!-- section title -->
    <div class="section-title text-center mb-30">
      <h3><span>Our Services</span></h3>
      <!-- <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipiscing</p> -->
    </div>
    <!-- section title end -->
    <div class="row row-cols-lg-2 row-cols-md-2 row-cols-sm-1 row-cols-1">
      <div class="col mb-25">
        <!-- service item -->
        <div class="service-item">
          <div class="service-icon"><i class="fas fa-desktop"></i></div>
          <h4><a href="javaScript:void(0);">IT Business</a></h4>
          <div class="dec">
            <p>
              Information technology (IT) is a broad professional category covering functions including building
              communications.</p>
            <a href="javaScript:void(0);" class="service-readmore">Read More</a>
          </div>
        </div>
        <!-- service item end -->
      </div>
      <div class="col mb-25">
        <!-- service item -->
        <div class="service-item">
          <div class="service-icon"><i class="fas fa-tags"></i></div>
          <h4><a href="javaScript:void(0);">Food Beverage </a></h4>
          <div class="dec">
            <p>Food and beverages means any raw, cooked edible substance used or intended for use in whole human
              consumption</p>
            <a href="javaScript:void(0);" class="service-readmore">Read More</a>
          </div>
        </div>
        <!-- service item end -->
      </div>
      <div class="col mb-25">
        <!-- service item -->
        <div class="service-item">
          <div class="service-icon"><i class="fas fa-anchor"></i></div>
          <h4><a href="javaScript:void(0);">Real State </a></h4>
          <div class="dec">
            <p>Real state is property in the form of land, houses or other buildings property that is movable or
              separable. </p>
            <p></p>
            <a href="javaScript:void(0);" class="service-readmore">Read More</a>
          </div>
        </div>
        <!-- service item end -->
      </div>

      <div class="col mb-25" style="display:none;">
        <!-- service item -->
        <div class="service-item">
          <div class="service-icon"><i class="fas fa-code-branch"></i></div>
          <h4><a href="javaScript:void(0);">Trading </a></h4>
          <div class="dec">
            <p>Lorem ipsum dolor sit amet consectetur adipiscing lit amet tincidunt orci lacus id varius dolor
              fermum sit amet.</p>
            <a href="javaScript:void(0);" class="service-readmore">Read More</a>
          </div>
        </div>
        <!-- service item end -->
      </div>
      <div class="col mb-25">
        <!-- service item -->
        <div class="service-item">
          <div class="service-icon"><i class="fas fa-laptop-code"></i></div>
          <h4><a href="javaScript:void(0);">Hospitality</a></h4>
          <div class="dec">
            <p>The hospitality is a broad category of fields within the service that includes lodging, food, and
              travel agency.</p>
            <a href="javaScript:void(0);" class="service-readmore">Read More</a>
          </div>
        </div>
        <!-- service item end -->
      </div>
      <div class="col mb-25" style="display:none;">
        <!-- service item -->
        <div class="service-item">
          <div class="service-icon"><i class="fas fa-palette"></i></div>
          <h4><a href="javaScript:void(0);">Logo Design</a></h4>
          <div class="dec">
            <p>Lorem ipsum dolor sit amet consectetur adipiscing lit amet tincidunt orci lacus id varius dolor
              fermum sit amet.</p>
            <a href="javaScript:void(0);" class="service-readmore">Read More</a>
          </div>
        </div>
        <!-- service item end -->
      </div>
    </div>
  </div>
</div>
<!-- ================ Services area end ================ -->



<!-- ================ Counter area ================ -->
<div class="counter-area pt-80 pb-55" style="margin-top:-40px;">
  <div class="container">
    <div class="counter-center">
      <div class="row row-cols-lg-4 row-cols-md-2 row-cols-sm-2 row-cols-1">
        <div class="col mb-25">
          <!-- single counter -->
          <div class="single-counter-box">
            <div class="icon"><i class="fas fa-truck"></i></div>
            <div class="content">
              <div class="counter-info-text"> <span class="counter">800</span> </div>
              <h4 class="title">FOOD BEVERAGE </h4>
            </div>
          </div>
          <!-- single counter end -->
        </div>
        <div class="col mb-25">
          <!-- single counter -->
          <div class="single-counter-box">
            <div class="icon"><i class="far fa-smile"></i></div>
            <div class="content">
              <div class="counter-info-text"> <span class="counter">80</span> </div>
              <h4 class="title">HOSPITALITY </h4>
            </div>
          </div>
          <!-- single counter end -->
        </div>
        <div class="col mb-25">
          <!-- single counter -->
          <div class="single-counter-box">
            <div class="icon"><i class="far fa-clock"></i></div>
            <div class="content">
              <div class="counter-info-text"> <span class="counter">14</span> </div>
              <h4 class="title">REAL STATE</h4>
            </div>
          </div>
          <!-- single counter end -->
        </div>
        <div class="col mb-25">
          <!-- single counter -->
          <div class="single-counter-box">
            <div class="icon"><i class="fas fa-anchor"></i></div>
            <div class="content">
              <div class="counter-info-text"> <span class="counter">40</span> </div>
              <h4 class="title">IT BUSINESS</h4>
            </div>
          </div>
          <!-- single counter end -->
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ================ Counter area end ================ -->



<!-- ================ Skills area ================ -->
<div class="skills-area pt-80 pb-55" style="margin-top:-40px;">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 mb-25">
        <!-- skill img -->
        <div class="skill-img action_l"><img src="<?php echo base_url() ?>theme1_assets/img/skill-img.jpg" alt="Life Game Share Marketing Services Image" title="Life Game Share Marketing Services Image"></div>
        <!-- skill img end -->
      </div>
      <div class="col-lg-5 offset-lg-1 mb-25">
        <!-- progress bar -->
        <div class="skill-progress sm-progress">
          <!-- Progressbar 1 -->
          <div class="skill-bar" data-percentage="95%">
            <h4 class="progress-title-holder"> <span class="progress-title">FOOD BEVERAGE </span> <span class="progress-wrapper"> <span class="progress-mark"><span class="percent"></span></span> </span>
            </h4>
            <div class="progress-outter">
              <div class="progress-content"></div>
            </div>
          </div>
          <!-- Progressbar 2 -->
          <div class="skill-bar" data-percentage="72%">
            <h4 class="progress-title-holder"> <span class="progress-title">IT BUSINESS</span> <span class="progress-wrapper"> <span class="progress-mark"><span class="percent"></span></span> </span>
            </h4>
            <div class="progress-outter">
              <div class="progress-content"></div>
            </div>
          </div>
          <!-- Progressbar 3 -->
          <div class="skill-bar" data-percentage="75%">
            <h4 class="progress-title-holder"> <span class="progress-title">HOSPITALITY</span> <span class="progress-wrapper"> <span class="progress-mark"><span class="percent"></span></span> </span>
            </h4>
            <div class="progress-outter">
              <div class="progress-content"></div>
            </div>
          </div>
          <!-- Progressbar 4 -->
          <div class="skill-bar" data-percentage="65%">
            <h4 class="progress-title-holder"> <span class="progress-title">REAL STATE</span> <span class="progress-wrapper"> <span class="progress-mark"><span class="percent"></span></span> </span>
            </h4>
            <div class="progress-outter">
              <div class="progress-content"></div>
            </div>
          </div>
          <!-- Progressbar 5 -->

        </div>
        <!-- progress bar end -->
      </div>
    </div>
  </div>
</div>
<!-- ================ Skills area end ================ -->

<!-- ================ Testimonial area ================ -->
<div class="testimonial-area pt-80 pb-80">
  <div class="container">
    <div class="testimonial-carousel owl-carousel owl-theme">
      <div class="item">
        <!-- testimonial box -->
        <div class="testimonial-box">
          <div class="testi-star"> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="far fa-star"></i> </div>
          <div class="profile-info">
            <h3 style="margin-top:-6px;">VISION</h3>
            <span class="post"></span>
          </div>
          <p class="mb-0">MLM LGSM wants to become a globally recognizable company in the field and business, with
            the ability to offer its services to the most demanding customers in the automotive industry. which is
            the foundation for constant innovation and high-quality solutions that we offer.</p>

        </div>
        <!-- testimonial box end -->
      </div>
      <div class="item">
        <!-- testimonial box -->
        <div class="testimonial-box">
          <div class="testi-star"> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="far fa-star"></i> </div>
          <div class="profile-info">
            <h3>MISSION</h3>
            <span class="post"></span>
          </div>
          <p class="mb-0">We are an innovative and reliable partner to our customers. We want to achieve mutual
            success in the global market hand in hand with the customer. Trust is our commitment. We represent
            reliable value to our owners, employees, and partners.</p>
          <p></p>


        </div>
        <!-- testimonial box end -->
      </div>

    </div>
  </div>
</div>
<!-- ================ Testimonial area end ================ -->

<!-- team area section start   -->
<div class="container" style="margin-top:66px; margin-bottom:66px;">
  <div class="row">
    <div class="col-md-12">
      <h2 style="text-align:center;">Out Team</h3>
        <hr>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <marquee behavior="" direction="" onmouseover="this.stop();" onmouseout="this.start();">

        <div class="dis"><img src="<?php echo base_url() ?>theme1_assets/img/gallery1/12.jpg " alt="" class="dis">
          <p class="text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Anita Srivastava (Bihar) </p>
        </div>

        <div class="dis "><img src="<?php echo base_url() ?>theme1_assets/img/gallery1/3.jpg" alt="" class="dis">
          <p class="text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vikky Kumar (Bihar)</p>
        </div>
        <div class="dis"><img src="<?php echo base_url() ?>theme1_assets/img/gallery1/4.jpg" alt="" class="dis">
          <p class="text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ratndeep Verma (Bihar)</p>
        </div>

        <div class="dis"><img src="<?php echo base_url() ?>theme1_assets/img/gallery1/2.jpg" alt="" class="dis">
          <p class="text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Santosh Kumar (Bihar) </p>
        </div>

        <div class="dis"><img src="<?php echo base_url() ?>theme1_assets/img/gallery1/1.jpg" alt="" class="dis">
          <p class="text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ravi Kumar (Bihar)</p>
        </div>

        <div class="dis"><img src="<?php echo base_url() ?>theme1_assets/img/gallery1/5.jpg" alt="" class="dis">
          <p class="text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mukesh Ram (Bihar)</p>
        </div>

        <div class="dis"><img src="<?php echo base_url() ?>theme1_assets/img/gallery1/6.jpg" alt="" class="dis">
          <p class="text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rajnikant kumar (Bihar) </p>
        </div>

        <div class="dis"><img src="<?php echo base_url() ?>theme1_assets/img/gallery1/7.jpg" alt="" class="dis">
          <p class="text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ravi Kumar Gupta (Bihar)</p>
        </div>

        <div class="dis"><img src="<?php echo base_url() ?>theme1_assets/img/gallery1/8.jpg" alt="" class="dis">
          <p class="text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Shivam Kumar (Bihar)</p>
        </div>

        <div class="dis"><img src="<?php echo base_url() ?>theme1_assets/img/gallery1/9.jpg" alt="" class="dis">
          <p class="text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ranjeet Kumar (Bihar)</p>
        </div>

        <div class="dis"><img src="<?php echo base_url() ?>theme1_assets/img/gallery1/10.jpg" alt="" class="dis">
          <p class="text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Teena (Delhi)</p>
        </div>

        <div class="dis"><img src="<?php echo base_url() ?>theme1_assets/img/gallery1/11.jpg" alt="" class="dis">
          <p class="text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Manoj Ram (Bihar)</p>
        </div>





      </marquee>
    </div>
  </div>
</div>
.
<!-- team area section end   -->