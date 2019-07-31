<?php
   include("config/connect.php");
   // Page detection
   $page = explode("/",$_SERVER['PHP_SELF']);
   $page = end($page);
   $pagetitle = "";
   $page = explode(".",$page);
   $page = $page[0];
   switch($page)
   {
   	case "dashboard":
   		$group['dashboard'] = 'active';
   		$activepage[$page] = 'class="active"';
   		$selected['dashboard'] = 'selected';
   		$arrowopen['dashboard'] = 'open';
   		$pagetitle = "Dashboard";
   		break;
   	case "settings":
   		$group['tools'] = 'active';
   		$activepage[$page] = 'class="active"';
   		$selected['tools'] = 'selected';
   		$arrowopen['tools'] = 'open';
   		$pagetitle = "Settings";
   		break;
   	case "changepass":
   		$group['tools'] = 'active';
   		$activepage[$page] = 'class="active"';
   		$selected['tools'] = 'selected';
   		$arrowopen['tools'] = 'open';
   		$pagetitle = "Change Password";
   		break;
   	case "seo":
   		$group['seo'] = 'active';
   		$activepage[$page] = 'class="active"';
   		$selected['seo'] = 'selected';
   		$arrowopen['seo'] = 'open';
   		$pagetitle = "SEO";
   		break;
   	case "editseo":
   		$group['seo'] = 'active';
   		$activepage['seo'] = 'class="active"';
   		$selected['seo'] = 'selected';
   		$arrowopen['seo'] = 'open';
   		$pagetitle = "Edit SEO";
   		break;
   	case "settings":
   		$group['tools'] = 'active';
   		$activepage[$page] = 'class="active"';
   		$selected['tools'] = 'selected';
   		$arrowopen['tools'] = 'open';
   		$pagetitle = "Settings";
   		break;
   	case "cms":
   		$group['cms'] = 'active';
   		$activepage[$page] = 'class="active"';
   		$selected['cms'] = 'selected';
   		$arrowopen['cms'] = 'open';
   		$pagetitle = "CMS Page";
   		break;
   	case "managecms":
   		$group['cms'] = 'active';
   		$activepage['cms'] = 'class="active"';
   		$selected['cms'] = 'selected';
   		$arrowopen['cms'] = 'open';
   		$pagetitle = ucfirst($_REQUEST['mode'])." CMS Page";
   		$camefrom = "CMS Page";
   		$camefrompage = "cms.php";
   		break;
   	case "banner":
   		$group['banner'] = 'active';
   		$activepage[$page] = 'class="active"';
   		$selected['banner'] = 'selected';
   		$arrowopen['banner'] = 'open';
   		$pagetitle = "Banner";
   		break;
   	case "managebanner":
   		$group['banner'] = 'active';
   		$activepage['banner'] = 'class="active"';
   		$selected['banner'] = 'selected';
   		$arrowopen['banner'] = 'open';
   		$pagetitle = ucfirst($_REQUEST['mode'])." Banner";
   		$camefrom = "Banner";
   		$camefrompage = "banner.php";
   		break;
   	case "project":
   		$group['project'] = 'active';
   		$activepage[$page] = 'class="active"';
   		$selected['project'] = 'selected';
   		$arrowopen['project'] = 'open';
   		$pagetitle = "Project";
   		break;
   	case "manageproject":
   		$group['project'] = 'active';
   		$activepage['project'] = 'class="active"';
   		$selected['project'] = 'selected';
   		$arrowopen['project'] = 'open';
   		$pagetitle = ucfirst($_REQUEST['mode'])." Project";
   		$camefrom = "Project";
   		$camefrompage = "project.php";
   		break;
   	case "booking":
   		$group['booking'] = 'active';
   		$activepage[$page] = 'class="active"';
   		$selected['booking'] = 'selected';
   		$arrowopen['booking'] = 'open';
   		$pagetitle = "Booking";
   		break;
   	case "managebooking":
   		$group['booking'] = 'active';
   		$activepage['booking'] = 'class="active"';
   		$selected['booking'] = 'selected';
   		$arrowopen['booking'] = 'open';
   		$pagetitle = ucfirst($_REQUEST['mode'])." Booking";
   		$camefrom = "Booking";
   		$camefrompage = "booking.php";
   		break;
   	case "category":
   		$group['category'] = 'active';
   		$activepage[$page] = 'class="active"';
   		$selected['category'] = 'selected';
   		$arrowopen['category'] = 'open';
   		$pagetitle = "Category";
   		break;
   	case "managecategory":
   		$group['category'] = 'active';
   		$activepage['category'] = 'class="active"';
   		$selected['category'] = 'selected';
   		$arrowopen['category'] = 'open';
   		$pagetitle = ucfirst($_REQUEST['mode'])." Category";
   		$camefrom = "Category";
   		$camefrompage = "category.php";
   		break;
   	case "subcategory":
   		$group['category'] = 'active';
   		$activepage[$page] = 'class="active"';
   		$selected['subcategory'] = 'selected';
   		$arrowopen['category'] = 'open';
   		$pagetitle = "Product";
   		break;
   	case "managesubcategory":
   		$group['category'] = 'active';
   		$activepage['subcategory'] = 'class="active"';
   		$selected['subcategory'] = 'selected';
   		$arrowopen['category'] = 'open';
   		$pagetitle = ucfirst($_REQUEST['mode'])." Product";
   		$camefrom = "Product";
   		$camefrompage = "subcategory.php";
   		break;
   	case "testimonial":
   		$group['testimonial'] = 'active';
   		$activepage[$page] = 'class="active"';
   		$selected['testimonial'] = 'selected';
   		$arrowopen['testimonial'] = 'open';
   		$pagetitle = "Testimonial";
   		break;
  	case "managetestimonial":
   		$group['testimonial'] = 'active';
   		$activepage['testimonial'] = 'class="active"';
   		$selected['testimonial'] = 'selected';
   		$arrowopen['testimonial'] = 'open';
   		$pagetitle = ucfirst($_REQUEST['mode'])." Testimonial";
   		$camefrom = "Testimonial";   
   		$camefrompage = "testimonial.php";
   		break;
   	case "show":
   		$group['show'] = 'active';
   		$activepage[$page] = 'class="active"';
   		$selected['show'] = 'selected';
   		$arrowopen['show'] = 'open';
   		$pagetitle = "Show";
   		break;
  	case "manageshow":
   		$group['show'] = 'active';
   		$activepage['show'] = 'class="active"';
   		$selected['show'] = 'selected';
   		$arrowopen['show'] = 'open';
   		$pagetitle = ucfirst($_REQUEST['mode'])." Show";
   		$camefrom = "Show";
   		$camefrompage = "show.php";
   		break;
   	case "branding":
   		$group['branding'] = 'active';
   		$activepage[$page] = 'class="active"';
   		$selected['branding'] = 'selected';
   		$arrowopen['branding'] = 'open';
   		$pagetitle = "Branding";
   		break;
   	case "managebranding":
   		$group['branding'] = 'active';
   		$activepage['branding'] = 'class="active"';
   		$selected['branding'] = 'selected';
   		$arrowopen['branding'] = 'open';
   		$pagetitle = ucfirst($_REQUEST['mode'])." Branding";
   		$camefrom = "Branding";
   		$camefrompage = "branding.php";
   		break;
   	case "creative":
   		$group['creative'] = 'active';
   		$activepage[$page] = 'class="active"';
   		$selected['creative'] = 'selected';
   		$arrowopen['creative'] = 'open';
   		$pagetitle = "Creative";
   		break;
   	case "managecreative":
   		$group['creative'] = 'active';
   		$activepage['creative'] = 'class="active"';
   		$selected['creative'] = 'selected';
   		$arrowopen['creative'] = 'open';
   		$pagetitle = ucfirst($_REQUEST['mode'])." Creative";
   		$camefrom = "Creative";
   		$camefrompage = "creative.php";
   		break;
   	case "gallery":
   		$group['category'] = 'active';
   		$activepage[$page] = 'class="active"';
   		$selected['gallery'] = 'selected';
   		$arrowopen['category'] = 'open';
   		$pagetitle = "Gallery";
   		break;
   	case "managegallery":
   		$group['category'] = 'active';
   		$activepage['gallery'] = 'class="active"';
   		$selected['gallery'] = 'selected';
   		$arrowopen['category'] = 'open';
   		$pagetitle = ucfirst($_REQUEST['mode'])." Gallery";
   		$camefrom = "Gallery";
   		$camefrompage = "gallery.php";
   		break;
   	case "video":
   		$group['category'] = 'active';
   		$activepage[$page] = 'class="active"';
   		$selected['video'] = 'selected';
   		$arrowopen['category'] = 'open';
   		$pagetitle = "Video";
   		break;
   	case "managevideo":
   		$group['category'] = 'active';
   		$activepage['video'] = 'class="active"';
   		$selected['video'] = 'selected';
   		$arrowopen['category'] = 'open';
   		$pagetitle = ucfirst($_REQUEST['mode'])." Video";
   		$camefrom = "Video";
   		$camefrompage = "video.php";
   		break;
   	case "audio":
   		$group['category'] = 'active';
   		$activepage[$page] = 'class="active"';
   		$selected['audio'] = 'selected';
   		$arrowopen['category'] = 'open';
   		$pagetitle = "Audio";
   		break;
 	case "manageaudio":
   		$group['category'] = 'active';
   		$activepage['audio'] = 'class="active"';
   		$selected['audio'] = 'selected';
   		$arrowopen['category'] = 'open';
   		$pagetitle = ucfirst($_REQUEST['mode'])." Audio";
   		$camefrom = "Audio";
   		$camefrompage = "audio.php";
   		break;
   	case "service":
   		$group['service'] = 'active';
   		$activepage[$page] = 'class="active"';
   		$selected['service'] = 'selected';
   		$arrowopen['service'] = 'open';
   		$pagetitle = "Service";
   		break;
   	case "manageservice":
   		$group['service'] = 'active';
   		$activepage['service'] = 'class="active"';
   		$selected['service'] = 'selected';
   		$arrowopen['service'] = 'open';
   		$pagetitle = ucfirst($_REQUEST['mode'])." Service";
   		$camefrom = "Service";
   		$camefrompage = "service.php";
   		break;
   	case "press":
   		$group['press'] = 'active';
   		$activepage[$page] = 'class="active"';
   		$selected['press'] = 'selected';
   		$arrowopen['press'] = 'open';
   		$pagetitle = "Press";
   		break;
   	case "client":
   		$group['client'] = 'active';
   		$activepage[$page] = 'class="active"';
   		$selected['client'] = 'selected';
   		$arrowopen['client'] = 'open';
   		$pagetitle = "Client";
   		break;
   	case "manageclient":
   		$group['client'] = 'active';
   		$activepage['client'] = 'class="active"';
   		$selected['client'] = 'selected';
   		$arrowopen['client'] = 'open';
   		$pagetitle = ucfirst($_REQUEST['mode'])." Client";
   		$camefrom = "Client";
   		$camefrompage = "client.php";
   		break;
   	case "managepress":
   		$group['press'] = 'active';
   		$activepage['press'] = 'class="active"';
   		$selected['press'] = 'selected';
   		$arrowopen['press'] = 'open';
   		$pagetitle = ucfirst($_REQUEST['mode'])." Press";
   		$camefrom = "Press";
   		$camefrompage = "press.php";
   		break;
   	case "default":
   		$activepage[$page] = '';
   		break;
   }
   
   // Load cookie
   if(isset($_COOKIE['AdminCookie']))
   {
	   	$getcookie = $_COOKIE['AdminCookie'];
	   	$getcookie = explode("@@",$getcookie);
	   	$_SESSION['admin_id'] = $getcookie[0];
	   	$_SESSION['admin_username'] = $getcookie[1];
   }
   // Session check
   if($_SESSION['admin_id'] == "")	header("location:index.php");
   ?>
