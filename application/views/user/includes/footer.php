<footer class="footer-wrapper footer-layout1" data-aos="fade-up">
  <div class="footer-top">
    <div class="logo-bg"></div>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-xl-3" data-aos="fade-right">
          <div class="footer-logo"><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/img/logo-white.png" alt="">
		      <h3>An Information Technology Company</h3>
		  </a></div>
        </div>
        <div class="col-xl-9" data-aos="fade-left">
          <div class="footer-contact-wrap">
            <div class="footer-contact">
              <div class="footer-contact_icon"><i class="fas fa-phone"></i></div>
              <div class="media-body"><span class="footer-contact_text">Quick Call Us:</span> <a href="tel:<?php echo str_replace(" ","",$contact['phone']); ?>" class="footer-contact_link"><?php echo $contact['phone']; ?></a></div>
            </div>
            <div class="footer-contact">
              <div class="footer-contact_icon"><i class="fas fa-envelope"></i></div>
              <div class="media-body"><span class="footer-contact_text">Mail Us On:</span> <a href="mailto:<?php echo $contact['email']; ?>" class="footer-contact_link"><?php echo $contact['email']; ?></a></div>
            </div>
            <div class="footer-contact">
              <div class="footer-contact_icon"><i class="fas fa-location-dot"></i></div>
              <div class="media-body"><span class="footer-contact_text">Location:</span> <a href="#" class="footer-contact_link"><?php echo $contact['address']; ?></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="widget-area" data-aos="fade-up">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-md-6 col-lg-4" data-aos="fade-right">
          <div class="widget footer-widget">
            <h3 class="widget_title">About Company</h3>
            <div class="as-widget-about">
              <div class="about-text">
			  <p class="simple-text-lg simple-text">ENTS Global is a fast growing information technology consulting and services firm with dedicated teams and expert panels, which guarantees the quality of product and services for our valued clients.</p></div>
              <div class="as-social" data-aos="zoom-in">
			  
			  <a href="https://www.linkedin.com/company/entsglobal/" target="_blank"><i class="fab fa-linkedin-in footer_linked"></i></a>
			  <a href="https://twitter.com/entsglobal/" target="_blank"><i class="fab fa-twitter footer_twitter"></i></a> 
			  <a href="https://www.facebook.com/entsglobal/" target="_blank"><i class="fab fa-facebook-f footer_facebook"></i></a> 
			  <a href="https://www.instagram.com/entsglobal/" target="_blank"><i class="fab fa-instagram footer_insta"></i></a>
			  </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3" data-aos="fade-up">
          <div class="widget widget_nav_menu footer-widget">
            <a href="<?php echo base_url(); ?>services" class="no_dot"><h3 class="widget_title">Services</h3></a>
            <div class="menu-all-pages-container">
              <ul class="menu">

              <?php foreach($all_services as $fservice) { ?>
              
                <li class="simple-text"><a href="<?php echo base_url(); ?>services/<?php echo $fservice->category_slug; ?>"><?php echo $fservice->category_name; ?></a></li>
              
              <?php } ?>

              <li class="simple-text"><a href="<?php echo base_url(); ?>contact?type=hire">Hire a Resource</a></li>

              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up">
          <div class="widget widget_nav_menu footer-widget">
            <a href="<?php echo base_url(); ?>industries" class="no_dot"><h3 class="widget_title">Industries</h3></a>
            <div class="menu-all-pages-container">
              <ul class="menu">
               
              <?php foreach($all_industries as $findustry) { ?>

                  <li class="simple-text"><a href="<?php echo base_url(); ?>industries/<?php echo $findustry->slug; ?>"><?php echo $findustry->title; ?></a></li>

              <?php } ?>
                
                  
              </ul>
            </div>
          </div>
        </div>
		 <div class="col-md-6 col-lg-2" data-aos=Hire a Resource"fade-left">
          <div class="widget widget_nav_menu footer-widget">
            <h3 class="widget_title">Company</h3>
            <div class="menu-all-pages-container">
              <ul class="menu">
                <li class="simple-text"><a href="<?php echo base_url(); ?>about">About us</a></li>
                <li class="simple-text"><a href="<?php echo base_url(); ?>contact">Contact us</a></li>
                <li class="simple-text"><a href="<?php echo base_url(); ?>careers">Careers</a></li>
                <li class="simple-text"><a href="<?php echo base_url(); ?>blogs">Blogs</a></li>
              </ul>
            </div>
          </div>
        </div>
       
      </div>
    </div>
  </div>
  <div class="copyright-wrap bg-title" >
    <div class="container">
      <div class="row justify-content-between align-items-center">
        <div class="col-lg-6" >
          <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> <?php echo date('Y'); ?> ENTS Global All Rights Reserved.</p>
        </div>
        <div class="col-lg-6 col-12 text-lg-end text-center d-lg-block">
          <div class="footer-links">
            <ul>
              <li><a href="<?php echo base_url(); ?>sitemap">Sitemap</a></li>
              <li><a href="<?php echo base_url(); ?>terms-and-conditions">Terms & Conditions</a></li>
              <li><a href="<?php echo base_url(); ?>privacy-policy">Privacy Policy</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="shape-left"><img src="<?php echo base_url(); ?>assets/img/shape/footer_shape_2.svg" alt="shape"></div>
  <div class="shape-right">
    <div class="particle-1" id="particle-5"></div>
  </div>
