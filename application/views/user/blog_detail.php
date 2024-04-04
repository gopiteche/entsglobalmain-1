<!doctype html>
<html class="no-js" lang="zxx">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title><?php if(!empty($seo['meta_title'])) { echo $seo['meta_title']; } else { echo $default_seo['m_title']; }  ?></title>
<meta name="description" content="<?php if(!empty($seo['meta_description'])) { echo $seo['meta_description']; } else { $default_seo['m_dis']; }   ?>">
<meta name="keywords" content="<?php if(!empty($seo['meta_keyword'])) { echo $seo['meta_keyword']; } else { $default_seo['m_key']; }   ?>">

<link rel="canonical" href="<?php echo base_url(); ?>Blogs" />


<style>
    .bg-light
{
	
    
    font-weight: 600;
    font-size: 18px;
    width: 100%;
}
.bg-light a:active, a:hover
{
	/*color: #ffff;*/
   /* background: #0070ed;*/
}
</style>


<?php $this->load->view('user/includes/header'); ?>

<!--banner section start----->

<div class="container py-5">			
			 
    <div class="row">
	
	
	<div class="col-lg-12 pc-show" ><a href="<?php echo base_url(); ?>blogs"> <img src="<?php echo base_url(); ?>assets/img/back.png" alt="" style="float: right;
    margin-top: 0px;
    border-radius: 50%;"> </a> 
	 </div>
        
        <div class="col-lg-8 px-4">
            
           <div class="col-lg-12">

           <h2><?php echo $blog['blog_title']; ?></h2>

           <p class="text-end">Posted On : <?php echo date('d M Y',strtotime($blog['cdate'])) ?></p>

            <!-- Blog Detail Start -->
            <?php /*
            <div class="mb-2 embassy_image">
                
            <img class="img-fluid w-100 rounded mb-5" src="<?php echo base_url(); ?>uploads/blogs/<?php echo $blog['blog_image']; ?>" alt="">
               
            </div>
            */ ?>
            <!-- Blog Detail End -->

            </div>

            <div class="col-lg-12">

            <?php echo $blog['blog_content']; ?>

            </div>

        </div>

        <!-- Sidebar Start -->
        <div class="col-lg-4">
           

            
           

            <!-- Recent Post Start -->
            <div class="mb-0 mt-10">
                <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 mb-4">Latest Blogs</h4>
                

                <?php foreach($related as $rel){ ?>


				<div class="rounded overflow-hidden mb-3">
                    
					<div class="row blog_sub_box">
					  
					<div class="col-lg-4">
					
					   <img class="img-fluid blog_sub_img" src="<?php echo base_url(); ?>uploads/blogs/<?php echo $rel->blog_image; ?>"  alt="">

                    </div>

					<div class="col-lg-8">
						<a href="<?php echo base_url(); ?>blogs/<?php echo $rel->blog_slug; ?>" class="h5 d-flex align-items-center  pt-3 mb-0"><?php echo text_cut($rel->blog_title,8); ?> 
						</a>
					 
					</div>
					
					</div>

                </div>



                <?php }  ?>

				                             
            </div>
            
            
            <!-- Recent Post End -->

            <!-- Image Start -->
            <!-- Image End -->


        </div>

        
        <div class="embassy_text">
        
        <p class="pt-2"></p>
          
		</div>
        
        <!-- Sidebar End -->
    </div>
    
  
    
</div>

<!--page content end--->


<?php $this->load->view('user/includes/footer'); ?>



</body>
</html>