<!DOCTYPE html>

<html lang="en">
 <!--<![endif]-->
 <!-- BEGIN HEAD -->
 <head>
    <meta charset="utf-8" />
    <title><?=ALIAS?> Admin :: <?=$pagetitle?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/metro.css" rel="stylesheet" />
    <link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
    <link href="assets/bootstrap-fileupload/bootstrap-fileupload.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/style_responsive.css" rel="stylesheet" />
    <link href="assets/css/style_brown.css" rel="stylesheet" id="style_color" />
    <link rel="stylesheet" type="text/css" href="assets/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/chosen-bootstrap/chosen/chosen.css" />
    <link rel="stylesheet" type="text/css" href="assets/jquery-tags-input/jquery.tagsinput.css" />
    <link rel="stylesheet" type="text/css" href="assets/clockface/css/clockface.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" /> 
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-timepicker/compiled/timepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-colorpicker/css/colorpicker.css" />
    <link rel="stylesheet" href="assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" />
    <link rel="stylesheet" href="assets/data-tables/DT_bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
    <script src="https://cdn.ckeditor.com/4.11.2/standard/ckeditor.js"></script>
    <link rel="shortcut icon" href="<?=BASE_URL.FAVICON?>" />
 </head>
 <!-- END HEAD -->
 <!-- BEGIN BODY -->
 <body class="fixed-top">
    <div class="header navbar navbar-inverse navbar-fixed-top">
       <!-- BEGIN TOP NAVIGATION BAR -->
       <div class="navbar-inner">
          <div class="container-fluid">
             <!-- BEGIN LOGO -->
             <a class="brand" href="index.php">
                <h3 style="color:#FFFFFF; margin:-10px; font-size:20px;"><?=PROJECT_NAME?></h3>
             </a>
             <!-- END LOGO -->
             <!-- BEGIN RESPONSIVE MENU TOGGLER -->
             <a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
             <img src="assets/img/menu-toggler.png" alt="" />
             </a>          
             <!-- END RESPONSIVE MENU TOGGLER -->				
             <!-- BEGIN TOP NAVIGATION MENU -->					
             <ul class="nav pull-right">
                <!-- BEGIN NOTIFICATION DROPDOWN -->	
                <!-- BEGIN USER LOGIN DROPDOWN -->
                <li class="dropdown user">
                   <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                   <img alt="" src="images/user_nopic.png" width="28"/>
                   <span class="username"><?=$_SESSION['admin_username']?></span>
                   <i class="icon-angle-down"></i>
                   </a>
                   <ul class="dropdown-menu">
                      <li><a href="dashboard.php"><i class="icon-user"></i> Dashboard</a></li>
                      <li><a href="changepass.php"><i class="icon-calendar"></i> Change Password</a></li>
                      <li><a href="settings.php"><i class="icon-calendar"></i> Settings</a></li>
                      <li class="divider"></li>
                      <li><a href="logout.php"><i class="icon-key"></i> Log Out</a></li>
                   </ul>
                </li>
                <!-- END USER LOGIN DROPDOWN -->
             </ul>
             <!-- END TOP NAVIGATION MENU -->	
          </div>
       </div>
       <!-- END TOP NAVIGATION BAR -->
    </div>