</footer>
<div class="scroll-top">
  <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
    <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
  </svg>
</div>

<!-- FAB For Large Screen Start-->
<a href="tel:<?php echo str_replace(" ","",$contact['phone']); ?>"  class="DZ_PC DZ-bt-callnow-now DZ-theme-btn"><i class="fa fa-phone" aria-hidden="true" ></i></a>
<!--<a href="https://api.whatsapp.com/send/?phone=<?php echo str_replace(" ","",$contact['phone']); ?>&text=%2AHey Ents Global+&app_absent=0" target="_blank" class="DZ_PC DZ-bt-whatsapp-now DZ-theme-btn"><i class="fab fa-whatsapp" aria-hidden="true" ></i></a>-->
<a href="mailto:<?php echo $contact['email']; ?>" class="DZ_PC DZ-bt-email-now DZ-theme-btn"><i class="far fa-envelope" aria-hidden="true" ></i></a> 
<!-- FAB For Large Screen End-->





<!-- FAB For Small Screen Start-->

<div class='multi-action'>
  <button class='action-button'><span class='fa fa-plus'></span></button>
  <ul class='actions'>

  <li><a href="tel:<?php echo str_replace(" ","",$contact['phone']); ?>"><span class='fa fa-phone'></span></a></li>

  <!--<li><a href="https://api.whatsapp.com/send/?phone=<?php echo str_replace(" ","",$contact['phone']); ?>&text=%2AHey Ents Global+&app_absent=0" target="_blank"><span class='fab fa-whatsapp'></span></a></li>-->

  <li><a href="mailto:<?php echo $contact['email']; ?>"><span class="far fa-envelope"></span></a></li>
  

</ul>
</div>

<!-- FAB For Small Screen End-->


