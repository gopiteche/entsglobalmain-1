<!doctype html>
<html class="no-js" lang="zxx">
<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-FGRV2S2EL6"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-FGRV2S2EL6');
</script>
<!-- Google tag ends for analytics -->

<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title><?php if(!empty($seo['meta_title'])) { echo $seo['meta_title']; } else { echo $default_seo['m_title']; }  ?></title>
<meta name="description" content="<?php if(!empty($seo['meta_description'])) { echo $seo['meta_description']; } else { $default_seo['m_dis']; }   ?>">
<meta name="keywords" content="<?php if(!empty($seo['meta_keyword'])) { echo $seo['meta_keyword']; } else { $default_seo['m_key']; }   ?>">

<link rel="canonical" href="https://entsglobal.com/" />

<?php $this->load->view('user/includes/header'); ?>


<style>


@media(max-width:525px)
{
  header
  {
    height:10vh;
  }

  .banner_bg
  {
    height:85vh !important;
  }

  .ba-img
  {
    height:85vh !important;
  }

  .service-box_content
  {
    padding: 20px 0px 25px 0px !important;
  }

  div.Banner-slide {
    bottom: 30% !important;
  }


}


@media(min-width:526px) and (max-width:768px)
{

  header
  {
    height:10vh;
  }

  .banner_bg
  {
    height:90vh !important;
  }

  .ba-img
  {
    height:90vh !important;
  }

}



.appoitment-form label.invalid {
    color: white !important;
}

  @media(min-width:998px){

  header
  {
    height:10vh;
  }

  .banner_bg
  {
    height:90vh !important;
  }

  .ba-img
  {
    height:90vh !important;
  }


  }


 @media(min-width:2049px)

  {

  .sticky-wrapper
  {
    height:100%;
  }

  .sticky
  {
    height:unset;
  }

  .menu-area
  {

    height:100%;
    min-height: 90px;

  }

  .menu-area .container
  {
    height:100%;
  }

  .menu-area .container>div
  {
    height:100%;
  }

  }

  .banner_bg img
  {
    height:100%;
  }

  .About-secs {
    padding: 60px 0px !important;
  }


.as-carousel {
  display: block;
}
 
.as-carousel .as-hero-slide:not(:first-child) {
    display: none;
  }

  .as-carousel.slick-initialized .as-hero-slide{
    display: block !important;
  }

  .hero-2 .ripple-shape {
    display:none;
  }

  .as-carousel.slick-initialized .ripple-shape{
    display: block ;
  }


  .color-strip *
  {

    color:#4D4D4D !important;

  }

  .hero-style2
  {
    display:none;
  }

  .as-hero-slide::after
  {
    background:rgb(0 0 0 / 0%);
  }

  .as-carousel.slick-initialized .as-hero-slide::after{
    background: rgb(0 0 0 / 48%) !important;
  }

  .as-carousel.slick-initialized .hero-style2
  {
    display:block;
  }

 




</style>


<script>



</script>




