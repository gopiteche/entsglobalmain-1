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



/* Pagination */


.pagination {
    margin-top: 20px;
    /*float: right;*/
    justify-content:center;
  }


  .pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
    border: 1px solid #ddd;
}


  .pagination strong{
    color: #ffffff;
    background: var(--theme-color);
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
    border: 1px solid #ddd;
  }

/* ##### */

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

<!--blog section start---->

<div class="site-main">

    <div class="ttm-row  res-991-pb-20 clearfix mb-4 py-5 inner-padn">

        <div class="container">

            <div class="row multi-columns-row ttm-boxes-row-wrapper">

            <?php foreach($blogs as $blog){ ?>

                <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">
                    <!-- featured-imagebox-post -->
                    <div class="featured-imagebox   featured-imagebox-post ttm-box-view-top-image">
                        <div class="ttm-post-featured-outer">
                            <div class="ttm-post-format-icon">
                                <i class="ti ti-pencil"></i>
                            </div>
                            <div class="ttm-post-thumbnail featured-thumbnail ants_blog">
                                <img class="img-fluid blog-img" src="<?php echo base_url(); ?>uploads/blogs/<?php echo $blog->blog_image; ?>" alt="">
                            </div>
                            <div class="ttm-box-post-date">
                                <span class="ttm-entry-date">
                                    <time class="entry-date" ><?php echo date('d',strtotime($blog->cdate)); ?><span class="entry-month"><?php echo date('M',strtotime($blog->cdate)); ?>&nbsp;<span class="entry-year"><?php echo date('Y',strtotime($blog->cdate)); ?></span></span></time>
                                </span>
                            </div>
                        </div>

                        <div class="featured-content featured-content-post blog_box box-shadow">
                            
                            <div class="post-title featured-title hovr-head">
                                <h5 class=""><a href="<?php echo base_url(); ?>blogs/<?php echo $blog->blog_slug; ?>"><?php echo $blog->blog_title ?></a></h5>
								<!--<h5 class="default_blog_hidden"><a href="<?php echo base_url(); ?>blogs/<?php echo $blog->blog_slug; ?>"><?php echo $blog->blog_title; ?></a></h5>--->
                            </div>
                            <div class="post-desc featured-desc">
                                <p><?php echo substr(strip_tags($blog->blog_content),0,70); ?>...</p>
                                <div class="service_box_text_link"><a class="ttm-btn ttm-btn-size-sm ttm-icon-btn-right ttm-btn-color-skincolor btn-inline mb-15" href="<?php echo base_url(); ?>blogs/<?php echo $blog->blog_slug; ?>">READ THE BLOG &nbsp <i class="fas fa-long-arrow-right"></i></a></div>
                            </div>
                        </div>
                    </div><!-- featured-imagebox-post end -->
                </div>


              <?php } ?>


              <div class="row">
            <div class="col-lg-12">
              <div class="pagination">
               <?= $pagination; ?>
              </div>
            </div>
          </div>


                
               
<?php /*
    <div class="container">  
  <div class="pagination">
    <ul class="pagination-2">
      <li class="page-number prev"><a href="#">&laquo;</a></li>
      <li class="page-number"><a href="#">1</a></li>
      <li class="page-number active"><a href="#">2</a></li>
      <li class="page-number"><a href="#">3</a></li>
      <li class="page-number"><a href="#">4</a></li>
      <li class="page-number"><a href="#">5</a></li>      
      <li class="page-number prev"><a href="#">&raquo;</a></li>
    </ul>
  </div>
  
</div>    

*/ ?>
               


            </div>
        </div>
    </div>


</div>

<!---blog section end--->


<?php $this->load->view('user/includes/footer'); ?>


<script>
   var contactHeight = 0;

		$(".featured-title").each(function(){
  		if ($(this).height() > contactHeight) { contactHeight = $(this).height(); }
		});

		$(".featured-title").height(contactHeight);
		
		
</script>


<script>

$(document).ready(function(){

  if ($(window).width() > 1199) {

var maxHeight = 0;

$(".blog_box").each(function(){
   if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
});

$(".blog_box").height(maxHeight);

var maxTxtHeight = 0;

$(".ttm-post-thumbnail").each(function(){
   if ($(this).height() > maxTxtHeight) { maxTxtHeight = $(this).height(); }
});

$(".ttm-post-thumbnail").height(maxTxtHeight);

$('.blog-img').css("height","100%");

  }

});











</script>


</body>
</html>

