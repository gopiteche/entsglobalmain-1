<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
<link rel="icon" type="image/jpg" href="<?php echo base_url(); ?>assets/img/favicon.jpg">



<link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url();?>assets/img/apple-icon-57x57.png"/>
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url();?>assets/img/apple-icon-60x60.png"/>
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url();?>assets/img/apple-icon-72x72.png"/>
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>assets/img/apple-icon-76x76.png"/>
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url();?>assets/img/apple-icon-114x114.png"/>
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url();?>assets/img/apple-icon-120x120.png"/>
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url();?>assets/img/apple-icon-144x144.png"/>
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url();?>assets/img/apple-icon-152x152.png"/>
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url();?>assets/img/apple-icon-180x180.png"/>
<link rel="icon" type="image/png" sizes="192x192" href="<?php echo base_url();?>assets/img/android-icon-192x192.png"/>
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url();?>assets/img/favicon-32x32.png"/>
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url();?>assets/img/favicon-96x96.png"/>
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url();?>assets/img/favicon-16x16.png"/>

<link rel="preconnect" href="https://fonts.googleapis.com/">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link
 href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,700&amp;family=Roboto:wght@300;400;500;700;900&amp;display=swap"
 rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/app.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fontawesome.min.css">

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/alertify.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/alertify.default.min.css">

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


<!-- For Loading Placeholder On Img Error -->
<script>

document.addEventListener('error', function (event) {
     var elm = event.target;
     if (elm.tagName == 'IMG') {
         elm.src = "<?php echo base_url(); ?>assets/no_image.png";
         elm.style="object-fit:cover";
     }
 }, true );

 </script>




<style>




@media only screen and (max-width: 768px) {
  .aos-animate {

    -o-transition-property: none !important;
    -moz-transition-property: none !important;
    -ms-transition-property: none !important;
    -webkit-transition-property: none !important;
    transition-property: none !important;

    -o-transform: none !important;
    -moz-transform: none !important;
    -ms-transform: none !important;
    -webkit-transform: none !important;
    transform: none !important;

    -webkit-animation: none !important;
    -moz-animation: none !important;
    -o-animation: none !important;
    -ms-animation: none !important;
    animation: none !important;
  }
}


.loader {


margin: auto;


border: 20px solid #EAF0F6;


border-radius: 50%;


border-top: 20px solid #FF7A59;


width: 200px;


height: 200px;


animation: spinner 4s linear infinite;


}


@keyframes spinner {

0% { transform: rotate(0deg); }

100% { transform: rotate(360deg); }

}


.loader-container
{
    text-align: center;
    height: 100vh;
    position: fixed;
    z-index: 1000000000000000000000;
    background: white;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}



.lds-facebook {
  display: inline-block;
  position: relative;
  width: 80px;
  height: 80px;
}
.lds-facebook div {
  display: inline-block;
  position: absolute;
  left: 8px;
  width: 16px;
  background: var(--theme-color);
  animation: lds-facebook 1.2s cubic-bezier(0, 0.5, 0.5, 1) infinite;
}
.lds-facebook div:nth-child(1) {
  left: 8px;
  animation-delay: -0.24s;
}
.lds-facebook div:nth-child(2) {
  left: 32px;
  animation-delay: -0.12s;
}
.lds-facebook div:nth-child(3) {
  left: 56px;
  animation-delay: 0;
}
@keyframes lds-facebook {
  0% {
    top: 8px;
    height: 64px;
  }
  50%, 100% {
    top: 24px;
    height: 32px;
  }
}




@media(max-width:525px)
{

  .hero-style2 {
   
    padding-left: 15px;
  
    }

}




</style>





</head>

<body class="remove_animation">

<!--
<div id="loader" class="loader-container">

<div class="lds-facebook"><div></div><div></div><div></div></div>

</div>

