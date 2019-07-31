<?php include("header.php"); ?>

<?php
if(isset($_REQUEST['changepass']) == 'yes')
{
	$getpass = "SELECT * FROM ".TABLE_PREFIX."admin WHERE admin_id = '".$_SESSION['admin_id']."'";
	$getpass = mysqli_query($conn,$getpass) or die (mysqli_error($conn));
	$getpass = mysqli_fetch_array($getpass);
	
	$getpass = $getpass['admin_password']; 
	$passtocheck = md5($_REQUEST['oldpass']); 
	
	if($passtocheck == $getpass)
	{
		$updatepass = "UPDATE ".TABLE_PREFIX."admin SET
					   admin_password = '".md5($_REQUEST['newpass'])."' WHERE admin_id = '".$_SESSION['admin_id']."'"; 
					   
		mysqli_query($conn,$updatepass) or die();
		
		header('location:changepass.php?action=passchanged');
	}
	else
	{
		header('location:changepass.php?action=wrongoldpass');
	}
}
?>

<style>
.form-horizontal .controls span{
	display:none;
	font-size:11px;
	color:#FF0000;
}
</style>

<!-- END HEADER -->
<!-- BEGIN CONTAINER -->
<div class="page-container row-fluid">
  <!-- BEGIN SIDEBAR -->
  <?php include("leftbar.php"); ?>
  <!-- END SIDEBAR -->
  <!-- BEGIN PAGE -->  
  <div class="page-content">
	 <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
	 <div id="portlet-config" class="modal hide">
		<div class="modal-header">
		   <button data-dismiss="modal" class="close" type="button"></button>
		   <h3>portlet Settings</h3>
		</div>
		<div class="modal-body">
		   <p>Here will be a configuration form</p>
		</div>
	 </div>
	 <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
	 <!-- BEGIN PAGE CONTAINER-->
	 <div class="container-fluid">
		<!-- BEGIN PAGE HEADER-->   
		<div class="row-fluid">
		   <div class="span12">
			  <!-- BEGIN STYLE CUSTOMIZER -->
			  <div class="color-panel hidden-phone">
				 <div class="color-mode-icons icon-color"></div>
				 <div class="color-mode-icons icon-color-close"></div>
				 <div class="color-mode">
					<p>THEME COLOR</p>
					<ul class="inline">
					   <li class="color-black current color-default" data-style="default"></li>
					   <li class="color-blue" data-style="blue"></li>
					   <li class="color-brown" data-style="brown"></li>
					   <li class="color-purple" data-style="purple"></li>
					   <li class="color-white color-light" data-style="light"></li>
					</ul>
					<label class="hidden-phone">
					<input type="checkbox" class="header" checked value="" />
					<span class="color-mode-label">Fixed Header</span>
					</label>                    
				 </div>
			  </div>
			  <!-- END BEGIN STYLE CUSTOMIZER -->   
			  <h3 class="page-title">
				 <?=$pagetitle?>
			  </h3>
			  <ul class="breadcrumb">
				 <li>
					<i class="icon-home"></i>
					<a href="dashboard.php">Home</a> 
					<span class="icon-angle-right"></span>
				 </li>
				<li><a href="#"><?=$pagetitle?></a></li>
			  </ul>
			  
			  <?php
			  if(isset($_REQUEST['action']) && $_REQUEST['action'] == 'passchanged')
			  {
			  ?>
			  
			  <div class="alert alert-success">
				<button data-dismiss="alert" class="close"></button>
				<strong>Success!</strong> Password changed
			  </div>
			  
			  <?php
			  }
			  if(isset($_REQUEST['action']) && $_REQUEST['action'] == 'wrongoldpass')
			  {
			  ?>
			  
			  <div class="alert alert-error">
				<button data-dismiss="alert" class="close"></button>
				<strong>Failed!</strong> Wrong old password
			  </div>
			  
			  <?php
			  }
			  ?>
			  
		   </div>
		</div>
		<!-- END PAGE HEADER-->
		<!-- BEGIN PAGE CONTENT-->
		<div class="row-fluid">
		   <div class="span12">
			  <!-- BEGIN SAMPLE FORM PORTLET-->   
			  <div class="portlet box light-grey">
				 <div class="portlet-title">
					<h4><i class="icon-reorder"></i><?=$pagetitle?></h4>
					<div class="tools">
					   <a href="javascript:;" class="collapse"></a>
					   <a href="#portlet-config" data-toggle="modal" class="config"></a>
					   <a href="javascript:;" class="reload"></a>
					   <a href="javascript:;" class="remove"></a>
					</div>
				 </div>
				 <div class="portlet-body form">
					<!-- BEGIN FORM-->
					<form action="<?=$_SERVER['PHP_SELF']?>" class="form-horizontal" name="frmchangepass" method="post" onSubmit="return passval()">
					   <input type="hidden" name="changepass" value="yes">
					   <div class="control-group">
						  <label class="control-label">Old Password</label>
						  <div class="controls">
							 <input type="password" class="span6 m-wrap" name="oldpass" id="oldpass"/>
							 <span class="help-inline" id="oldpasserr">Some hint here</span>
						  </div>
					   </div>
					   <div class="control-group">
						  <label class="control-label">New Password</label>
						  <div class="controls">
							 <input type="password" class="span6 m-wrap"  name="newpass" id="newpass"/>
							 <span class="help-inline" id="newpasserr">Some hint here</span>
						  </div>
					   </div>
					   <div class="control-group">
						  <label class="control-label">Confirm Password</label>
						  <div class="controls">
							 <input type="password" class="span6 m-wrap"  name="conpass" id="conpass"/>
							 <span class="help-inline" id="conpasserr">Some hint here</span>
						  </div>
					   </div>
					   <div class="form-actions">
						  <button type="submit" class="btn blue">Submit</button>
						  <button type="button" class="btn"  id="cancel">Cancel</button>
					   </div>
					</form>
					<!-- END FORM-->           
				 </div>
			  </div>
			  <!-- END SAMPLE FORM PORTLET-->
		   </div>
		</div>
		<!-- END PAGE CONTENT-->         
	 </div>
	 <!-- END PAGE CONTAINER-->
  </div>
  <!-- END PAGE -->  
