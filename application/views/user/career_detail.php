<!doctype html>
<html class="no-js" lang="zxx">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title><?php if(!empty($seo['meta_title'])) { echo $seo['meta_title']; } else { echo $default_seo['m_title']; }  ?></title>
<meta name="description" content="<?php if(!empty($seo['meta_description'])) { echo $seo['meta_description']; } else { $default_seo['m_dis']; }   ?>">
<meta name="keywords" content="<?php if(!empty($seo['meta_keyword'])) { echo $seo['meta_keyword']; } else { $default_seo['m_key']; }   ?>">

<style>

.hpot
{
  display:none;
}


.career_loc{
font-size: 16px !important;
font-weight: 600 !important;
color: #0c0c0cc7 !important;
padding:0 !important;
}




</style>

<?php $this->load->view('user/includes/header'); ?>

<!--banner section start----->

<section class="banimg">

    <img src="<?php echo base_url(); ?>uploads/banners/<?php echo $banner['image']; ?>" class="loaded" data-was-processed="true">

    <div class="col-lg-12 inner_banner_text">

        <h1 class="inner_banner_text1">Careers</h1>

    </div>

</section>

<!--banner section end---->



<!---page content start--->

<section class="Jobsekersec py-lg-5 py-4 inner-padn">
			
    <div class="container">
        


<div class="row">

<div class="col-lg-12 mb-4 pc-show" ><a href="<?php echo base_url(); ?>careers"> <img src="<?php echo base_url(); ?>assets/img/back.png" alt="" style="float: right;
    margin-top: -3%;
    border-radius: 50%;"> </a> 
	 </div>



<div class="col-lg-6 p-0">




<div class="">

<h3 class="simple-text"><?php echo $career['career_tittle']; ?></h3>

<div class="career_det career_loc simple-text">
  <i class="fa-solid fa-calendar-days"></i> <span class="career_loc"><?php echo date('M d,Y',strtotime($career['career_date'])); ?></span>
</div>


<div class="career_det career_loc simple-text">
    <i class="fas fa-location-dot location"></i> <span class="career_loc"><?php echo $career['career_location']; ?></span>
</div>

<div>
    
	<h6 class="career_loc simple-text">Experience: <?php echo $career['career_req']; ?> &nbsp  | &nbsp Job Type : <?php echo $career['career_type']; ?></h6>

</div>

<div class="simple-text">
<p ><?php echo $career['career_desc']; ?></p>
</div>

</div>
</div>

	<div class="col-lg-6">
		<div class="jobsform">
			<div class="section-title text-left">
				<h2 class="section-title__title">Apply Now</h2>
			</div>

			<form class="val-form" id="Carrer_form" action="" method="post" enctype="multipart/form-data">
		
				<input class="hpot" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email" id="email" value="" autocomplete="off">

				<input type="hidden" name="job_post" value="<?php echo $career['career_tittle']; ?>">

				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="form-group">					   
							<input name="name" id="name" type="text" pattern="[\S\s]*\S[\S\s]*" placeholder="Full Name" class="form-control" required="">
							<i class="fal fa-user"></i>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="form-group">					   
							<input name="email_r" id="email_r" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="Email Address" class="form-control" required="">
							<i class="fal fa-envelope"></i>
						</div>
					</div>
				</div>



				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="form-group">         
							<input name="phone" id="phone" type="text" pattern="[\S\s]*\S[\S\s]*" placeholder="Contact No" class="form-control" required="">
							<i class="fal fa-phone"></i>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="form-group">
							<input style="padding: 15px 25px;" name="resume" id="resume" type="file" placeholder=""  class="form-control" required="">
						</div>
					</div>
				</div>



				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="form-group">             
						<textarea name="messsage" id="messsage" placeholder="Message (Optional)" pattern="[\S\s]*\S[\S\s]*" class="form-control"></textarea>
						<i class="fal fa-comment"></i>
					</div>
				</div>
				
				<!--  for entsglobal demo site -->
					
				<div class="col-lg-12 col-md-12 col-sm-12  center-align">
					<script src="https://www.google.com/recaptcha/api.js" async defer> </script>
					<div class="form-group m-0 text-center">
						<div class="g-recaptcha" data-sitekey="6LeoPTEpAAAAAAq66PUoyiUcL2ZXX05dgafxyGkL"></div>
					</div>	
				</div>	
				
				<!--  for entsglobal site -->
				<!-- <div class="col-lg-12 col-md-12 col-sm-12">
					<script src="https://www.google.com/recaptcha/api.js" async defer> </script>
					<div class="form-group m-0 text-center">
						<div class="g-recaptcha" data-sitekey="6LddhJgpAAAAAGgRyd9AUtFTbVhU1YPoFfpulGY1"></div>
					</div>	
				</div>	-->
					
				<div class="form-btn col-12 apply_center text-center" style="margin-top:20px;">
					<button type="submit" class="as-btn contact_btn">Submit</button>
				</div>
			</form>
				
		</div>
            
	</div>

</div>




</div>
    </div>
</section>     



<!---page content end--->

<?php $this->load->view('user/includes/footer'); ?>


</body>
</html>