<div class="as-hero-wrapper hero-2" id="hero">

  <div id="banner_cont" class="hero-slider-2 as-carousel" data-autoplay="true" data-fade="true" data-slide-show="1" data-md-slide-show="1" data-arrows="true" data-xl-arrows="true" data-ml-arrows="true" data-lg-arrows="true" data-md-arrows="true" data-sm-arrows="true"  data-dots="true" data-xl-dots="true" data-ml-dots="true" data-lg-dots="true" data-md-dots="true" data-sm-dots="true" data-xs-dots="true">
    
    <?php foreach($banners as $banner){ ?>
	  
	<div class="as-hero-slide banner_bg" style1="background-image:url('<?php echo base_url(); ?>uploads/banners/<?php echo $banner->ban_image; ?>');opacity:1; background-repeat: no-repeat;
  background-position: center;"> 
	  
    <img style="width:100%;object-fit:cover;background:#fff;" src="<?php echo base_url(); ?>uploads/banners/<?php echo $banner->ban_image; ?>" width="100%" alt="" class="ba-img">
      
      <div class="Banner-slide"> 
      <div class="container">
        <div class="hero-style2">
          
        <div class="ripple-shape"><span class="ripple-1"></span><span class="ripple-2"></span><span class="ripple-3"></span><span class="ripple-4"></span><span class="ripple-5"></span><span class="ripple-6"></span></div>
         
        <h1 class="hero-title" data-ani="slideinright" data-ani-delay="0s"><?php echo $banner->ban_main_heading; ?></h1>
        <p class="hero-text w-50" data-ani="slideinleft" data-ani-delay="0s"><?php echo $banner->ban_sub_heading; ?></p>
        <div class="btn-group" data-ani="slideinright" data-ani-delay="0s"><a href="<?php echo base_url(); ?><?php echo $banner->ban_link; ?>" class="as-btn style3">READ MORE<i class="fa-regular fa-arrow-right ms-2"></i></a> <a href="<?php echo base_url(); ?>contact" class="as-btn style2">CONTACT US<i class="fa-regular fa-arrow-right ms-2"></i></a></div>
        
        </div>

		</div>
      </div>
    </div>

    <?php } ?>

	  
  </div>

  <?php 
  /*
  <div class="hero-shape1"><img src="<?php echo base_url(); ?>assets/img/hero/hero_shape_2_1.png" alt=""></div>
  <div class="hero-shape2"><img src="<?php echo base_url(); ?>assets/img/hero/hero_shape_2_2.png" alt=""></div>
  <div class="hero-shape3"><img src="<?php echo base_url(); ?>assets/img/hero/hero_shape_2_3.png" alt=""></div>
  */ 
  ?>

</div>

<div class="About-secs" id="about-sec" >
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 " data-aos="fade-right">
	  
    <h2 class="sec-title mobile-show">What we <span class="text-theme">focus?</span></h2>

	   <div class="img-box3">
	   <div class="img1"><img src="<?php echo base_url(); ?>assets/img/about_2_1.webp" alt=""></div>
	   <div class="img2"><img src="<?php echo base_url(); ?>assets/img/about_2_2.webp" alt=""></div>

	   <div class="shape1"><img src="<?php echo base_url(); ?>assets/img/about_2_shape.png" alt=""></div>
	   
	   <div class="year-counter">
            <h3 class="year-counter_number"><span class="counter-number1">5+</span></h3>
            <p class="year-counter_text">Years In Industry</p>
          </div>
	   </div>
	  
      </div>

      <div class="col-lg-6 simple-text" data-aos="fade-left">
        <div class="ps-xxl-4 ms-xl-3">
          <div class="title-area">
            <h2 class="sec-title pc-show ">What we <span class="text-theme">focus?</span></h2>
      </div>
          
      <div class="color-strip">
          <p class="">

          <?php $home_we_focus = strip_tags($about['content_dsec'],'<p>'); 
                echo text_cut($home_we_focus,110);
          ?>

          </p>
    </div>

          <div class="btn-group mt-20"><a href="<?php echo base_url(); ?>what-we-focus" data-aos="zoom-in" class="as-btn">READ MORE<i class="fa-regular fa-arrow-right ms-2"></i></a>
            <div class="call-btn" data-aos="zoom-in">
              <div class="play-btn"><i class="fas fa-phone"></i></div>
              <div class="media-body"><span class="btn-text">Call Us On:</span> <a href="tel:<?php echo str_replace(" ","",$contact['phone']); ?>" class="btn-title  home_about_title"><?php echo $contact['phone']; ?></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="Digital-blocksec" data-aos="zoom-in">
  <div class="container">
    <div class="row align-items-center flex-row-reverse">
      <div class="col-lg-6">
      <h2 class="sec-title mobile-show">Digital Transformation</h2>
        <div class="img-box2">
          <div class="img1"><img src="<?php echo base_url(); ?>assets/img/digital_1.webp" alt=""></div>
        </div>
      </div>
      <div class="col-lg-6 simple-text">
        <div class="title-area mb-35">
          <h2 class="sec-title pc-show">Digital Transformation</h2>
        </div>
        
        <div class="color-strip">
        <p class=" ">
          <?php $digital_home = strip_tags($digital['content_dsec'],'<p>'); 
          
                echo text_cut($digital_home,100);

          ?>
          </p>
      </div>
        
          <div class="btn-group mt-20" data-aos="zoom-in"><a href="<?php echo base_url(); ?>digital-transformation" class="as-btn">READ MORE<i class="fa-regular fa-arrow-right ms-2"></i></a>
           
          </div>
      </div>
    </div>
  </div>
