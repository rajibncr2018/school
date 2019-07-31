<?php 
include("header.php");
?>
<?php
$id = isset($_REQUEST['data_id']) && $_REQUEST['data_id'] ? $_REQUEST['data_id'] : "";
//$date = date('Y/m/d');
// Get data
$getdata = "SELECT * FROM ".TABLE_PREFIX."data WHERE id = '".$id."'";
$getdata = mysqli_query($conn,$getdata) or die (mysqli_error($conn));
$getdata = mysqli_fetch_array($getdata);
if($getdata['image'] == "")
{
	$pic = "images/nopic.jpg";
}
else
{
	$pic = BASE_URL.'data_image/'.$getdata['image'];
}
if($getdata['json_data'])
{
	$fetchdata = json_decode($getdata['json_data']);
}

$pic1 = "images/nopic.jpg";
$pic2 = "images/nopic.jpg";
$pic3 = "images/nopic.jpg";

if(isset($_REQUEST['action']) && $_REQUEST['action'] == 'add')
{
	if($_FILES['data_image']['name'] != "")
	{
		$file_name = rand(0,999999).time().$_FILES['data_image']['name'];
		$arraychar = array(" ","'");
		$file_name = str_replace($arraychar,"",$file_name);
		$smallthmb = "smallthmb_".$file_name;
		$directory_path = "../data_image/";
		$temppath = $_FILES['data_image']['tmp_name'];
		$filepath = $directory_path.$smallthmb;
		move_uploaded_file($temppath,$filepath);
	}
	else
	{
		$smallthmb = "";
	}

	if($_FILES['data_image1']['name'] != "")
	{
		$file_name1 = rand(0,999999).time().$_FILES['data_image1']['name'];
		$arraychar1 = array(" ","'");
		$file_name1 = str_replace($arraychar1,"",$file_name1);
		$smallthmb1 = "smallthmb_".$file_name1;
		$directory_path1 = "../data_image/";
		$temppath1 = $_FILES['data_image1']['tmp_name'];
		$filepath1 = $directory_path1.$smallthmb1;
		move_uploaded_file($temppath1,$filepath1);
	}
	else
	{
		$smallthmb1 = "";
	}

	if($_FILES['data_image2']['name'] != "")
	{
		$file_name2 = rand(0,999999).time().$_FILES['data_image2']['name'];
		$arraychar2 = array(" ","'");
		$file_name2 = str_replace($arraychar2,"",$file_name2);
		$smallthmb2 = "smallthmb_".$file_name2;
		$directory_path2 = "../data_image/";
		$temppath2 = $_FILES['data_image2']['tmp_name'];
		$filepath2 = $directory_path2.$smallthmb2;
		move_uploaded_file($temppath2,$filepath2);
	}
	else
	{
		$smallthmb2 = "";
	}

	if($_FILES['data_image3']['name'] != "")
	{
		$file_name3 = rand(0,999999).time().$_FILES['data_image3']['name'];
		$arraychar3 = array(" ","'");
		$file_name3 = str_replace($arraychar3,"",$file_name3);
		$smallthmb3 = "smallthmb_".$file_name3;
		$directory_path3 = "../data_image/";
		$temppath3 = $_FILES['data_image3']['tmp_name'];
		$filepath3 = $directory_path3.$smallthmb3;
		move_uploaded_file($temppath3,$filepath3);
	}
	else
	{
		$smallthmb3 = "";
	}

	$insert = "INSERT INTO ".TABLE_PREFIX."data SET
				name = '".addslashes($_REQUEST['name'])."',
				json_data = '".addslashes(json_encode($_POST))."',
				type = '".addslashes($_REQUEST['type'])."',
			    image = '".$smallthmb."'";

	mysqli_query($conn,$insert) or die(mysqli_error($conn));
	$lastInsertId = mysqli_insert_id($conn);

	$insert1 = "INSERT INTO ".TABLE_PREFIX."data SET
				category_id = '".$lastInsertId."',
				type = 'projectimage',
			    image = '".$smallthmb1."'";
	mysqli_query($conn,$insert1) or die(mysqli_error($conn));

	$insert2 = "INSERT INTO ".TABLE_PREFIX."data SET
				category_id = '".$lastInsertId."',
				type = 'projectimage',
			    image = '".$smallthmb2."'";
	mysqli_query($conn,$insert2) or die(mysqli_error($conn));

	$insert3 = "INSERT INTO ".TABLE_PREFIX."data SET
				category_id = '".$lastInsertId."',
				type = 'projectimage',
			    image = '".$smallthmb3."'";
	mysqli_query($conn,$insert3) or die(mysqli_error($conn));

	$insert1 = "INSERT INTO ".TABLE_PREFIX."data SET
			category_id = '".$lastInsertId."',
			type = 'projectimage',
		    image = '".$smallthmb1."'";
	mysqli_query($conn,$insert1) or die(mysqli_error($conn));

	$insert2 = "INSERT INTO ".TABLE_PREFIX."data SET
				category_id = '".$lastInsertId."',
				type = 'projectimage',
			    image = '".$smallthmb2."'";
	mysqli_query($conn,$insert2) or die(mysqli_error($conn));

	$insert3 = "INSERT INTO ".TABLE_PREFIX."data SET
				category_id = '".$lastInsertId."',
				type = 'projectimage',
			    image = '".$smallthmb3."'";
	mysqli_query($conn,$insert3) or die(mysqli_error($conn));

	//update slug
	$text = preg_replace('~[^\\pL\d]+~u', '-', $_REQUEST['name']);
	// trim
	$text = trim($text, '-');
	// transliterate
	$text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
	// lowercase
	$text = strtolower($text);
	// remove unwanted characters
	$slug = preg_replace('~[^-\w]+~', '', $text);
	$checkExist = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM ".TABLE_PREFIX."data WHERE slug = '".$slug."' AND type = '".$_REQUEST['type']."'"));
	if($checkExist)
	{
		$slugupdate = "UPDATE ".TABLE_PREFIX."data SET
				slug = '".addslashes($slug.'-'.$lastInsertId)."'
			    WHERE id = '".$lastInsertId."'";
		mysqli_query($conn,$slugupdate) or die(mysqli_error($conn));

	}
	else
	{
		$slugupdate = "UPDATE ".TABLE_PREFIX."data SET
				slug = '".addslashes($slug)."'
			    WHERE id = '".$lastInsertId."'";
		mysqli_query($conn,$slugupdate) or die(mysqli_error($conn));
	}
	header("location:project.php?action=added");
}