-->


 <div class="as-menu-wrapper">
  <div class="as-menu-area text-center">
   <button class="as-menu-toggle"><i class="fal fa-times"></i></button>
   <div class="mobile-logo"><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/img/logo.jpg" alt=""></a>
   </div>
   <div class="as-mobile-menu">
    <ul>

     <li class="menu-item-has-children"><a href="<?php echo base_url(); ?>">Home</a> </li>


     <li><a href="<?php echo base_url(); ?>About">Company</a></li>


     <li class="menu-item-has-children"><a href="<?php echo base_url(); ?>Services">Services</a>

      <ul class="sub-menu">

       <?php foreach($all_services as $hservice) { ?>
        
       <li class="menu-item-has-children"><a href="#"><?php echo $hservice->category_name; ?></a>

        <ul class="sub-menu">

         <?php foreach($hservice->subservice as $hsubservice){ ?>

         <li><a href="#"><?php echo $hsubservice->package_name; ?></a></li>

         <?php } ?>

        </ul>

       </li>
       <?php } ?>


      </ul>
     </li>


     <li class="menu-item-has-children"><a href="">Industries</a>
      <ul class="sub-menu">

      <?php foreach($all_industries as $hindustry) {?>
       <li><a href="#"><?php echo $hindustry->title; ?></a></li>
       <?php } ?>
     
      </ul>
     </li>
     <li class="menu-item-has-children"><a href="javascript:void();">Community</a>
      <ul class="sub-menu">
       <li><a href="<?php echo base_url(); ?>Blogs">Blogs</a></li>
       
       <li><a href="<?php echo base_url(); ?>Careers">Careers</a></li>

      </ul>
     </li>
     <li><a href="<?php echo base_url(); ?>Contact">Contact Us</a></li>
    </ul>
   </div>
  </div>
 </div>

 



 <!--responsive nav bar --->

 <section class="navigation res_header" style="display:none;">

  <div class="nav-container">

   <div class="brand">
    <!--<a href="#!">Logo</a>--->
    <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/img/logos.jpg" alt=""> ENTS GLOBAL</a>
  
   </div>

   <nav>
   
    <div class="nav-mobile"><a id="navbar-toggle" href="javascript:void(0);"><span></span></a></div>
    <ul class="nav-list">

     <li>
      <a href="<?php echo base_url(); ?>">Home</a>
     </li>

     <li>
      <a href="<?php echo base_url(); ?>About">Company</a>
     </li>

     <li>
      <a href="javascript:void(0);">Services</a>

      <ul class="navbar-dropdown">

      <?php foreach($all_services as $hservice) { ?>

       <li>

       <a style="font-weight:800;" href="<?php echo base_url(); ?>Services/<?php echo $hservice->category_id; ?>/<?php echo url_title($hservice->category_name);?>"><?php echo $hservice->category_name; ?></a>
     
            <ul class="">
            
            <?php foreach($hservice->subservice as $hsubservice1){ ?>

<li><a href="<?php echo base_url(); ?>Service/<?php echo $hsubservice1->package_slug; ?>"><?php echo $hsubservice1->package_name; ?></a></li>

            <?php } ?>

            </ul>

       </li>

       <?php } ?>
      
      </ul>

     </li>


     <li>
      <a href="<?php echo base_url(); ?>Industries">Industries</a>
     </li>



     <li>
      <a href="javascript:void(0);">Community</a>
      <ul class="navbar-dropdown">
       <li>
        <a href="<?php echo base_url(); ?>Blogs">Blogs</a>
       </li>
       <li>
        <a href="<?php echo base_url(); ?>Careers">Careers</a>
       </li>
      </ul>
     </li>


     <li>
      <a href="<?php echo base_url(); ?>Contact">Contact</a>
     </li>


     <li>
     
     <div class="header-button">