</div>
<!-- END CONTAINER -->

<!-- BEGIN JAVASCRIPTS -->    
<!-- Load javascripts at bottom, this will reduce page load time -->
<script src="assets/js/jquery-1.8.3.min.js"></script>    
<script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>  
<script src="assets/breakpoints/breakpoints.js"></script>       
<script src="assets/bootstrap/js/bootstrap.min.js"></script>   
<script type="text/javascript" src="assets/bootstrap-fileupload/bootstrap-fileupload.js"></script>
<script src="assets/js/jquery.blockui.js"></script>
<script src="assets/js/jquery.cookie.js"></script>
<!-- ie8 fixes -->
<!--[if lt IE 9]>
<script src="assets/js/excanvas.js"></script>
<script src="assets/js/respond.js"></script>
<![endif]-->
<script type="text/javascript" src="assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
<script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
<script type="text/javascript" src="assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script> 
<script type="text/javascript" src="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
<script type="text/javascript" src="assets/jquery-tags-input/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
<script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="assets/clockface/js/clockface.js"></script>
<script type="text/javascript" src="assets/bootstrap-daterangepicker/date.js"></script>
<script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script> 
<script type="text/javascript" src="assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>  
<script type="text/javascript" src="assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
<script src="assets/js/app.js"></script>     
<script>
  jQuery(document).ready(function() {       
	 // initiate layout and plugins
	 App.init();
  });
  
function passval()
{
	$("#oldpasserr").html('');
	$("#newpasserr").html('');
	$("#conpasserr").html('');
	
	$("#oldpasserr").hide();
	$("#newpasserr").hide();
	$("#conpasserr").hide();
	
	
	var oldpass = $("#oldpass").val();
	var newpass = $("#newpass").val();
	var conpass = $("#conpass").val();
	
			
	if(oldpass == "")
	{
		$("#oldpasserr").show();
		$("#oldpasserr").html('Enter old password');
	}
	if(newpass == "")
	{
		$("#newpasserr").show();
		$("#newpasserr").html('Enter new password');
	}
	if(conpass == "")
	{
		$("#conpasserr").show();
		$("#conpasserr").html('Confirm your password');
	}
	if(conpass != newpass)
	{
		$("#conpasserr").show();
		$("#conpasserr").html('Passwords mismatch');
	}
	if(oldpass != "" && newpass != "" && conpass == newpass && conpass != "")
	{
		document.frmchangepass.submit();
	}
	else
	{
		return false;
	}

}
</script>

<script>
$('#cancel').click(function(){
	location.href = 'dashboard.php';
});
</script>

<!-- END JAVASCRIPTS -->   

<!-- BEGIN FOOTER -->
<?php include("footer.php"); ?>
<!-- END FOOTER -->

</body>
<!-- END BODY -->
</html>