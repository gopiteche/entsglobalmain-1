<!doctype html>
<html class="no-js" lang="zxx">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title><?php if(!empty($seo['meta_title'])) { echo $seo['meta_title']; } else { echo $default_seo['m_title']; }  ?></title>
<meta name="description" content="<?php if(!empty($seo['meta_description'])) { echo $seo['meta_description']; } else { $default_seo['m_dis']; }   ?>">
<meta name="keywords" content="<?php if(!empty($seo['meta_keyword'])) { echo $seo['meta_keyword']; } else { $default_seo['m_key']; }   ?>">


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

<div class="about-us-area overflow-hidden pt-5 py-5" >
    <div class="container">

    <div class="row">

        <div class="col-12 simple-text">

            <?php echo $cms['content_dsec']; ?>

        </div>


    </div>
    
    </div>
</div>


<!---page content end--->

<?php $this->load->view('user/includes/footer'); ?>

</body>
</html>