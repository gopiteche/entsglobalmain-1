<!doctype html>
<html class="no-js" lang="zxx">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title><?php if(!empty($seo['meta_title'])) { echo $seo['meta_title']; } else { echo $default_seo['m_title']; }  ?></title>
<meta name="description" content="<?php if(!empty($seo['meta_description'])) { echo $seo['meta_description']; } else { $default_seo['m_dis']; }   ?>">
<meta name="keywords" content="<?php if(!empty($seo['meta_keyword'])) { echo $seo['meta_keyword']; } else { $default_seo['m_key']; }   ?>">

<style type="text/css">
		
        .main
        {

            font-size:20px;

            font-weight:500;

        }

        ul li {
  list-style-position: inside;
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




<!--page content start---->

<div class="about-us-area overflow-hidden pt-5 py-5" >
    <div class="container">


    <div class="col-lg-3 mx-auto">

<ul class="text-left">
	<!-- Start Homepage  -->
		<li class="my-2"><a class="sitemap-heading main" href="<?php echo base_url(); ?>">Homepage</a></li>

        <li  class="my-2"><a class="sitemap-heading main" href="<?php echo base_url(); ?>about">Company</a></li>

	<!-- End Homepage -->
	<!-- Start About us -->
		<li  class="my-2"><a class="sitemap-heading main" href="<?php echo base_url(); ?>services">Services</a>
			
        <ul>

        <?php foreach($all_services as $hservice) { ?>

				<li><a href="<?php echo base_url(); ?>services/<?php echo $hservice->category_slug; ?>"><?php echo $hservice->category_name; ?></a>
        
      

                <ul>

                <?php foreach($hservice->subservice as $hsubservice){ ?>

<li><a href="<?php echo base_url(); ?>services/<?php echo $hservice->category_slug;?>/<?php echo $hsubservice->package_slug; ?>"><?php echo $hsubservice->package_name; ?></a></li>

                <?php } ?>

                </li>

                </ul>

      <?php } ?>


		</ul>

		</li>
	<!--End About us -->



    	<!-- Start About us -->
		<li  class="my-2"><a class="sitemap-heading main" href="<?php echo base_url(); ?>industries">Industries</a>
			
            <ul>
    
            <?php foreach($all_industries as $hindustry) {?>
    
                    <li><a href="<?php echo base_url(); ?>industries/<?php echo $hindustry->slug; ?>"><?php echo $hindustry->title; ?></a></li>
            
                    <?php } ?>
            </ul>
    
            </li>
        <!--End About us -->


	<!-- People -->
	<li  class="my-2"><a class="sitemap-heading main" href="javascript:void(0)">Community</a> 
		<ul>
			<li><a href="<?php echo base_url(); ?>blogs">Blogs</a></li>
			
            <li><a href="<?php echo base_url(); ?>careers">Careers</a></li>
		
		</ul>
	</li>	
	<!--End People -->


    
    <li  class="my-2"><a class="sitemap-heading main" href="<?php echo base_url(); ?>contact">Contact</a></li>


    <li  class="my-2"><a class="sitemap-heading main" href="<?php echo base_url(); ?>terms-and-conditions">Terms And Conditions</a></li>

    
    <li  class="my-2"><a class="sitemap-heading main" href="<?php echo base_url(); ?>privacy-policy">Privacy Policy</a></li>



<!-- End of whole list nesting -->	
</ul>


            </div>












			</div>
		</div>


    

      </div>
</div>


<!---page content end--->

<?php $this->load->view('user/includes/footer'); ?>

</body>
</html>