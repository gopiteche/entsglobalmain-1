<!doctype html>
<html class="no-js" lang="zxx">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title><?php if(!empty($seo['meta_title'])) { echo $seo['meta_title']; } else { echo $default_seo['m_title']; }  ?></title>
<meta name="description" content="<?php if(!empty($seo['meta_description'])) { echo $seo['meta_description']; } else { $default_seo['m_dis']; }   ?>">
<meta name="keywords" content="<?php if(!empty($seo['meta_keyword'])) { echo $seo['meta_keyword']; } else { $default_seo['m_key']; }   ?>">


<?php $this->load->view('user/includes/header'); ?>


<style>

.career_loc{
font-size: 16px !important;
font-weight: 600 !important;
color: #0c0c0cc7 !important;
padding:0 !important;
}

</style>


<!--banner section start----->

<section class="banimg">

    <img src="<?php echo base_url(); ?>uploads/banners/<?php echo $banner['image']; ?>" class="loaded" data-was-processed="true">


    <div class="col-lg-12 inner_banner_text">

        <h1 class="inner_banner_text1"><?php echo $banner['title']; ?></h1>

    </div>

</section>

<!--banner section end---->



<!--career section start---->



        
<section class="Jobsekersec mb-4 py-5 inner-paddn">
			
    <div class="container flexx">
        
        




<div class="row col-lg-10">



<?php foreach($careers as $career){ ?>

<div class="col-lg-12 col-md-12 col-sm-6">
<div class="Jobe-one__single">
                      
                        <div class="Jobe-one__content">
                            <div class="career_det date career_loc">
                                <i class="fa-regular fa-clock"></i> <span class="career_loc"><?php echo date('M d,Y',strtotime($career->career_date)); ?></span>
                            </div>
                            <h3 class="Jobe-one__title"><a href="<?php echo base_url(); ?>careers/<?php echo $career->career_slug; ?>"><?php echo $career->career_tittle; ?></a></h3>                         
                            <div class="career_det">
                                <span class="career_loc">Location : <?php echo $career->career_location; ?></span>
                            </div>
							<div>
    
	                           <h6 class="career_loc">Experience &nbsp;:&nbsp;<?php echo $career->career_req; ?> &nbsp  | &nbsp Job Type: <?php echo $career->career_type; ?></h6>
                           
                            </div>

							<div>

						<p class="" style="text-align:unset;color:#4D4D4D;"><?php echo substr(strip_tags($career->career_desc),0,360); ?>...</p>

							</div>
							
                        </div>
                    </div>
</div>


<?php } ?>



</div>
    </div>
</section>

<!--career section end---->




<?php $this->load->view('user/includes/footer'); ?>



</body>
</html>