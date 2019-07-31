<?php
$ci = &get_instance();
$funcName = $this->router->fetch_method(); 
$contrName = $this->router->fetch_class(); 
$url = $contrName.'/'.$funcName;
$this->load->model('Common_model');
$cms = $this->Common_model->select('span_cms','','','','','','','');
$seo = $this->Common_model->select('span_seo','','','','','','','');
$settings = $this->Common_model->select('span_settings','','','','','','','');
$settingsArray = array();
foreach($settings as $row)
{
  $settingsArray[$row['config_type']] = stripslashes($row['config_val']);
}
$currrentURL = $this->router->fetch_method();
$where1 = "status = 'Yes'";
$location = $this->Common_model->select('span_location',$where1,'','','1','3','id','ASC');
$faclities = $this->Common_model->select('span_service',$where1,'','','','','id','ASC');
/*$where1 = "status = 'Yes'"; 
$aboutttt = $this->Common_model->select('span_about',$where1,'','','','','id','DESC');
$newss = $this->Common_model->select('span_event',$where1,'','','1','3','id','DESC');
$where11 = "status = 'Yes' AND type = 'Apply Education'";
$education = $this->Common_model->select('span_select',$where11,'','','','','id','DESC');
$where111 = "status = 'Yes' AND type = 'Apply Experience'";
$experience = $this->Common_model->select('span_select',$where111,'','','1','3','id','DESC');
$where1111 = "status = 'Yes' AND type = 'Apply Sallery'";
$sallery = $this->Common_model->select('span_select',$where1111,'','','1','3','id','DESC');*/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <title>North Point School Baguihati || <?php echo $title; ?> </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<meta name="description" content="<?=$seo[0]['meta_data'];?>">
 	<meta name="keywords" content="<?=$seo[0]['meta_key'];?>">
    <!-- Bootstrap -->
    <link href="<?=base_url()?>frontend/css/bootstrap.css" rel="stylesheet">
	<link href="<?=base_url()?>frontend/css/doc.css" rel="stylesheet">
	<link rel="stylesheet" href="<?=base_url()?>frontend/css/lightbox.min.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700" rel="stylesheet">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?=base_url()?>frontend/js/filter-gallery.js"></script>
    <script src="<?=base_url()?>frontend/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>frontend/js/validate.js"></script>
    <script> var base_url="<?php echo base_url(); ?>"; </script>
  </head>
  <body>
    <div class="header">
    	<nav class="navbar navbar-default top-header" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
			<div class="container">
				<div class="row">
					<div class="col-sm-1">
						<div class="logo"><a href="<?=base_url()?>"><img src="<?=base_url()?>frontend/images/logo.png" alt="logo"></a></div>
					</div>
					<div class="col-sm-8">
					  <div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						  <span class="sr-only">Toggle navigation</span>
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						</button>
							
					  </div>
					
					  <!-- Collect the nav links, forms, and other content for toggling -->
					  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav schl">
						  <li <?php if($currrentURL=="index") { echo 'class="active"'; }?>><a href="<?=base_url()?>">HOME</a></li>
						  <li <?php if($currrentURL=="about") { echo 'class="active"'; }?>><a href="<?=base_url().'about-us';?>">ABOUT US</a></li>
						  <li class="dropdown" <?php if($currrentURL=="facilities") { echo 'class="active"'; }?>>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">FACILITES <b class="caret"></b></a>
							<ul class="dropdown-menu">
							<?php
							foreach($faclities as $row)
							{
							?>
								<li><a href="<?=base_url().'facilities/'.$row['slug'];?>"><?=$row['name'];?></a></li>
							<?php
							}
							?>
							</ul>
						  </li> 
						  <li <?php if($currrentURL=="gallery") { echo 'class="active"'; }?>><a href="<?=base_url().'gallery';?>">GALLERY</a></li>
						  <li <?php if($currrentURL=="syllabus") { echo 'class="active"'; }?>><a href="<?=base_url().'syllabus';?>">SYLLABUS</a></li> 
						  <li <?php if($currrentURL=="admission") { echo 'class="active"'; }?>><a href="<?=base_url().'admission';?>">ADMISSION</a></li>
						  <li <?php if($currrentURL=="contact") { echo 'class="active"'; }?>><a href="<?=base_url().'contact-us';?>">CONTACT</a></li>
						  <!-- <li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
							<ul class="dropdown-menu">
							  <li><a href="#">Action</a></li>
							  <li><a href="#">Another action</a></li>
							  <li><a href="#">Something else here</a></li>
							  <li class="divider"></li>
							  <li><a href="#">Separated link</a></li>
							  <li class="divider"></li>
							  <li><a href="#">One more separated link</a></li>
							</ul>
						  </li> -->
						</ul> 
					  </div><!-- /.navbar-collapse -->
					</div>
					<div class="col-sm-3">
						<div class="hdr-cnt">
						<img src="<?=base_url()?>frontend/images/mobile-icon.png" alt="icon">
						<p>CALLUS NOW</p>
						<h5><?=$settingsArray['contact_no_1']?></h5>
						</div>
					</div>
				</div>
			</div>
		</nav>
    </div>