// Edit

if(isset($_REQUEST['action']) && $_REQUEST['action'] == 'edit')
{

	$getpreviousfiles = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM ".TABLE_PREFIX."data WHERE id = '".$_REQUEST['id']."'"));
	if($_FILES['data_image']['name'])
	{
		$file_name = rand(0,999999).time().$_FILES['data_image']['name'];
		$arraychar = array(" ","'");
		$file_name = str_replace($arraychar,"",$file_name);
		$smallthmb = "smallthmb_".$file_name;
		$directory_path = "../data_image/";
		$temppath = $_FILES['data_image']['tmp_name'];
		$filepath = $directory_path.$smallthmb;
		move_uploaded_file($temppath,$filepath);
		//$magicianObj = new imageLib($filepath);
		//$magicianObj -> resizeImage(300,300);
		//$magicianObj -> saveImage($smallthmbpath, 100);
		//@unlink($filepath);
		@unlink('../data_image/'.$getpreviousfiles['image']);
	}
	else
	{
		$smallthmb = $getpreviousfiles['image'];
	}

	if($_FILES['data_image1']['name'] != "")
	{
		$file_name1 = rand(0,999999).time().$_FILES['data_image1']['name'];
		$arraychar1 = array(" ","'");
		$file_name1 = str_replace($arraychar1,"",$file_name1);
		$smallthmb1 = "smallthmb_".$file_name1;
		$directory_path1 = "../data_image/";
		$temppath1 = $_FILES['data_image1']['tmp_name'];
		$filepath1 = $directory_path1.$smallthmb1;
		move_uploaded_file($temppath1,$filepath1);
	}
	else
	{
		$smallthmb1 = "";
	}

	if($_FILES['data_image2']['name'] != "")
	{
		$file_name2 = rand(0,999999).time().$_FILES['data_image2']['name'];
		$arraychar2 = array(" ","'");
		$file_name2 = str_replace($arraychar2,"",$file_name2);
		$smallthmb2 = "smallthmb_".$file_name2;
		$directory_path2 = "../data_image/";
		$temppath2 = $_FILES['data_image2']['tmp_name'];
		$filepath2 = $directory_path2.$smallthmb2;
		move_uploaded_file($temppath2,$filepath2);
	}
	else
	{
		$smallthmb2 = "";
	}

	if($_FILES['data_image3']['name'] != "")
	{
		$file_name3 = rand(0,999999).time().$_FILES['data_image3']['name'];
		$arraychar3 = array(" ","'");
		$file_name3 = str_replace($arraychar3,"",$file_name3);
		$smallthmb3 = "smallthmb_".$file_name3;
		$directory_path3 = "../data_image/";
		$temppath3 = $_FILES['data_image3']['tmp_name'];
		$filepath3 = $directory_path3.$smallthmb3;
		move_uploaded_file($temppath3,$filepath3);
	}
	else
	{
		$smallthmb3 = "";
	}	

	$update = "UPDATE ".TABLE_PREFIX."data SET
				name = '".addslashes($_REQUEST['name'])."',
				json_data = '".addslashes(json_encode($_POST))."',
				type = '".addslashes($_REQUEST['type'])."',
			    image = '".$smallthmb."'
			    WHERE id = '".$_REQUEST['id']."'";

	mysqli_query($conn,$update) or die(mysqli_error($conn));
	$lastInsertId = $_REQUEST['id'];

	$delete = mysqli_fetch_array(mysqli_query($conn,"DELETE FROM ".TABLE_PREFIX."data WHERE type = 'projectimage' AND category_id = '".$lastInsertId."'"));		   

	$insert1 = "INSERT INTO ".TABLE_PREFIX."data SET
				category_id = '".$lastInsertId."',
				type = 'projectimage',
			    image = '".$smallthmb1."'";
	mysqli_query($conn,$insert1) or die(mysqli_error($conn));
			    
	$insert2 = "INSERT INTO ".TABLE_PREFIX."data SET
				category_id = '".$lastInsertId."',
				type = 'projectimage',
			    image = '".$smallthmb2."'";
	mysqli_query($conn,$insert2) or die(mysqli_error($conn));

	$insert3 = "INSERT INTO ".TABLE_PREFIX."data SET
				category_id = '".$lastInsertId."',
				type = 'projectimage',
			    image = '".$smallthmb3."'";
	mysqli_query($conn,$insert3) or die(mysqli_error($conn));
	
	//update slug
	$text = preg_replace('~[^\\pL\d]+~u', '-', $_REQUEST['name']);
	// trim
	$text = trim($text, '-');
	// transliterate
	$text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
	// lowercase
	$text = strtolower($text);
	// remove unwanted characters
	$slug = preg_replace('~[^-\w]+~', '', $text);
	$checkExist = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM ".TABLE_PREFIX."data WHERE slug = '".$slug."' AND type = '".$_REQUEST['type']."' AND id NOT IN ('".$lastInsertId."')"));

	if($checkExist)
	{
		$slugupdate = "UPDATE ".TABLE_PREFIX."data SET
				slug = '".addslashes($slug.'-'.$lastInsertId)."'
			    WHERE id = '".$lastInsertId."'";
		mysqli_query($conn,$slugupdate) or die(mysqli_error($conn));
	}
	else
	{
		$slugupdate = "UPDATE ".TABLE_PREFIX."data SET
				slug = '".addslashes($slug)."'
			    WHERE id = '".$lastInsertId."'";
		mysqli_query($conn,$slugupdate) or die(mysqli_error($conn));
	}
	header("location:project.php?action=updated");
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
                     <a href="<?=$_SERVER['HTTP_REFERER']?>"><?=$camefrom;?></a> 
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
                     <form name="frmdata" class="form-horizontal" action="<?=$_SERVER['PHP_SELF']?>" method="post" style="margin:0; padding:0" enctype="multipart/form-data">
                        <input type="hidden" name="action" value="<?=$_REQUEST['mode']?>">
                        <input type="hidden" name="id" value="<?=$id?>">
                        <input type="hidden" name="type" value="project">
                        <div class="control-group">
                           <label class="control-label">Project Image.</label>				  
                           <div class="controls">
                              <div class="fileupload fileupload-new" data-provides="fileupload">
                                 <div class="fileupload-new thumbnail">
                                    <img src="<?=$pic?>" alt="" style="width:200px"/>
                                 </div>
                                 <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                 <div>
                                    <span class="btn btn-file"><span class="fileupload-new">Select image</span>
                                    <span class="fileupload-exists">Change</span>
                                    <input type="file" class="default" name="data_image" id="data_image"/></span>
                                    <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="control-group">
                           <label class="control-label">Title</label>				  
                           <div class="controls">
                              <input type="text" class="span6 m-wrap" name="name" id="name" value="<?=isset($getdata['name']) && $getdata['name'] ? stripslashes($getdata['name']) : "";?>" />
                           </div>
                        </div>
                        <div class="control-group">
                           <label class="control-label">Image1.</label>				  
                           <div class="controls">
                              <div class="fileupload fileupload-new" data-provides="fileupload">
                                 <div class="fileupload-new thumbnail">
                                    <img src="<?=$pic1?>" alt="" style="width:200px"/>
                                 </div>
                                 <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                 <div>
                                    <span class="btn btn-file"><span class="fileupload-new">Select image</span>
                                    <span class="fileupload-exists">Change</span>
                                    <input type="file" class="default" name="data_image1" id="data_image1"/></span>
                                    <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="control-group">
                           <label class="control-label">Description 1</label>				  
                           <div class="controls">
                              <textarea class="span12 ckeditor m-wrap" name="description1" rows="6" id="description1"><?=isset($fetchdata->description1) && $fetchdata->description1 ? stripslashes($fetchdata->description1) : "";?></textarea>
                           </div>
                        </div>
                        <div class="control-group">
                           <label class="control-label">Image2.</label>				  
                           <div class="controls">
                              <div class="fileupload fileupload-new" data-provides="fileupload">
                                 <div class="fileupload-new thumbnail">
                                    <img src="<?=$pic2?>" alt="" style="width:200px"/>
                                 </div>
                                 <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                 <div>
                                    <span class="btn btn-file"><span class="fileupload-new">Select image</span>
                                    <span class="fileupload-exists">Change</span>
                                    <input type="file" class="default" name="data_image2" id="data_image2"/></span>
                                    <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="control-group">
                           <label class="control-label">Description 2</label>				  
                           <div class="controls">
                              <textarea class="span12 ckeditor m-wrap" name="description2" rows="6" id="description2"><?=isset($fetchdata->description2) && $fetchdata->description2 ? stripslashes($fetchdata->description2) : "";?></textarea>
                           </div>
                        </div>
                        <div class="control-group">
                           <label class="control-label">Image3.</label>				  
                           <div class="controls">
                              <div class="fileupload fileupload-new" data-provides="fileupload">
                                 <div class="fileupload-new thumbnail">
                                    <img src="<?=$pic3?>" alt="" style="width:200px"/>
                                 </div>
                                 <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                 <div>
                                    <span class="btn btn-file"><span class="fileupload-new">Select image</span>
                                    <span class="fileupload-exists">Change</span>
                                    <input type="file" class="default" name="data_image3" id="data_image3"/></span>
                                    <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="control-group">
                           <label class="control-label">Description 3</label>				  
                           <div class="controls">
                              <textarea class="span12 ckeditor m-wrap" name="description3" rows="6" id="description3"><?=isset($fetchdata->description3) && $fetchdata->description3 ? stripslashes($fetchdata->description3) : "";?></textarea>
                           </div>
                        </div>
                        <div class="form-actions" style="padding-left:10px">
                           <button type="submit" class="btn blue">Submit</button>
                           <button type="button" class="btn" id="cancel" onClick="location.href='<?=$camefrompage?>'">Cancel</button>
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
   
   		selector: "#description1",
   
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
<script>
   jQuery(document).ready(function() {			
   
   	// initiate layout and plugins
   
   	App.setPage("table_managed");
   
   	App.init();
   
   	
   
   	tinymce.init({
   
   		selector: "#description2",
   
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
<script>
   jQuery(document).ready(function() {			
   
   	// initiate layout and plugins
   
   	App.setPage("table_managed");
   
   	App.init();
   
   	
   
   	tinymce.init({
   
   		selector: "#description3",
   
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
<?php 
include("footer.php");
?>
<!-- END FOOTER -->
</body>
<!-- END BODY -->
</html>