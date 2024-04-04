<!doctype html>
<html class="no-js" lang="zxx">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title><?php if(!empty($seo['meta_title'])) { echo $seo['meta_title']; } else { echo $default_seo['m_title']; }  ?></title>
<meta name="description" content="<?php if(!empty($seo['meta_description'])) { echo $seo['meta_description']; } else { $default_seo['m_dis']; }   ?>">
<meta name="keywords" content="<?php if(!empty($seo['meta_keyword'])) { echo $seo['meta_keyword']; } else { $default_seo['m_key']; }   ?>">


<style>

 .synergy_table_div_img
 {
    box-shadow: 0 0px 14px 8px #e3e3e3;
    padding: 0px;
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



<!--page content   start---->


<section class="welcome-section updated mb-lg-5 mb-0 py-4 py-lg-5 inner-padn">
  <div class="container">
    <div class="row clearfix" style="display: block;">

    <?php /*
      <div class="image-column col-lg-5 col-md-12 col-sm-12 ">
        <div class="synergy_table_div_img"><img src="<?php echo base_url(); ?>assets/img/dig_img.jpg" style="float: left;margin-right: 30px;height: 367px;"></div>
      </div>
    */ ?>

      <div class="content-column simple-text">
        <div class="inner-column ">
          
          <div class="text abtestsec ">
          
          <p>

            <?php echo $digital['content_dsec']; ?>
			
		      </p>
		  
		  </div>
         
      </div>
    </div>
  </div>
  
</section>

        


<!--page content end---->



<?php $this->load->view('user/includes/footer'); ?>



</body>
</html>