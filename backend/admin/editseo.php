<?php 
include("header.php");
?>
<?php
$pageid = isset($_REQUEST['pageid']) && $_REQUEST['pageid'] ? $_REQUEST['pageid'] : "";

// Get page details	
$getpage = "SELECT * FROM ".TABLE_PREFIX."seo WHERE id = '".$pageid."'";
$getpage = mysqli_query($conn,$getpage) or die (mysqli_error($conn));
$getpage = mysqli_fetch_array($getpage);


// Update page details
if(isset($_REQUEST['dopage']) == 'edit')
{
	$update = "UPDATE ".TABLE_PREFIX."seo SET 
			   pageurl = '".addslashes($_REQUEST['pageurl'])."',
			   meta_data = '".addslashes($_REQUEST['meta_data'])."',
			   meta_key = '".addslashes($_REQUEST['meta_key'])."'
			   WHERE id = '".$pageid."'";
			   
	mysqli_query($conn,$update) or die (mysqli_error($conn));
	
	header("location:seo.php?action=updated");
}
?>

<style>
.tabbable {
    margin-left: 20px;
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
				 <li>
					<a href="<?=$_SERVER['HTTP_REFERER']?>">SEO</a> 
					<span class="icon-angle-right"></span>
				 </li>
				<li><a href="#"><?=$pagetitle?></a></li>
			  </ul>
			  
		   </div>
		</div>
		<!-- END PAGE HEADER-->
		<!-- BEGIN PAGE CONTENT-->
		
		<div class="row-fluid">
		   <div class="span12">
			  <!-- BEGIN SAMPLE FORM PORTLET-->   
			  <div class="portlet box light-grey">
						<div class="portlet-title">
							<h4><i class="icon-globe"></i><?=$pagetitle?></h4>
							<div class="tools">
								<a href="javascript:;" class="collapse"></a>
								<a href="#portlet-config" data-toggle="modal" class="config"></a>
								<a href="javascript:;" class="reload"></a>
								<a href="javascript:;" class="remove"></a>
							</div>
						</div>
						
						<div class="portlet-body form">
						
							<form name="frmpage" class="form-horizontal" action="<?=$_SERVER['PHP_SELF']?>" method="post" style="margin:0; padding:0" enctype="multipart/form-data">

							<input type="hidden" name="dopage" value="edit">
							<input type="hidden" name="pageid" value="<?=$pageid?>">
						   
							<label class="control-label">SEO</label>
							<div class="row-fluid">
								<div class="span6">
									<div class="control-group" >
									  <div class="controls" style="margin-left:15px;" >
										 <input type="text" class="span6 m-wrap" name="pageurl" id="pageurl" value="<?=stripslashes($getpage['pageurl'])?>" style="width:100%" readonly />
									  </div>
									  
								   </div>
											
								</div>
							</div>
						   
						   <label class="control-label">Meat Data</label>
						   <div class="row-fluid">
								<div class="span6">
									<div class="control-group">
									  <div class="controls" style="margin-left:15px;">
										 <textarea class="span12 ckeditor m-wrap" name="meta_data" rows="6" id="meta_data"><?=stripslashes($getpage['meta_data'])?></textarea>
									  </div>
								   </div>
								</div>
							</div>
                            <label class="control-label">Meta Key</label>
						   <div class="row-fluid">
								<div class="span6">
									<div class="control-group">
									  <div class="controls" style="margin-left:15px;">
										 <textarea class="span12 ckeditor m-wrap" name="meta_key" rows="6" id="meta_key"><?=stripslashes($getpage['meta_key'])?></textarea>
									  </div>
								   </div>
								</div>
							</div>
							
						   
						   <div class="form-actions" style="padding-left:10px">
							  <button type="submit" class="btn blue">Submit</button>
							  <button type="button" class="btn" id="cancel" onClick="location.href='cmspages.php'">Cancel</button>
						   </div>
						   
						   </form>
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
<script type="text/javascript" src="tinymce/tinymce.min.js"></script>  
<script type="text/javascript" src="assets/bootstrap-fileupload/bootstrap-fileupload.js"></script>
<script src="assets/breakpoints/breakpoints.js"></script>	
<script src="assets/bootstrap/js/bootstrap.min.js"></script>		
<script src="assets/js/jquery.blockui.js"></script>
<script src="assets/js/jquery.cookie.js"></script>
<!-- ie8 fixes -->
<!--[if lt IE 9]>
<script src="assets/js/excanvas.js"></script>
<script src="assets/js/respond.js"></script>
<![endif]-->	
<script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
<script type="text/javascript" src="assets/data-tables/jquery.dataTables.js"></script>
<script type="text/javascript" src="assets/data-tables/DT_bootstrap.js"></script>
<script src="assets/js/app.js"></script>		
<script>
	jQuery(document).ready(function() {			
		// initiate layout and plugins
		App.setPage("table_managed");
		App.init();
		
		tinymce.init({
			selector: "textarea",
			plugins: [
				 "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
				 "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
				 "save table contextmenu directionality emoticons template paste textcolor"
		   ],
		   toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons", 
		   style_formats: [
				{title: 'Bold text', inline: 'b'},
				{title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
				{title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
				{title: 'Example 1', inline: 'span', classes: 'example1'},
				{title: 'Example 2', inline: 'span', classes: 'example2'},
				{title: 'Table styles'},
				{title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
			],
			width : 800,
			height: 300

		});
	});
</script>

<!-- END JAVASCRIPTS --> 

<!-- BEGIN FOOTER -->
<?php include("footer.php"); ?>
<!-- END FOOTER -->
  
</body>
<!-- END BODY -->
</html>