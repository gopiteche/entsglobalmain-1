<!doctype html>
<html class="no-js" lang="zxx">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title><?php if(!empty($seo['meta_title'])) { echo $seo['meta_title']; } else { echo $default_seo['m_title']; }  ?></title>
<meta name="description" content="<?php if(!empty($seo['meta_description'])) { echo $seo['meta_description']; } else { $default_seo['m_dis']; }   ?>">
<meta name="keywords" content="<?php if(!empty($seo['meta_keyword'])) { echo $seo['meta_keyword']; } else { $default_seo['m_key']; }   ?>">
<link rel="canonical" href="<?php echo base_url(); ?>Services" />




<?php $this->load->view('user/includes/header'); ?>

   
    <!--page content start---> 
   
   <div class="container">
       <div class="row">
	       <div class="col-lg-12 text-center my-5">
		        <h2> Page Not Found</h2> 
				<h4>We Are Sorry.</h4>
			    <h4>The page you requested is not found</h4>
			    <a href='<?php echo base_url();?>' class="as-btn aos-init aos-animate">Back to Homepage</a>
		   </div>
	   </div>
   </div>
   
   <!---page content end--->


<?php $this->load->view('user/includes/footer'); ?>


</body>
</html>