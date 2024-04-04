<!doctype html>
<html class="no-js" lang="zxx">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title><?php if(!empty($service['package_meta_title'])) { echo $service['package_meta_title']; } else { echo $default_seo['m_title']; }  ?></title>
<meta name="description" content="<?php if(!empty($service['package_meta_desc'])) { echo $service['package_meta_desc']; } else { $default_seo['m_dis']; }   ?>">
<meta name="keywords" content="<?php if(!empty($service['package_meta_key'])) { echo $service['package_meta_key']; } else { $default_seo['m_key']; }   ?>">

<link rel="canonical" href="<?php echo base_url(); ?>Services" />

<style>


</style>


<?php $this->load->view('user/includes/header'); ?>


<style>
.image_resized {
	text-align: center;
    
}

.image-style-align-left {
    float: left;
    text-align: unset !important;
    padding-right: 15px;
	
}
.image-style-align-left img{
	width:98% !important;

}
.page-break{
	clear: both;
}

@media (max-width:525px){
	
	.image-style-align-left{
		width: unset !important;
	}
	
}

@media (min-width:641px) and (max-width:961px){
	.image-style-align-left{
		width: unset !important;
	}
}
</style>


<?php
	$sql ="SELECT * FROM entsglobal_category where category_id = '".$service['package_parent_id']."' ";
	$query = $this->db->query($sql);
	if ($query->num_rows() > 0) {
		foreach ($query->result() as $row) { 
			$cat_status = $row->cat_status;
		}
	} 
?>


<?php  if($service['package_status'] == '1' && $cat_status == '1'){ ?>
			   
	<div>

	<!--banner section start----->

	<section class="banimg">

		<img src="<?php echo base_url(); ?>uploads/service/<?php echo $service['file']; ?>" class="loaded" data-was-processed="true">


		<div class="col-lg-12 inner_banner_text">

			<h1 class="inner_banner_text1"><?php echo $service['package_name']; ?></h1>

		</div>

	</section>

	<!--banner section end---->



	<!--page content start---->
	<div class="single-services py-lg-5 py-4 inner-padn" >

	  <div class="container">

		<div class="row">
	   
		  <div class="col-lg-12 pc-show" ><a href="<?php echo base_url(); ?>services/<?php echo  $category['category_slug']; ?>"> <img src="<?php echo base_url(); ?>assets/img/back.png" alt="" style="float: right;
		margin-top: -3%;
		border-radius: 50%;"> </a>    
		</div>
		
			  <?php /*
			  <div class="col-lg-8 det-img">
			  <img src="<?php echo base_url(); ?>uploads/service/<?php echo $service['package_image']; ?>" alt="" style="float:left">    
			  </div>
			  */ ?>

		  <div class="simple-text">
		  
			<?php echo $service['package_desc']; ?>
			
		  </div>

		  
	</div>

		</div>

	  </div>

	</div>			
	
<?php  }else{ ?>

		<div class="row" style="text-align: center; background: #f7f7f7;">
			<div class="container">
				<img src="<?php echo base_url(); ?>assets/img/404.png" style="max-height:350px;padding-bottom:20px;" data-was-processed="true">
			</div>
		</div>			

<?php } ?>




<!---page content end---->




<?php $this->load->view('user/includes/footer'); ?>



</body>
</html>