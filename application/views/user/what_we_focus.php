<!doctype html>
<html class="no-js" lang="zxx">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title><?php if(!empty($seo['meta_title'])) { echo $seo['meta_title']; } else { echo $default_seo['m_title']; }  ?></title>
<meta name="description" content="<?php if(!empty($seo['meta_description'])) { echo $seo['meta_description']; } else { $default_seo['m_dis']; }   ?>">
<meta name="keywords" content="<?php if(!empty($seo['meta_keyword'])) { echo $seo['meta_keyword']; } else { $default_seo['m_key']; }   ?>">



<style>

  .call-btn-mobile
  {
    color: #4D4D4D !important;
    font-size: 18px !important;
    font-weight: 500 !important;
  }

</style>


<?php $this->load->view('user/includes/header'); ?>



<!--banner section start----->

<section class="banimg">

    <img src="<?php echo base_url(); ?>uploads/banners/<?php echo $banner['image']; ?>" class="loaded" data-was-processed="true">

    <div class="col-lg-12 inner_banner_text">

    <h1 class="inner_banner_text1"><?php echo $banner['title']; ?></h1>

    </div>

</section>

<!--banner section end---->




<!--page content start---->

<div class="About-secs py-4 inner-paddn" id="about-sec" >
  <div class="container">
    <div class="row align-items-center">

    <?php /*

      <div class="col-lg-6" data-aos="fade-right">
	  
	   <div class="img-box3">
	   <div class="img1"><img src="<?php echo base_url(); ?>assets/img/about_2_1.jpg" alt=""></div>
	   <div class="img2"><img src="<?php echo base_url(); ?>assets/img/about_2_2.jpg" alt=""></div>

	   <div class="shape1"><img src="<?php echo base_url(); ?>assets/img/about_2_shape.png" alt=""></div>
	   
	   <div class="year-counter">
            <h3 class="year-counter_number"><span class="counter-number">15</span></h3>
            <p class="year-counter_text">Years Experience</p>
          </div>
	   </div>
	  
      </div>

    */ ?>


      <div class="col-lg-12 simple-text" data-aos="fade-left">
        <div class="ps-xxl-4 ms-xl-3  mb-4 ">
          
          <?php /*
          <div class="title-area mb-15">
            <h2 class="sec-title">What we <span class="text-theme">focus?</span></h2>
          </div>
          */ ?>
          
          <p>

          <?php echo $focus['content_dsec']; 
               
          ?>

          </p>

          <div class="btn-group mt-20">
          
          <!--<a href="<?php echo base_url(); ?>About" data-aos="zoom-in" class="as-btn">READ MORE<i class="fa-regular fa-arrow-right ms-2"></i></a>-->
            <div class="call-btn" data-aos="zoom-in">
              <div class="play-btn"><i class="fas fa-phone"></i></div>
              <div class="media-body "><span class="btn-text">Call Us On:</span> <a href="tel:<?php echo str_replace(" ","",$contact['phone']); ?>" class="btn-title call-btn-mobile"><?php echo $contact['phone']; ?></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!---page content end--->

<?php $this->load->view('user/includes/footer'); ?>

</body>
</html>