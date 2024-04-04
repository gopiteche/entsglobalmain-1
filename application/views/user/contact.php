<!doctype html>
<html class="no-js" lang="zxx">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title><?php if(!empty($seo['meta_title'])) { echo $seo['meta_title']; } else { echo $default_seo['m_title']; }  ?></title>
<meta name="description" content="<?php if(!empty($seo['meta_description'])) { echo $seo['meta_description']; } else { $default_seo['m_dis']; }   ?>">
<meta name="keywords" content="<?php if(!empty($seo['meta_keyword'])) { echo $seo['meta_keyword']; } else { $default_seo['m_key']; }   ?>">

<link rel="canonical" href="<?php echo base_url(); ?>Contact" />


<style>
   .space, .space-top 
   {
    padding-top: 0px;
   }
   .as-btn.contact_btn
   {
    background: #0064b0;
   }
   .contact_adress_icon 
   {
        padding-right: 10px;
		padding-top: 14px;
		color: var(--theme-color);
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
  
      
  
  <div class="bg-smoke space pt-5 contact_res_sec" data-bg-src="assets/img/bg/contact_bg_1.png" style="padding-bottom:15px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-xl-4">
          

          <?php foreach($addresses as $address) { ?>

          <div class="contact-info">
            <div class="contact-info_icon"><i class="fas fa-location-dot"></i></div>
            <div class="media-body">
              <h4 class="box-title"><?php echo $address->location; ?></h4>
              
              <span class="contact-info_text"><?php echo $address->address; ?></span>

				 <a class="text-decoration-none;text-black" href="tel:<?php echo str_replace(" ","",$address->phone); ?>"><i class="fas fa-phone contact_adress_icon"></i><span class="text-dark"><?php echo $address->phone; ?></span></a><br>

				 <a class="text-decoration-none;text-black" href="mailto:<?php echo $address->email; ?>"><i class="fas fa-envelope contact_adress_icon"></i><span class="text-dark"><?php echo $address->email; ?></span></a><br>
                
               </div>
          </div>

          <?php } ?>
      
        
        </div>

        <div class="col-xl-8">
          <div class="title-area mb-35 text-xl-start text-center"><span class="sub-title"><img src="<?php echo base_url(); ?>assets/img/title_shape_2.svg" alt="shape">GET IN TOUCH!</span>
            <h2 class="sec-title">Have Any Questions?</h2>
           
          </div>
		  
		  
          <form method="POST" id="Contact_form" class="contact-form ajax-contact1 val-form">
            <div class="row">
              <div class="form-group col-md-6">
                <input type="text" class="form-control" name="name" pattern="[\S\s]*\S[\S\s]*" id="name" placeholder="Your Name" required>
                <i class="fal fa-user"></i></div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" id="email" placeholder="Email Address" required>
                <i class="fal fa-envelope"></i></div>

                <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="org" pattern="[\S\s]*\S[\S\s]*"  placeholder="Organization (Optional)" >
                  <i class="fa-light fa-pen"></i></div> 

                <div class="form-group col-md-6">
                <input type="tel" class="form-control" name="number" pattern="[\S\s]*\S[\S\s]*" id="number" placeholder="Phone Number (Optional)" >
                <i class="fal fa-phone"></i></div>
                 

                  <div class="form-group col-md-6">

                  <select class="form-control" name="service" id="subject" >
                  
                  <option value="" selected>Select Service (Optional)</option>

                  <?php foreach($all_services as $contactservice) { ?>

                    <option value="<?php echo $contactservice->category_name; ?>"><?php echo $contactservice->category_name; ?></option>

                  <?php } ?>

                  <option value="Hire a Resource" <?php if(!empty($_GET['type']) && $_GET['type']=="hire") { echo "selected"; } ?> >Hire a Resource</option>

                  <option value="Other">Other</option>

                  </select></div>

                  <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="subject" id="subject" pattern="[\S\s]*\S[\S\s]*" placeholder="Subject (Optional)">
                  <i class="fa-light fa-pen"></i></div>

           
              <div class="form-group col-12">
                <textarea required name="message" id="message" cols="30" rows="3" pattern="[\S\s]*\S[\S\s]*" class="form-control" placeholder="Your Message"></textarea>
                <i class="fal fa-comment"></i></div>
				
				<!--  for entsglobal demo site -->
				 <script src="https://www.google.com/recaptcha/api.js" async defer> </script>
				  <div class="form-group col-12 center-align" style="">
					<div class="g-recaptcha" data-sitekey="6LeoPTEpAAAAAAq66PUoyiUcL2ZXX05dgafxyGkL"></div>
				  </div>
				  
				<!--  for entsglobal site -->
				 <!--  <script src="https://www.google.com/recaptcha/api.js" async defer> </script>
				  <div class="form-group col-12 center-align">
					<div class="g-recaptcha" data-sitekey="6LddhJgpAAAAAGgRyd9AUtFTbVhU1YPoFfpulGY1"></div>
				  </div> -->
				
				  
              <div class="form-btn mobile-form-btn text-center col-12">
                <button type="submit" class="as-btn contact_btn">Send Message<i class="fa-regular fa-arrow-right ms-2"></i></button>
              </div>
            </div>
            <p class="form-messages mb-0 mt-3"></p>
          </form>
        </div>
      </div>
    </div>

    <div class="container" style="margin-top:40px;">

    <div class="row">
	    <div class="col-lg-4 map-col" style="padding-right: 10px;">
		    <div class="map-sec">
        
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13259.520868236265!2d151.0082682!3d-33.8154041!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12a3f310865647%3A0xddaf2351de9fe56a!2sENTS%20Global.!5e0!3m2!1sen!2sin!4v1688115592464!5m2!1sen!2sin"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         
                </div>
		</div>
		
		<div class="col-lg-4 map-col" style="padding:0px;padding-right: 10px;">
		    <div class="map-sec">

        
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15715.54239584378!2d76.3389007!3d10.0262984!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b080c5dbf1309a7%3A0xc519f1109b93a8b!2sENTS%20Global.!5e0!3m2!1sen!2sin!4v1688115684078!5m2!1sen!2sin"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            
                </div>
		</div>
		
		
		<div class="col-lg-4 map-col" style="padding: 0px;">
		<div class="map-sec">
    
    

                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15715.54239584378!2d76.3389007!3d10.0262984!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b080c5dbf1309a7%3A0xc519f1109b93a8b!2sENTS%20Global.!5e0!3m2!1sen!2sin!4v1688115684078!5m2!1sen!2sin"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
                </div>
		</div>
		
	</div>

  </div>



  </div>


  <!--<div class="map-sec">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31430.285088253644!2d76.31857128698466!3d10.03454040030306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b080c45c3b48f9b%3A0x623216e285e7e76e!2sThrikkakara%2C%20Edappally%2C%20Ernakulam%2C%20Kerala!5e0!3m2!1sen!2sin!4v1675490380817!5m2!1sen!2sin"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>--->
  
  
 
<!-- select input on page load -->
<script>

var input = document.getElementById('name');
input.focus();
input.select();

</script>
 
  

<!---page content end

difference bw php and ci

how to connect 2 db in ci

Aggregate functions

difference between distinct and groupby

trigger in sql

prepared statements in php

data types in sql

different types of sdlc


--->

<?php $this->load->view('user/includes/footer'); ?>




</body>
</html>