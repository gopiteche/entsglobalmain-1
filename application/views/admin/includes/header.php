<!DOCTYPE html>

<html>

      <head>      

      <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.ico" type="image/x-icon">

		<link rel="icon" href=" <?php echo base_url(); ?>assets/img/favicon.ico" type="image/x-icon">
		

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

      

      <meta charset="UTF-8">

      <title>

      <?php if(@$seo_title){echo $seo_title;} else{ echo "Dashboard -  Admin"; }?>

      </title>

      <!-- Tell the browser to be responsive to screen width -->

      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

      <!-- Bootstrap 3.3.4 -->

      <link href="<?php echo base_url();?>assets/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

      <link href="<?php echo base_url();?>assets/admin/css/timepicker.css" rel="stylesheet" type="text/css" />

      <!-- Font Awesome Icons -->

      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

      <!-- Ionicons -->

      <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />

      <!-- jvectormap -->

      <link href="<?php echo base_url();?>assets/admin/js/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

      <link href="<?php echo base_url();?>assets/admin/js/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />

      <!-- Theme style -->

      <link href="<?php echo base_url();?>assets/admin/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />

      <link href="<?php echo base_url();?>assets/admin/css/styles1.css" rel="stylesheet" type="text/css" />

      <!-- AdminLTE Skins. Choose a skin from the css/skins	

	<!-- alertfy css -->



      <link href="<?php echo base_url();?>assets/admin/js/alertify/alertify.core.css" rel="stylesheet" type="text/css" />

      <link href="<?php echo base_url();?>assets/admin/js/alertify/alertify.default.css" rel="stylesheet" type="text/css" />

      <!--    folder instead of downloading all of them to reduce the load. -->

     

      <link href="<?PHP echo base_url();?>assets/admin/js/fancybox/jquery.fancybox.css" rel="stylesheet">

      <link href="<?php echo base_url();?>assets/admin/css/validationEngine.css" rel="stylesheet" type="text/css" />

      <link href="<?php echo base_url();?>assets/admin/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />

      <link href="<?php echo base_url();?>assets/admin/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />

      <link href="<?php echo base_url();?>assets/admin/css/_all-skins.min.css" rel="stylesheet" type="text/css" />

      <link href="<?php echo base_url();?>assets/admin/css/style.css" rel="stylesheet" type="text/css" />



    

      </head>

      <body class="skin-green sidebar-mini">

<div class="wrapper">

<header class="main-header"> 

        

        <!-- Logo --> 

        <a href="<?php echo base_url();?>admin" class="logo"> 

  <!-- mini logo for sidebar mini 50x50 pixels --> 

  <span class="logo-mini"><b>A</b></span> 

  <!-- logo for regular state and mobile devices --> 

  <span class="logo-lg"><b>Admin</b></span>
     <!--<span class="logo-lg"><img src="<?php echo base_url();?>assets/admin/img/logo.png" style="height: 40px;width: 55%;"></span>--->
  </a> 

        

        <!-- Header Navbar: style can be found in header.less -->

        <nav class="navbar navbar-static-top" role="navigation"> 

    <!-- Sidebar toggle button--> 

    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <span class="sr-only">Toggle navigation</span> </a> 

    <!-- Navbar Right Menu -->

    <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">

        <li> <a href="<?php echo base_url();?>admin/login/logout" ><i class="fa fa-sign-out"></i>&nbsp; Sign Out</a> </li>

      </ul>

            </li>

            </ul>

          </div>

  </nav>

      </header>

<script type="text/javascript">

	  var base_url  ="<?php echo base_url();?>";

	  </script>

      

      

      

      

       <?php

           function general_text($text, $limit) {

           if (str_word_count($text, 0) > $limit) {

           $words = str_word_count($text, 2);

           $pos   = array_keys($words);

           $text  = substr($text, 0, $pos[$limit]) . '...';

				}

			return $text;

						}

		?>
		
        
        
        