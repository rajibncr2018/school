<?php 
include("../config/connect.php");

$id = $_REQUEST['id'];
$phone = $_REQUEST['phone'];
$status = $_REQUEST['status']; 
$updatestat = "UPDATE ".TABLE_PREFIX.'booking'." SET status = '".$status."' WHERE id = '".$id."'";
$updatestat = mysqli_query($conn,$updatestat) or die(mysqli_error($conn));
if($updatestat && $status=='2')
{
	//send message
	$url = "http://alerts.variforrm.in/api?method=sms.normal&api_key=a4fbb59dd4e0b5a6758dfde8bbb4d887&to=".$phone."&sender=ORNGPR&message=Your booking has been confirm. Thank You Orange Team&flash=0&unicode=0";
	$ch = curl_init();
	$curlConfig = array(
	    CURLOPT_URL            => $url,
	    CURLOPT_POST           => true,
	    CURLOPT_RETURNTRANSFER => true,
	    CURLOPT_POSTFIELDS     => array()
	);
	curl_setopt_array($ch, $curlConfig);
	$result = curl_exec($ch);
	curl_close($ch);

}

?>