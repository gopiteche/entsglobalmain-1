<!doctype html>
<html class="no-js" lang="zxx">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title><?php if(!empty($service['meta_title'])) { echo $service['meta_title']; } else { echo $default_seo['m_title']; }  ?></title>
<meta name="description" content="<?php if(!empty($service['meta_desc'])) { echo $service['meta_desc']; } else { $default_seo['m_dis']; }   ?>">
<meta name="keywords" content="<?php if(!empty($service['meta_key'])) { echo $service['meta_key']; } else { $default_seo['m_key']; }   ?>">
<link rel="canonical" href="<?php echo base_url(); ?>Services" />


<style>

@media(max-width:525px)
{

.inner-box .rmore_btn
  {
    transform: translateX(-50%) !important;
  }

}

</style>



<?php $this->load->view('user/includes/header'); ?>


<?php
	if($service['cat_status']=='1'){
?>

	<!--banner section start----->

	<section class="banimg">

		<img src="<?php echo base_url(); ?>uploads/service/<?php echo $service['file']; ?>" class="loaded" data-was-processed="true">

		<div class="col-lg-12 inner_banner_text">

		<h1 class="inner_banner_text1"><?php echo $service['category_name']; ?></h1>

		</div>

	</section>

	<!--banner section end---->



	<!--page content start--->

	<section class="Innerpagesec py-lg-5 py-4 inner-padn" >

	  <div class="container">
		
		<div class="row">
	  
		  <div class="px-4">

			<div class="col-lg-12">

				<p><?php echo $service['category_content']; ?></p>

			</div>

		  </div>



	<style>

	 

	</style>





		
		 <div class="col-lg-12 col-md-12 col-sm-12">
		  
		  <div class="row ">
			  
			
		<?php foreach($sub_services as $sservice){ ?>
			 
		<div class="product-block-two col-lg-6 col-md-6 col-sm-12 d-flex">
		<a href="<?php echo base_url(); ?>services/<?php echo $service['category_slug']; ?>/<?php echo $sservice->package_slug; ?>">

		<div class="inner-box">
		<div class="image">
			<img src="<?php echo base_url(); ?>uploads/service/<?php echo $sservice->package_image; ?>" alt="">
			<!-- Options Navs -->
		</div>
		<div class="lower-content">
		<div class="plus-box">
		<div class="icon fa fa-plus"></div>
		</div>
		<h6><?php echo $sservice->package_name; ?></h6>

		<div class="service-box_text">
		  <p><?php echo preg_replace('#(<[a-z ]*)(style=("|\')(.*?)("|\'))([a-z ]*>)#', '\\1\\6', $sservice->heading); ?></p>
		</div>
			
		  </div>

		  <a class="rmore_btn link-btn" href="<?php echo base_url(); ?>services/<?php echo $service['category_slug']; ?>/<?php echo $sservice->package_slug; ?>" class="link-btn rmore_btn" data-aos="zoom-in">Read More<i class="fas fa-arrow-right ms-2"></i></a>       

		</div>
		</a>

	  </div>



		<?php } ?>
		 

	 




		   </div>


		 </div>
		
		
		
		</div>
	  </div>
	</section>

<?php }else{ ?>  

	<div class="row" style="text-align: center; background: #f7f7f7;">
			<div class="container">
				<img src="<?php echo base_url(); ?>assets/img/404.png" style="max-height:350px;padding-bottom:20px;" data-was-processed="true">
			</div>
		</div>	

<?php } ?>    


<!---page content  end--->


<?php $this->load->view('user/includes/footer'); ?>


</body>
</html>