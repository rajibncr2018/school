<?php 
include("../config/connect.php");

if(isset($_REQUEST['mode']) && $_REQUEST['mode'] == "single")
{
	$id = $_REQUEST['id'];
	$table = $_REQUEST['table'];
	$datatype = $_REQUEST['datatype'];
	$sqlTbl = TABLE_PREFIX.$table;
	$getpreviousfiles = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM ".$sqlTbl." WHERE id = '".$id."'"));
	@unlink('../../'.$table.'_image/'.$getpreviousfiles['image']);
	
	$delsingle = "DELETE FROM ".$sqlTbl." WHERE id = '".$id."'";
	mysqli_query($conn,$delsingle) or die(mysqli_error($conn));
}

if(isset($_REQUEST['mode']) && $_REQUEST['mode'] == "selected")
{
	$ids = trim($_REQUEST['ids'],",");
	$ids = explode(",",$ids);
	$table = $_REQUEST['table'];
	$datatype = $_REQUEST['datatype'];
	$sqlTbl = TABLE_PREFIX.$table;
	
	foreach($ids as $valid)
	{
		$getpreviousfiles = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM ".$sqlTbl." WHERE id = '".$valid."'"));
		@unlink('../../'.$table.'_image/'.$getpreviousfiles['image']);
		
		$delsels = "DELETE FROM ".$sqlTbl." WHERE id = '".$valid."'";
		mysqli_query($conn,$delsels) or die(mysqli_error($conn));
	}
}
?>
<table class="table table-striped table-bordered table-hover" id="sample_1">
	<thead>
		<tr>
			<th style="width:8px;"><input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" /></th>
			<th class="hidden-480">Image</th>
			<th class="hidden-480">Name</th>
			<th class="hidden-480">Status</th>
			<th class="hidden-480">Edit</th>
			<th class="hidden-480">Delete</th>
		</tr>
	</thead>
	<tbody>
		
		<?php
		$getdest = "SELECT * FROM ".$sqlTbl." WHERE type = '".$datatype."' ORDER BY id DESC";
		$getdest = mysqli_query($conn,$getdest) or die(mysqli_error($conn));
		while($rowdest = mysqli_fetch_array($getdest))
		{
			// Get pic
			if($rowdest['image'] == "")
			{
				$pic = "images/nopic.jpg";
			}
			else
			{
				$pic = BASE_URL.$table.'_image/'.$rowdest['image'];
			}
		?>
		
		<tr class="odd gradeX">
			<td><input type="checkbox" class="checkboxes" value="<?=$rowdest['id']?>" name="<?=$table;?>[]"/></td>
			<td class="hidden-480">
			
				<div class="tile image double selected">
					<div class="tile-body">
						<img src="<?=$pic?>" alt="">
					</div>
				</div>
			
			</td>
			
			<td class="hidden-480"><?=stripslashes($rowdest['name'])?></td>
			
			
			<td class="hidden-480">
													   
			   <div class="controls">
				 <select class="span6 chosen" tabindex="1" style="width:64px;" id="stat<?=$rowdest['id']?>" onChange="changestatus(this.value,'<?=$rowdest['id']?>')">
					<option value="true" <?=$rowdest['status'] == 'Yes' ? 'selected' : ''?>>On</option>
					<option value="false" <?=$rowdest['status'] == 'No' ? 'selected' : ''?>>Off</option>
				 </select>
			  </div>
			
			</td>
			<td class="hidden-480"><a class="btn mini green" data-toggle="modal" href="manage<?=$datatype;?>.php?<?=$table;?>_id=<?=$rowdest['id']?>&mode=edit"><i class="icon-edit"></i> Edit</a></td>
			<td ><a class="btn mini red" href="#" onclick="deleteone(<?=$rowdest['id']?>,'<?=$table;?>','<?=$datatype;?>')"><i class="icon-trash"></i> Delete</a></td>
		</tr>
		
		<?php
		}
		?>
		
	</tbody>
</table>