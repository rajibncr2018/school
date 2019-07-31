<?php include("header.php"); ?>
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
				<h3>Widget Settings</h3>
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
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
					<h3 class="page-title">
						Dashboard				
					</h3>
					<ul class="breadcrumb">
						<li>
							<i class="icon-home"></i>
							<a href="dashboard.php">Home</a> 
							<i class="icon-angle-right"></i>
						</li>
						<li><a href="#">Dashboard</a></li>
						<!--<li class="pull-right no-text-shadow">
							<div id="dashboard-report-range" class="dashboard-date-range tooltips no-tooltip-on-touch-device responsive" data-tablet="" data-desktop="tooltips" data-placement="top" data-original-title="Change dashboard date range">
								<i class="icon-calendar"></i>
								<span></span>
								<i class="icon-angle-down"></i>
							</div>
						</li>-->
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<div id="dashboard" style="width:100%">

				<div style="font-size:20px; font-weight:bold; color:#000000; top:0; bottom:0; left:0; right:0; margin:auto auto; width:500px; margin-top:100px;">Welcome to <?=PROJECT_NAME?> Administrative section</div>
			
			</div>
		</div>
		<!-- END PAGE CONTAINER-->		
	</div>
	<!-- END PAGE -->
</div>
<!-- END CONTAINER -->

<!-- BEGIN JAVASCRIPTS -->
<!-- Load javascripts at bottom, this will reduce page load time -->
<script src="assets/js/jquery-1.8.3.min.js"></script>	
<!--[if lt IE 9]>
<script src="assets/js/excanvas.js"></script>
<script src="assets/js/respond.js"></script>	
<![endif]-->	
<script src="assets/breakpoints/breakpoints.js"></script>		
<script src="assets/jquery-ui/jquery-ui-1.10.1.custom.min.js"></script>	
<script src="assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="assets/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.blockui.js"></script>	
<script src="assets/js/jquery.cookie.js"></script>
<script src="assets/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>	
<script src="assets/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
<script src="assets/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
<script src="assets/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
<script src="assets/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
<script src="assets/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
<script src="assets/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>	
<!--<script src="assets/flot/jquery.flot.js"></script>
<script src="assets/flot/jquery.flot.resize.js"></script>-->
<script type="text/javascript" src="assets/gritter/js/jquery.gritter.js"></script>
<script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>	
<script type="text/javascript" src="assets/js/jquery.pulsate.min.js"></script>
<script type="text/javascript" src="assets/bootstrap-daterangepicker/date.js"></script>
<script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script>	
<script src="assets/js/app.js"></script>				
<script>
	jQuery(document).ready(function() {		
		App.setPage("index");  // set current page
		App.init(); // init the rest of plugins and elements
	});
</script>
<!-- END JAVASCRIPTS -->

<!-- BEGIN FOOTER -->
<?php include("footer.php"); ?>
<!-- END FOOTER -->

</body>
<!-- END BODY -->
</html>