</div>


<section class="service-sec " id="service-sec" data-bg-src="<?php echo base_url(); ?>assets/img/bg/service_bg_1.png">
  <div class="container">
    <div class="row justify-content-center ">
      <div class="col-lg-6 col-md-7 col-sm-10 px-xl-4">
        <div class="title-area text-center "  data-aos="fade-up">
          <h2 class="sec-title">We Provide Exclusive <span class="text-theme">Services</span> </h2>
        </div>
      </div>
    </div>

  <div class=" row justify-content-center" data-aos="fade-up">

      <?php foreach($services as $service){ ?>

      <div class="col-md-6 col-lg-4 d-flex">
        <div class="service-box">
          <div class="service-box_img"><img src="<?php echo base_url(); ?>uploads/service/<?php echo $service->image; ?>" alt=""></div>
          <div class="service-box_content">
           <?php /* <div class="service-box_icon"><img src="<?php echo base_url(); ?>assets/img/icon/service_box_1.svg" alt=""></div> */ ?>
            <h3 class="box-title"><a href="<?php echo base_url(); ?>services/<?php echo $service->category_slug; ?>"><?php echo $service->category_name; ?></a></h3>
            <div class="service-box_text simple-text"><p><?php echo $service->short; ?></p></div>
            
          </div>

          <a style="position:absolute;bottom:20px;left: 50%;
-webkit-transform: translateX(-50%);
transform: translateX(-50%) !important;" href="<?php echo base_url(); ?>services/<?php echo $service->category_slug; ?>" class="link-btn" data-aos="zoom-in">Read More<i class="fas fa-arrow-right ms-2"></i></a>

		          <div class="bg-shape"><img src="<?php echo base_url(); ?>assets/img/bg/service_box_bg.png" alt="bg"></div>
          </div>

      </div>


      <?php } ?>


	   </div>


    <div class="text-center mt-10" data-aos="zoom-in"><a href="<?php echo base_url(); ?>services" class="as-btn">VIEW ALL SERVICES<i class="fa-regular fa-arrow-right ms-2"></i></a></div>
  </div>

</section>


