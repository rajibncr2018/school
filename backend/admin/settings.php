<?php include("header.php"); ?>

<?php

if(isset($_REQUEST['updatesettings']) == 'yes')
{
	foreach($settings as $keyset=>$valset)
	{	
		$updateset = "UPDATE ".TABLE_PREFIX."settings SET config_val = '".$_REQUEST[$keyset]."' WHERE config_type = '".$keyset."'";
		mysqli_query($conn,$updateset) or die (mysqli_error($conn));
		
	}
	
	header("location:settings.php?action=updated");
}
?>

<style>


.form-horizontal .control-label {
    float: left;
    padding-top: 5px;
    text-align: left;
    width: 236px;
}
.form .form-actions{
	padding-left:20px;
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
			  if(isset($_REQUEST['action']) == 'updated')
			  {
			  ?>
			  
			  <div class="alert alert-success">
				<button data-dismiss="alert" class="close"></button>
				<strong>Success!</strong> Settings updated
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
					<form action="<?=$_SERVER['PHP_SELF']?>" class="form-horizontal" name="frmsettings" method="post">
					   <input type="hidden" name="updatesettings" value="yes">
					   <div class="control-group">
						  <label class="control-label">Admin Email</label>
						  <div class="controls">
							 <input type="text" class="span6 m-wrap" name="admin_email" id="admin_email" value="<?=$settings['admin_email']?>"/>
						  </div>
					   </div>
					   <div class="control-group">
						  <label class="control-label">Facebook Link</label>
						  <div class="controls">
							 <input type="text" class="span6 m-wrap"  name="facebook_link" id="facebook_link" value="<?=$settings['facebook_link']?>"/>
						  </div>
					   </div>
					   <div class="control-group">
						  <label class="control-label">Twitter Link</label>
						  <div class="controls">
							 <input type="text" class="span6 m-wrap"  name="twitter_link" id="twitter_link" value="<?=$settings['twitter_link']?>"/>
						  </div>
					   </div>
					   <div class="control-group">
						  <label class="control-label">Youtube Channel Link</label>
						  <div class="controls">
							 <input type="text" class="span6 m-wrap"  name="youtube_link" id="youtube_link" value="<?=$settings['youtube_link']?>"/>
						  </div>
					   </div>
					   
					   <div class="control-group">
						  <label class="control-label">Google Plus Link</label>
						  <div class="controls">
							 <input type="text" class="span6 m-wrap"  name="googleplus_link" id="googleplus_link" value="<?=$settings['googleplus_link']?>"/>
						  </div>
					   </div>
					   	   
					   <div class="control-group">
						  <label class="control-label">Instagram Link</label>
						  <div class="controls">
							 <input type="text" class="span6 m-wrap"  name="instagram_link" id="instagram_link" value="<?=$settings['instagram_link']?>"/>
						  </div>
					   </div>
					   
					   <div class="control-group">
						  <label class="control-label">Contact No 1</label>
						  <div class="controls">
							 <input type="text" class="span6 m-wrap"  name="contact_no_1" id="contact_no_1" value="<?=$settings['contact_no_1']?>"/>
						  </div>
					   </div>
					   
					   <div class="control-group">
						  <label class="control-label">Contact No 2</label>
						  <div class="controls">
							 <input type="text" class="span6 m-wrap"  name="contact_no_2" id="contact_no_2" value="<?=$settings['contact_no_2']?>"/>
						  </div>
					   </div>
					   
					   <div class="control-group">
						  <label class="control-label">Landline No.</label>
						  <div class="controls">
							 <input type="text" class="span6 m-wrap"  name="landline_no" id="landline_no" value="<?=$settings['landline_no']?>"/>
						  </div>
					   </div>
					   
					   <div class="control-group">
						  <label class="control-label">Contact Email</label>
						  <div class="controls">
							 <input type="text" class="span6 m-wrap"  name="contact_email" id="contact_email" value="<?=$settings['contact_email']?>"/>
						  </div>
					   </div>
					   
					   <div class="control-group">
						  <label class="control-label">Corporate Office Address</label>
						  <div class="controls">
							 <textarea class="span6 m-wrap"  name="corporate_office_address" id="corporate_office_address" ><?=$settings['corporate_office_address']?></textarea>
						  </div>
					   </div>

					   
					   <div class="form-actions">
						  <button type="submit" class="btn blue">Submit</button>
						  <button type="button" class="btn" id="cancel">Cancel</button>
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
  
  // to fix chosen dropdown width in inactive hidden tab content
 $('#advance_form_hor').on('shown', function (e) {
	App.initChosenSelect('#chosen_category');
 });
 
  jQuery(document).ready(function() {       
	 // initiate layout and plugins
	 App.init();
  });
  
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