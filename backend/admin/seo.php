<?php include("header.php"); ?>

<style>
.tile.double {
    height: 100px;
    width: 170px !important;
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
				<strong>Success!</strong> SEO information updated
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
							<h4><i class="icon-globe"></i><?=$pagetitle?></h4>
							<div class="tools">
								<a href="javascript:;" class="collapse"></a>
								<a href="#portlet-config" data-toggle="modal" class="config"></a>
								<a href="javascript:;" class="reload"></a>
								<a href="javascript:;" class="remove"></a>
							</div>
						</div>
						<div class="portlet-body">
							<!--<div class="clearfix">
								<div class="btn-group">
									<button id="sample_editable_1_new" class="btn green">
									Add New <i class="icon-plus"></i>
									</button>
								</div>
								<div class="btn-group pull-right">
									<button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="icon-angle-down"></i>
									</button>
									<ul class="dropdown-menu">
										<li><a href="#">Print</a></li>
										<li><a href="#">Save as PDF</a></li>
										<li><a href="#">Export to Excel</a></li>
									</ul>
								</div>
							</div>-->
							<table class="table table-striped table-bordered table-hover" id="sample_1">
								<thead>
									<tr>
										<th class="hidden-480">Page Link</th>
										<th class="hidden-480">Edit</th>
									</tr>
								</thead>
								<tbody>
									
									<?php
									$getpages = "SELECT * FROM ".TABLE_PREFIX."seo";
									$getpages = mysqli_query($conn,$getpages) or die (mysqli_error($conn));
									while($rowpages = mysqli_fetch_array($getpages))
									{
									?>
									
									<tr class="odd gradeX">
										<td class="hidden-480"><?=stripslashes($rowpages['pageurl'])?></td>
										<td class="hidden-480"><a class="btn mini green" data-toggle="modal" href="editseo.php?pageid=<?=$rowpages['id']?>"><i class="icon-edit"></i> Edit</a></td>
									</tr>
									
									<?php
									}
									?>
									
								</tbody>
							</table>
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
	});
</script>

<!-- END JAVASCRIPTS -->   

<!-- BEGIN FOOTER -->
<?php include("footer.php"); ?>
<!-- END FOOTER -->

</body>
<!-- END BODY -->
</html>