<section class="Industriesec" data-aos="fade-up">
  <div class="container">
    <div class="row justify-content-lg-between justify-content-center align-items-center">
      <div class="col-lg-5 mb-n2 mb-lg-0" data-aos="fade-right">
        <div class="title-area text-center text-lg-start">
          <h2 class="sec-title">Some of Our <span class="text-theme">Industries</span></h2>
        </div>
      </div>
      <div class="col-auto pc-show" data-aos="fade-left">
        <div class="sec-btn"><a href="<?php echo base_url(); ?>industries" class="as-btn">View All Industries<i class="fa-regular fa-arrow-right ms-2"></i></a></div>
      </div>
    </div>
    <div class="row slider-shadow as-carousel" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="1" data-sm-slide-show="1" data-infinite="true" data-focuson-select="false" data-arrows="true" data-xl-arrows="true" data-ml-arrows="true" data-lg-arrows="true" data-md-arrows="true" data-sm-arrows="true" data-dots="true" data-xl-dots="true" data-ml-dots="true" data-lg-dots="true" data-md-dots="true" data-sm-dots="true" data-xs-dots="true" >
      

    <?php foreach($industries as $industry){ ?>
    
    <div class="col-md-6 col-xl-4">
        <div class="project-card">
          <div class="project-img"><img src="<?php echo base_url(); ?>uploads/industries/<?php echo $industry->image; ?>" alt=""></div>
          <div class="project-content-wrap">
            <div class="project-content">
              <!--<div class="box-particle" id="project-p1"></div>-->
              <h3 class="box-title"><a href="<?php echo base_url(); ?>industries/<?php echo $industry->slug; ?>"><?php echo $industry->title; ?>
 </a></h3>
              
              <a href="<?php echo base_url(); ?>Industries/<?php echo $industry->slug; ?>" class="icon-btn -image"><i class="far fa-plus"></i></a></div>
          </div>
        </div>
      </div>


      <?php } ?>
  
     
    
    </div>
  </div>

 
  <div class="col-auto mobile-show" data-aos="fade-left">
        <div class="sec-btn"><a href="<?php echo base_url(); ?>Industries" class="as-btn">View All Industries<i class="fa-regular fa-arrow-right ms-2"></i></a></div>
  </div>
    


  <div class="shape-mockup" data-top="0%" data-right="0%"><img src="<?php echo base_url(); ?>assets/img/shape/tech_shape_1.png" alt="shape"></div>
  <div class="shape-mockup" data-bottom="0%" data-left="0%"><img src="<?php echo base_url(); ?>assets/img/shape/tech_shape_2.png" alt="shape"></div>
</section>

<section class="team-sec space" id="quick_contact" data-aos="fade-up">
  
  <div class="container">
  <div class="row">
    <div class="col-xl-6 pe-xxl-5 mb-40 mb-xl-0">
      <div class="title-area mb-20 " data-aos="fade-right">
        <h2 class="sec-title text-white">We're Ready To Talk About Your<span class="text-theme1">&nbsp;Requirements</span></h2>
      </div>
      <p class="text-white simple-text">Feel free to reach out to us with any questions or inquiries. Our dedicated team is ready to assist you.</p>
      <div class="contact-feature-wrap">
        <div class="contact-feature" data-aos="fade-up">
          <div class="icon-btn"><i class="fa-solid fa-phone"></i></div>
          <div class="media-body">
            <p class="contact-feature_label">Call Us On:</p>
            <a href="tel:<?php echo str_replace(" ","",$contact['phone']); ?>" class="contact-feature_link"><?php echo $contact['phone']; ?></a></div>
        </div>
        <div class="contact-feature" data-aos="fade-up">
          <div class="icon-btn"><i class="fa-solid fa-envelope"></i></div>
          <div class="media-body">
            <p class="contact-feature_label">Quick Mail Us:</p>
            <a href="mailto:<?php echo $contact['email']; ?>" class="contact-feature_link"><?php echo $contact['email']; ?></a></div>
        </div>
      </div>
    </div>
    <div class="col-xl-6 ps-xl-4">
      <h3 class="h4 mt-n2 mb-30 text-center text-white" data-aos="fade-left">Enquire Now</h3>
	  
	  
	  
    <form action="" method="POST"  id="Homecontact" class="appoitment-form ajax-contact1 val-form" data-aos="fade-up">
        <div class="row">
			<div class="form-group col-sm-6">
				<input type="text" class="form-control" name="name" id="name" pattern="[\S\s]*\S[\S\s]*" placeholder="Enter Your Name" required>
			</div>
			<div class="form-group col-sm-6">
				<input type="email" class="form-control" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="Enter Your Email " required>
			</div>
			 
			<div class="form-group col-sm-6">
				<input type="tel" class="form-control" name="number" id="number" pattern="[\S\s]*\S[\S\s]*" placeholder="Phone Number (Optional)" >
			</div>
			  
			<div class="form-group col-sm-6">
				<input type="text" class="form-control" name="subject" id="subject" pattern="[\S\s]*\S[\S\s]*" placeholder="Subject (Optional)" >				
			</div>
			  
			<div class="form-group col-12">
				<textarea name="message" id="message" cols="30" rows="3" class="form-control" pattern="[\S\s]*\S[\S\s]*" placeholder="Write Your Message" required></textarea>
			</div>
			  
			<!--  for entsglobal demo site -->
			<script src="https://www.google.com/recaptcha/api.js" async defer> </script>
			<div class="form-group col-12  center-align" style="">
				<div class="g-recaptcha" data-sitekey="6LeoPTEpAAAAAAq66PUoyiUcL2ZXX05dgafxyGkL"></div>
			</div>
			  
			  
			<!--  for entsglobal site -->
			<!--  <script src="https://www.google.com/recaptcha/api.js" async defer> </script>
			  <div class="form-group col-12  center-align">
				<div class="g-recaptcha" data-sitekey="6LddhJgpAAAAAGgRyd9AUtFTbVhU1YPoFfpulGY1"></div>
			  </div>-->
					
					
			<div class="form-btn col-12" data-aos="fade-left">
				<button type="submit" name="submit" class="as-btn w-100">Send Message</button>
			</div>
        </div>
        <p class="form-messages mb-0 mt-3"></p>
    </form>
	  
	  
    </div>
  </div>
