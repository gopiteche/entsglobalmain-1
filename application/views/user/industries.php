<!doctype html>
<html class="no-js" lang="zxx">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title><?php if(!empty($seo['meta_title'])) { echo $seo['meta_title']; } else { echo $default_seo['m_title']; }  ?></title>
<meta name="description" content="<?php if(!empty($seo['meta_description'])) { echo $seo['meta_description']; } else { $default_seo['m_dis']; }   ?>">
<meta name="keywords" content="<?php if(!empty($seo['meta_keyword'])) { echo $seo['meta_keyword']; } else { $default_seo['m_key']; }   ?>">
<link rel="canonical" href="<?php echo base_url(); ?>Industries" />

<style>

.text-sm-start
{
      
	   height: 475px;
}

.text-sm-start.color
{
     background: azure !important;
	   height: 475px;
}

@media (min-width: 962px) and (max-width: 1199px){
.inner_prod_det h2 {
    margin-top: 0px !important;
}
}

.image_resized
{
	text-align: center;
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



<!---page content start--->

<section class=" pb-4 py-4">

<?php 
$o=1;
foreach($industries as $industry) 
{
	
?>

<?php if($o%2==0) { ?>

<section class="space-about-bottom inner_prod_det" >
    <div class="container position-relative">
       <div class="row industry-block-detail">
       
  
       <div class="col-lg-5 order-1 overflow-hidden">
        <div class="mb-0 mb-lg-0">
         <div class="vs-video rounded-15">
           <img src="<?php echo base_url(); ?>uploads/industries/<?php echo $industry->image; ?>" alt="" class="w-100 gradient-border"> 
            
        </div>
      </div>
       </div>
       <div class="col-lg-7 text-sm-start text-center ps-xl-4 align-self-center align-self-xxl-end order-2">
       <a href="<?php echo base_url(); ?>industries/<?php echo $industry->slug; ?>"><h2 class="sec-title"><?php echo $industry->title; ?></h2></a>
       <p class="pt-1 mb-40"><?php echo $industry->short; ?></p>
       <div class="industries_button">
       
       <a class="link-btn ttm-btn ttm-btn-size-sm ttm-icon-btn-right ttm-btn-color-skincolor btn-inline mb-15" href="<?php echo base_url(); ?>industries/<?php echo $industry->slug; ?>">READ MORE &nbsp; <i class="fas fa-long-arrow-right"></i></a></div>
      
      </div>
      </div>
      <div class="about-border"></div>
      </div>
      <div class="shape-mockup jump d-none d-xl-block" data-top="40%" data-right="0%">
      <img src="<?php echo base_url();  ?>assets/img/dots-2.png" alt="shapes">
      </div>
      </section>


    <?php } else { ?>


    <section class="space-about-bottom inner_prod_det second">
    <div class="container position-relative">
       <div class="row industry-block-detail"> 
       <div class="col-lg-7 text-sm-start text-center ps-xl-5 align-self-center align-self-xxl-end order-2 order-lg-1">
        
       <a href="<?php echo base_url(); ?>industries/<?php echo $industry->slug; ?>"><h2 class="sec-title"><?php echo $industry->title; ?></h2></a>
       
       <p class="pt-1 mb-40 ml-30"><?php echo $industry->short; ?></p>      
        <div class="industries_button left">
        
        <a style="padding-left:0;" class="link-btn ttm-btn ttm-btn-size-sm ttm-icon-btn-right ttm-btn-color-skincolor btn-inline mb-15" href="<?php echo base_url(); ?>industries/<?php echo $industry->slug; ?>">READ MORE &nbsp; <i class="fas fa-long-arrow-right"></i></a>
        
        </div>

      </div>
      <div class="col-lg-5 order-1 order-lg-2 overflow-hidden">
        <div class="mb-0 mb-lg-0">
         <div class="vs-video second rounded-15">
           <img src="<?php echo base_url(); ?>uploads/industries/<?php echo $industry->image; ?>" alt="" class="w-100 gradient-border"> 
            
        </div>
      </div>
       </div>
      </div>
      <div class="about-border1"></div>
      </div>
      <div class="shape-mockup jump d-none d-xl-block" data-top="40%" data-right="0%">
      <img src="<?php echo base_url(); ?>assets/img/dots-2.png" alt="shapes">
      </div>
      </section>

      <?php } ?>

      <?php $o++; } ?>


    </section>
<!--page content end-->

<?php $this->load->view('user/includes/footer'); ?>



</body>
</html>