<style>
.center-align{
	display:flex;justify-content: center;
}
@media (max-width: 991px) {	
	.center-align{
		display:flex;justify-content: center;
	}
}
</style>




  <!-- Quick Contact -->

  <div class="modal fade " id="qContact" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content rounded">
    
      <div class="modal-body quick-contact" style="background:url(<?php echo base_url(); ?>assets/img/qc-bg.jpg);">


      <div class="row">
        
      <div class="col-lg-6">
        

        <div class="qc-about qc-divider">
    
      <p>We're Ready To</p>

      <p>Talk About Your </p>

      <p>Opportunities</p>


          <div class="qc-links">

      <p>
      <i class="fa fa-envelope"></i>
      <a href="tel:<?php echo str_replace(" ","",$contact['phone']); ?>"><?php echo $contact['phone']; ?></a>
      </p>

      <p>
      <i class="fa fa-phone"></i>
      <a href="mailto:<?php echo $contact['email']; ?>"><?php echo $contact['email']; ?></a>
      </p>

          </div>


         </div>


      </div>

      <div class="col-lg-6">

      <div class="qc-form">

      <h5>Enquire Now</h5>

      <form class="val-form-quick" action="<?php echo base_url(); ?>Contact/Quick" method="Post">
      
      <div class="form-group m-0">
      <input type="text" class="form-control" placeholder="Enter your name" name="name" required>
      <i class="fal fa-user"></i>
      </div>

      <div class="form-group m-0">
      <input type="email" class="form-control" placeholder="Enter your email" name="email" required>
      <i class="fal fa-envelope"></i>
      </div>

      <div class="form-group m-0">
      <input type="text" class="form-control" placeholder="Enter Phone Number (Optional)" name="phone">
      <i class="fal fa-phone"></i>
      </div>

      <div class="form-group m-0">
      <textarea class="form-control" name="message" placeholder="Write your message" required></textarea>
      <i class="fal fa-comment"></i>
      </div>

      <button class="as-btn contact_btn w-100 my-2">Send Message</button>

      </form>

      </div>

      </div>


      
      </div>


      </div>
     
    </div>
  </div>
</div>






<script src="<?php echo base_url(); ?>assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/app.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/particles-config.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
<script src="<?php echo base_url(); ?>assets/js/lazyload.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/additional-methods.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>



<script>
$('.action-button').on('click', function(){
  $(this).toggleClass('active');
})
</script>

<script>

$(".lazyload").lazyload();

</script>






<script>  


$('#Homecontact').submit(function(event) {		
	var formData = $('#Homecontact').serialize();

	var parsedData = {};
	
	formData.split('&').forEach(function(keyValue) {
		var pair = keyValue.split('=');
		parsedData[decodeURIComponent(pair[0])] = decodeURIComponent(pair[1] || '');
	});

    var fieldValue = parsedData['g-recaptcha-response'];
	
	var name = parsedData['name'];
	var email = parsedData['email'];
	var message = parsedData['message'];
	
	if((name != '' && email != '' && message != '') && (fieldValue.length === 0)){
		alert('Please click the reCAPTCHA checkbox.');
		event.preventDefault();		
		event.stopPropagation(); 
	}
});


$('#Quick_contact').submit(function(event) {
	var formData = $('#Quick_contact').serialize();

	var parsedData = {};
	
	formData.split('&').forEach(function(keyValue) {
		var pair = keyValue.split('=');
		parsedData[decodeURIComponent(pair[0])] = decodeURIComponent(pair[1] || '');
	});

    var fieldValue = parsedData['g-recaptcha-response'];
	
	var name = parsedData['name'];
	var email = parsedData['email'];
	var message = parsedData['message'];
	
	if((name != '' && email != '' && message != '') && (fieldValue.length === 0)){
		alert('Please click the reCAPTCHA checkbox.');
		event.preventDefault();		
		event.stopPropagation(); 
	}
});

$('#Contact_form').submit(function(event) {
	var formData = $('#Contact_form').serialize();

	var parsedData = {};
	
	formData.split('&').forEach(function(keyValue) {
		var pair = keyValue.split('=');
		parsedData[decodeURIComponent(pair[0])] = decodeURIComponent(pair[1] || '');
	});

    var fieldValue = parsedData['g-recaptcha-response'];
	
	var name = parsedData['name'];
	var email = parsedData['email'];
	var message = parsedData['message'];
	
	if((name != '' && email != '' && message != '') && (fieldValue.length === 0)){
		alert('Please click the reCAPTCHA checkbox.');
		event.preventDefault();		
		event.stopPropagation(); 
	}
});