</div>


  <div class="shape-mockup" data-bottom="0" data-left="0">
    <div class="particle-2" id="particle-2"></div>
  </div>
</section>


<section class="bg-top-right overflow-hidden Blog-sec" id="blog-sec" data-bg-src="assets/img/bg/blog_bg_1.png">
  <div class="container ">
    <div class="title-area text-center" data-aos="fade-up">
      <h2 class="sec-title">Latest <span class="text-theme">Blogs</span></h2>
    </div>
    <div class="row" >

      <?php foreach($blogs as $blog){ ?>

      <div class="col-md-6 col-lg-4 d-flex" data-aos="fade-right">
        <div class="blog-card">
          <div class="blog-img"><img src="<?php echo base_url(); ?>uploads/blogs/<?php echo $blog->blog_image; ?>" alt="blog image"></div>
          <div class="blog-content">
            <div class="blog-meta"><a href="#"><i class="fal fa-calendar-days"></i><?php echo date('d-M-Y',strtotime($blog->cdate)); ?></a> </div>
            <h3 class="box-title"><a href="<?php echo base_url(); ?>blogs/<?php echo $blog->blog_slug; ?>"><?php echo substr($blog->blog_title,0,45); ?>...</a></h3>
            <div class="blog-bottom" data-aos="zoom-in"><a href="<?php echo base_url(); ?>blogs/<?php echo $blog->blog_slug; ?>" class="line-btn">Read More<i class="fas fa-arrow-right"></i></a></div>
          </div>
        </div>
      </div>

      <?php } ?>

    </div>
	<div class="text-center mt-20 tab-blog-btn" data-aos="zoom-in"><a href="<?php echo base_url(); ?>blogs" class="as-btn">VIEW ALL BLOGS<i class="fa-regular fa-arrow-right ms-2"></i></a></div>
  </div>
 
  <div class="shape-mockup" data-bottom="0" data-left="0">
    <div class="particle-2 small" id="particle-4"></div>
  </div>

</section>


<?php $this->load->view('user/includes/footer'); ?>

 
<script>
$(document).ready(function () {
     function bannerheight(){
     var winHeight = $(window).height();
     $('.ba-img').css('height', winHeight + 'px');
     }

     $(window).on("load resize scroll",function(e){
      bannerheight();
    });

});

var maxHeight = 0;

$(".blog-content").each(function(){
   if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
});

$(".blog-content").height(maxHeight);


</script>

</body>
</html>