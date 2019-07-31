<?php
include("config/connect.php");

//print "<pre>";
//print_r($_COOKIE);
//die();

// Load cookie
if(isset($_COOKIE['AdminCookie']))
{
	$getcookie = $_COOKIE['AdminCookie'];
	$getcookie = explode("@@",$getcookie);
	
	$_SESSION['admin_id'] = $getcookie[0];
	$_SESSION['admin_username'] = $getcookie[1];
}

// Session check
if(isset($_SESSION['admin_id']) != "")	header("location:dashboard.php");

// Login
if(isset($_REQUEST['dologin']) == 'yes')
{
	$qrylogin = mysqli_query($conn,"SELECT * FROM ".TABLE_PREFIX."admin WHERE 
							 admin_username = '".$_REQUEST['admin_username']."' AND 
							 admin_password = '".md5($_REQUEST['admin_password'])."'"); 
							 
	$cntlogin = mysqli_num_rows($qrylogin);
	$reslogin = mysqli_fetch_array($qrylogin);
	
	if(!$cntlogin)
	{
		header("location:index.php?login=failed");
	}
	else
	{
		$_SESSION['admin_id'] = $reslogin['admin_id'];
		$_SESSION['admin_username'] = $reslogin['admin_username'];
		
		$cookievalue = $_SESSION['admin_id']."@@".$_SESSION['admin_username'];
		
		if($_REQUEST['rem'] == 'yes')
		{
			setcookie("AdminCookie",$cookievalue,time()+30*24*60*60);
		}
		
		header("location:dashboard.php");
	}
}
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
  <meta charset="utf-8" />
  <title><?=PROJECT_NAME?> Admin</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="description" />
  <meta content="" name="author" />
  <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/metro.css" rel="stylesheet" />
  <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="assets/css/style.css" rel="stylesheet" />
  <link href="assets/css/style_responsive.css" rel="stylesheet" />
  <link href="assets/css/style_brown.css" rel="stylesheet" id="style_color" />
  <link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
  <link rel="shortcut icon" href="<?=FAVICON?>" />
</head>

<style>
.login {
    background-color: #623F18 !important;
}
</style>

<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
  <!-- BEGIN LOGO -->
  <div class="logo">
    <!--<img src="assets/img/logo-big.png" alt="" />--> 
	<h3 style="color:#FFFFFF"><?=PROJECT_NAME?> Admin</h3>
  </div>
  <!-- END LOGO -->
  <!-- BEGIN LOGIN -->
  <div class="content">
    <!-- BEGIN LOGIN FORM -->
    <form class="form-vertical login-form" action="<?=$_SERVER['PHP_SELF']?>">
	  <input type="hidden" name="dologin" value="yes" />
      <h3 class="form-title">Login to your account</h3>
	  
	  <?php
	  if(isset($_REQUEST['login']) == 'failed')
	  {
	  ?>
	  
	  <div class="alert alert-error">
		<button data-dismiss="alert" class="close"></button>
		Invalid username or password.
	  </div>
	  
	  <?php
	  }
	  ?>
	  
      <div class="alert alert-error hide">
        <button class="close" data-dismiss="alert"></button>
        <span>Enter any username and passowrd.</span>
      </div>
      <div class="control-group">
        <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
        <label class="control-label visible-ie8 visible-ie9">Username</label>
        <div class="controls">
          <div class="input-icon left">
            <i class="icon-user"></i>
            <input class="m-wrap placeholder-no-fix" type="text" placeholder="Username" name="admin_username"/>
          </div>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label visible-ie8 visible-ie9">Password</label>
        <div class="controls">
          <div class="input-icon left">
            <i class="icon-lock"></i>
            <input class="m-wrap placeholder-no-fix" type="password" placeholder="Password" name="admin_password"/>
          </div>
        </div>
      </div>
      <div class="form-actions" style="border-bottom:none">
        <label class="checkbox">
        <input type="checkbox" name="rem" value="yes"/> Remember me
        </label>
        <button type="submit" class="btn green pull-right">
        Login <i class="m-icon-swapright m-icon-white"></i>
        </button>            
      </div>
    </form>
    <!-- END LOGIN FORM -->        
  </div>
  <!-- END LOGIN -->
  <!-- BEGIN COPYRIGHT -->
  <div class="copyright">
    <?=date('Y')?> &copy; <?=PROJECT_NAME?>
  </div>
  <!-- END COPYRIGHT -->
  <!-- BEGIN JAVASCRIPTS -->
  <script src="assets/js/jquery-1.8.3.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>  
  <script src="assets/uniform/jquery.uniform.min.js"></script> 
  <script src="assets/js/jquery.blockui.js"></script>
  <script type="text/javascript" src="assets/jquery-validation/dist/jquery.validate.min.js"></script>
  <script src="assets/js/app.js"></script>
  <script>
    jQuery(document).ready(function() {     
      App.initLogin();
    });
  </script>
  <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>