<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#qContact" class="as-btn style2 shadow-none">Quick Contact<i class="fas fa-arrow-right ms-1"></i></a>

     </div>


     </li>


    </ul>
   </nav>
  </div>
 </section>


 <!---responsive nav bar end-->

 <header class="as-header header-layout1">
  <div class="header-top">
   <div class="container">
    <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
     <div class="col-auto d-lg-block">
      <div class="header-links">
       <ul>

        <li><i class="fas fa-phone"></i>

        <a  href="tel:<?php echo str_replace(" ","",$contact['phone']); ?>"><?php echo $contact['phone']; ?></a></li>

       </ul>
      </div>
     </div>
     <div class="col-auto">
      <div class="header-links">
       <ul>

       

        <li><i class="fas fa-envelope"></i><a
          href="mailto:<?php echo $contact['email']; ?>"><?php echo $contact['email']; ?></a></li>
       </ul>
      </div>
     </div>
     <div class="col-auto">
      <div class="header-links">
       <ul>
        <li><i class="fas fa-location-dot"></i><a href="javascript:void();"><?php echo $contact['address']; ?></a></li>

       </ul>
      </div>
     </div>
    </div>
   </div>
  </div>

  <div class="sticky-wrapper">
   <div class="menu-area">
    <div class="container">
     <div class="row align-items-center justify-content-between">
      <div class="col-auto">
       <div class="header-logo"><a href="<?php echo base_url(); ?>"><img class="img-first" src="<?php echo base_url(); ?>assets/img/logos.jpg" alt="">
         <div class="img-second"><img src="<?php echo base_url(); ?>assets/img/logoss.jpg" alt="">
          <h3>An Information Technology Company</h3>
         </div>
        </a></div>
      </div>

      <div class="col-auto">

       <nav class="main-menu d-none d-lg-inline-block">

        <ul>
         
         <li class=""><a class="home" href="<?php echo base_url(); ?>"><i class="fas fa-home"></i></a> </li>
         
         <li><a href="<?php echo base_url(); ?>About">Company</a></li>

         <li class="menu-item-has-children mega-menu-wrap"><a href="<?php echo base_url(); ?>Services">Services</a>
          
          <ul class="mega-menu">

           <div class="row">

           <?php foreach($all_services as $hservice) { ?>

            <div class="col-lg-4">

            <li><a href="<?php echo base_url(); ?>Services/<?php echo $hservice->category_id; ?>/<?php echo url_title($hservice->category_name);?>"><?php echo $hservice->category_name; ?></a>

            <ul>

              <?php foreach($hservice->subservice as $hsubservice){ ?>

               <li><a href="<?php echo base_url(); ?>Service/<?php echo $hsubservice->package_slug; ?>"><?php echo $hsubservice->package_name; ?></a></li>

               <?php } ?>
             
              </ul>
             </li>

            </div>

            <?php } ?>


           </div>

          </ul>
         </li>

         <li class="menu-item-has-children"><a href="<?php echo base_url(); ?>Industries">Industries</a>
          <ul class="sub-menu">

           <?php foreach($all_industries as $hindustry) {?>

           <li><a href="<?php echo base_url(); ?>Industries/<?php echo $hindustry->industries_id; ?>/<?php echo url_title($hindustry->title); ?>"><?php echo $hindustry->title; ?></a></li>

           <?php } ?>
          
          </ul>
         </li>
         <li class="menu-item-has-children"><a href="javascript:void();">Community</a>
          <ul class="sub-menu">
           <li><a href="<?php echo base_url(); ?>Blogs">Blogs</a></li>
           <li><a href="<?php echo base_url(); ?>Careers">Careers</a></li>
          </ul>
         </li>

         <li><a href="<?php echo base_url(); ?>Contact">Contact Us</a></li>

        </ul>
       </nav>
       <!--<button type="button" class="as-menu-toggle d-inline-block d-lg-none"><i class="far fa-bars"></i></button>--->
      </div>

      <div class="col-auto d-none d-lg-block">
       <div class="header-button">

        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#qContact" class="as-btn style2 shadow-none">Quick Contact<i class="fas fa-arrow-right ms-1"></i></a>
     

          <div class="">




          </div>


      




       </div>

      </div>

     </div>

    </div>

    <div class="logo-bg"></div>
    
   </div>
  </div>
 </header>