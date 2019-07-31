<?php
 $ci = &get_instance();
 $funcName = $this->router->fetch_method(); 
 $contrName = $this->router->fetch_class();
 $url = $contrName.'/'.$funcName; 
 $this->load->model('Common_model');
 $cms = $this->Common_model->select('switch_data',array("type" => 'cms',"status" => 'Yes'),'','','','','','');
 $seo = $this->Common_model->select('switch_seo','','','','','','','');
 $settings = $this->Common_model->select('switch_settings','','','','','','','');
 $service = $this->Common_model->select('switch_data',array("type" => 'service',"status" => 'Yes'),'','','','','','');
 $settingsArray = array();
 foreach($settings as $row)
 {
   $settingsArray[$row['config_type']] = stripslashes($row['config_val']);
 }
 ?>

 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
 <head>
    <title>INDUS BAND || <?php echo $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400italic,600,700italic,400,700,800italic" rel="stylesheet" type="text/css">
    <!-- VarelaRound -->
    <link href="http://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" type="text/css">
    <!-- Icon Font - Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Stylesheets -->
    <!-- Bootstrap -->
    <link href="<?=base_url()?>frontend/css/bootstrap.css" rel="stylesheet">
    <link href="<?=base_url()?>frontend/css/doc.css" rel="stylesheet">
    <link href="<?=base_url()?>frontend/css/lightbox.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?=base_url()?>frontend/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>frontend/js/lightbox.min.js"></script>
 </head>
 <body>
    <div class="header">
       <nav class="navbar navbar-default top-header" role="navigation">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="container">
             <div class="row">
                <div class="col-sm-3">
                   <div class="logo"><a href="<?=base_url();?>"><img src="<?=base_url()?>frontend/images/logo.png" alt="logo"></a></div>
                </div>
                <div class="col-sm-9">
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
                         <li <?=$contrName=='home' ? 'class="active"' : ''; ?>><a href="<?=base_url();?>">Home</a></li>
                         <li <?=$contrName=='about' ? 'class="active"' : ''; ?>><a href="<?=base_url();?>about">About </a></li>
                         <li <?=$contrName=='gallery' ? 'class="active"' : ''; ?>><a href="<?=base_url();?>gallery">Gallery</a></li>
                         <li <?=$contrName=='press' ? 'class="active"' : ''; ?>><a href="<?=base_url();?>press">Press</a></li>
                         <li <?=$contrName=='event' ? 'class="active"' : ''; ?>><a href="<?=base_url();?>event">Events</a></li>
                         <!--<li <?=$contrName=='projects' ? 'class="active"' : ''; ?>><a href="<?=base_url();?>projects">Projects</a></li>-->
                         <li <?=$contrName=='contact' ? 'class="active"' : ''; ?>><a href="<?=base_url();?>contact">Contact</a></li>
                      </ul>
                   </div>
                   <!-- /.navbar-collapse -->
                </div>
             </div>
          </div>
       </nav>
       <div class="devider-color"></div>
    </div>
