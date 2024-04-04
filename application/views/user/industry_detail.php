<!doctype html>
<html class="no-js" lang="zxx">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">

<title><?php echo $industry['meta_title']; ?></title>
<meta name="description" content="<?php  echo $industry['meta_desc'];   ?>">
<meta name="keywords" content="<?php echo $industry['meta_key']; ?>">

<link rel="canonical" href="<?php echo base_url(); ?>Industries" />

<style>
.service-detail ul
{
  list-style-position: inside !important;
  padding-left: 2rem !important;
}
.image-style-align-center
{
	text-align: center;
}
</style>

<?php $this->load->view('user/includes/header'); ?>

<!--banner section start----->


<?php if($industry['industries_status'] == '1') { ?>


<section class="banimg">

<img src="<?php echo base_url(); ?>uploads/industries/<?php echo $industry['file']; ?>" class="loaded" data-was-processed="true">


    <div class="col-lg-12 inner_banner_text">

        <h1 class="inner_banner_text1"><?php echo $industry['title']; ?></h1>

    </div>

</section>

<!--banner section end---->



<!--page content start---->

<div class="single-services p-4 py-lg-5 inner-padn " >

  <div class="container p-0">

    <div class="row mb-lg-4">
   
    <div class="col-lg-12 px-4 pc-show" ><a href="<?php echo base_url(); ?>Industries"> <img src="<?php echo base_url(); ?>assets/img/back.png" alt="" style="float: right;
    margin-top: -3%;
    border-radius: 50%;"> </a>  
    </div>    

          <?php /*

          <div class="col-lg-8 det-img">  
            <img src="<?php echo base_url(); ?>uploads/industries/<?php echo $industry['image']; ?>" alt="" style="float:left">    
          </div>

          */ ?>

       
        <div class="service-detail">

        <?php echo $industry['content']; ?>

        </div>

    
</div>

    </div>

  </div>

</div>							
<?php }else { ?>

	<div class="row" style="text-align: center; background: #f7f7f7;">
			<div class="container">
				<img src="<?php echo base_url(); ?>assets/img/404.png" style="max-height:350px;padding-bottom:20px;" data-was-processed="true">
			</div>
		</div>	


<?php } ?>



<!---page content end---->


<?php $this->load->view('user/includes/footer');  ?>


</body>
</html>