<?php 
include("../config/connect.php");

$id = $_REQUEST['id'];
$table = $_REQUEST['table'];
$stat = $_REQUEST['stat'] == 'true' ? 'Yes' : 'No';

$updatestat = "UPDATE ".TABLE_PREFIX.$table." SET status = '".$stat."' WHERE id = '".$id."'";
mysqli_query($conn,$updatestat) or die(mysqli_error($conn));
?>