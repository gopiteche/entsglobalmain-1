<!doctype html>
<html class="no-js" lang="zxx">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title><?php if(!empty($seo['meta_title'])) { echo $seo['meta_title']; } else { echo $default_seo['m_title']; }  ?></title>
<meta name="description" content="<?php if(!empty($seo['meta_description'])) { echo $seo['meta_description']; } else { $default_seo['m_dis']; }   ?>">
<meta name="keywords" content="<?php if(!empty($seo['meta_keyword'])) { echo $seo['meta_keyword']; } else { $default_seo['m_key']; }   ?>">
<link rel="canonical" href="<?php echo base_url(); ?>Services" />

<style>

.services_padding h2
{
    margin-top: 40px;
}

@media (min-width:720px)
{

.cnt
{
  padding: 0px !important;
}



}


@media (max-width:525px)
{

  .ser
  {
    margin: 10px 0px;
    box-shadow: 0px 0px 3px -1px #717171;

  }


  .ser_img{
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
  }


}

.ser
{
  position:relative;
}


.ser_img
{
  height:100%;
  display:flex;
  align-items:center;
  justify-content:center;
}


</style>


<?php $this->load->view('user/includes/header'); ?>


<!--banner section start----->

<section class="banimg" style="max-height:455px">

    <img src="<?php echo base_url(); ?>uploads/banners/<?php echo $banner['image']; ?>" class="loaded" data-was-processed="true">

    <div class="col-lg-12 inner_banner_text"> 

    <h1 class="inner_banner_text1"><?php echo $banner['title']; ?></h1>
		
   </div>
	
</section>


<!--<div>
   <div class="container-fluid">
     <div class="row">
	    <div class="col-lg-12">
		   <div class="serv_main_box">
		      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
		   </div>
		</div>
	 </div>
   </div>
</div>---->

<!--service test box start-->
		
		<div>

   <div class="container cnt py-lg-5 py-4 inner-padn" style="">

     <div class="row">
	    <div class="col-lg-12 simple-text">
		  
      <!-- <div class="serv_main_box"> -->
		  
          <!--<h6>What We Focus?</h6>-->
		      <p><?php echo $focus['content_dsec']; ?></p>
		  
      <!-- </div> -->
		
    </div>
	 </div>
   </div>
</div>
		
		
		<!--swervice text box end-->


<div class="service_section">
  <div class="container">


  <?php

  $i=0;

  foreach($services as $service){ ?>

  <?php if($i%2==0) { ?>

    <div class="row  flex-row-reverse ser text-shadow-box" data-aos="zoom-in">

      <div class="col-lg-6 p-0">

        <div class="h-100">
          
        <div class="ser_img">
            
        <img src="<?php echo base_url(); ?>uploads/service/<?php echo $service->image; ?>" alt="">
        
        </div>

        </div>


     <a href="<?php  echo base_url();?>services/<?php echo $service->category_slug; ?>">
		 <div class="service_arrow_box"><i class="far fa-chevron-right"></i></div>
     </a>



      </div>

	 
      <div class="col-lg-6 services_padding ">

        <div class="">
          
          <a href="<?php  echo base_url();?>services/<?php echo $service->category_slug; ?>"><h2 class=""><?php echo $service->category_name; ?></h2></a>
      
        </div>
		
        <p><?php echo $service->short; ?></p> 

        <div class="col-lg-12 text-center mobile-show">

        <a style="" href="<?php echo base_url(); ?>services/<?php echo $service->category_slug; ?>/<?php echo url_title($service->category_name); ?>" class="link-btn" data-aos="zoom-in">Read More<i class="fas fa-arrow-right ms-2"></i></a>

        </div>
       
       
      </div>
    </div>

    <?php } else { ?>


 <div class="row  flex-row-reverse ser text-shadow-box" data-aos="zoom-in">
      
      <div class="col-lg-6 services_padding  left order-2 order-lg-1">

        <div class="">

        <a href="<?php  echo base_url();?>services/<?php echo $service->category_slug; ?>"><h2 class=""><?php echo $service->category_name; ?></h2></a>

        </div>
        
        <p><?php echo $service->short; ?></p> 

        <div class="col-lg-12 text-center mobile-show">

<a style="" href="<?php echo base_url(); ?>services/<?php echo $service->category_slug; ?>" class="link-btn" data-aos="zoom-in">Read More<i class="fas fa-arrow-right ms-2"></i></a>

      </div>
         
      </div>

      <div class="col-lg-6 p-0 order-1 order-lg-2">
        <div class="h-100">
        
        <!--<div class="ser_img" style="background-image:url('<?php echo base_url(); ?>uploads/service/<?php echo $service->image; ?>');">-->
        
        <div class="ser_img" >

        <img src="<?php echo base_url(); ?>uploads/service/<?php echo $service->image; ?>" alt=""> 
      
      </div> 
        
      </div>


    <a href="<?php  echo base_url();?>services/<?php echo $service->category_slug; ?>">
	
  	<div class="service_arrow_box right"><i class="far fa-chevron-right"></i></div>

    </a>

    </div>

      </div>
    


    <?php } ?>




    <?php $i++; } ?>


  </div>
</div>


<?php $this->load->view('user/includes/footer'); ?>


</body>
</html>