$('#Carrer_form').submit(function(event) {
	var formData = $('#Carrer_form').serialize();

	var parsedData = {};
	
	formData.split('&').forEach(function(keyValue) {
		var pair = keyValue.split('=');
		parsedData[decodeURIComponent(pair[0])] = decodeURIComponent(pair[1] || '');
	});

    var fieldValue = parsedData['g-recaptcha-response'];
	
	var name = parsedData['name'];
	var email = parsedData['email_r'];
	var phone = parsedData['phone'];
	
	if((name != '' && email != '' && phone != '') && (fieldValue.length === 0)){
		alert('Please click the reCAPTCHA checkbox.');
		event.preventDefault();		
		event.stopPropagation(); 
	}
});




$(document).ready (function () {  

	$(".val-form-quick").validate({
		errorClass: "invalid"
	});
	
		//var qname = document.getElementById("qname").value;
		//alert();
});  




$(document).ready (function () {  
	$(".val-form").validate({
		errorClass: "invalid"
	});
});  
 
  
</script>


<script>
  AOS.init({
  offset: 20,
});
</script>


<script>


 var header = $('#header-sticky');
    var win = $(window);
    
    win.on('scroll', function() {
        if ($(this).scrollTop() > 300) {
           
			 $(".DZ-theme-btn").addClass("DZ-theme-btn-sticky");
			 
        } else {
           
			$(".DZ-theme-btn").removeClass("DZ-theme-btn-sticky");
			
        }
    });
</script>



<script>

(function($) { 
  $(function() { 

    //  open and close nav 
    $('#navbar-toggle').click(function() {
      $('nav ul').slideToggle();
    });


    // Hamburger toggle
    $('#navbar-toggle').on('click', function() {
      this.classList.toggle('active');
    });


    // If a link has a dropdown, add sub menu toggle.
    $('nav ul li a:not(:only-child)').click(function(e) {
      $(this).siblings('.navbar-dropdown').slideToggle("slow");

      // Close dropdown when select another dropdown
      $('.navbar-dropdown').not($(this).siblings()).hide("slow");
      e.stopPropagation();
    });


    // Click outside the dropdown will remove the dropdown class
    $('html').click(function() {
      $('.navbar-dropdown').hide();
    });
  }); 
})(jQuery); 

</script>


<script>

$(document).ready(function(){

AOS.init({
//  disable: 'mobile',
//  duration: 200, // values from 0 to 3000, with step 50ms
//  easing: 'ease', 
  disable: function() {
    var maxWidth = 800;
    return window.innerWidth < maxWidth;
  }
});

});

</script>


<!-- Notification Alerts -->

<style>

.alertify-notifier .ajs-message.ajs-success
{
  background: rgb(80 175 49) !important;
  color:#fff !important;
}

.alertify-notifier.ajs-top{
  top:50% !important;
}

</style>

<script src="<?php echo base_url(); ?>assets/js/alertify.min.js"></script> 

<script>

alertify.set('notifier','position', 'top-center');

</script>


<?php


if($this->session->flashdata('notification'))

{
$notification = $this->session->flashdata('notification');
$type = $notification['type'];
$msg = $notification['msg'];

?>

<script>

 
<?php if($type=="success") { ?>

alertify.success('<?php echo $msg; ?>').delay(8).dismissOthers();

<?php } ?>

<?php if($type=="error") { ?>
alertify.error('<?php echo $msg; ?>').delay(8).dismissOthers();
<?php } ?>


</script>


<?php } ?>

<!-- ### -->


<script>

<?php 
/*
document.onreadystatechange = function() {
    if (document.readyState !== "complete") {
        document.querySelector("body").style.visibility = "hidden";
        document.querySelector("#loader").style.visibility = "visible";
    } else {
        document.querySelector("#loader").style.display = "none";
        document.querySelector("body").style.visibility = "visible";
    }
};

*/
?>

</script>


