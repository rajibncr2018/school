<?php
//error_reporting(0);
session_start();
ob_start();
define('PROJECT_NAME', 'Indus');
define('ALIAS', 'Indus');
//define('FAVICON', 'images/favicon.png');
define('TABLE_PREFIX', 'switch_');


date_default_timezone_set('Asia/Kolkata');
//echo $_SERVER['REMOTE_ADDR']; die();
if($_SERVER['REMOTE_ADDR']=="::1")
{
	define('DB_HOST', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASS', '');
	define('DB_NAME', 'school');
	define("BASE_URL", "http://localhost/school/backend/");
	define("DIR_PATH", str_replace("\\","/",$_SERVER['DOCUMENT_ROOT'])."school/backend/admin/");
}
else
{
	define('DB_HOST', 'localhost');
	define('DB_USERNAME', 'swaga21h_inuser');
	define('DB_PASS', 'indus@1234');
	define('DB_NAME', 'swaga21h_indusdb');
	define("BASE_URL", "http://indusband.com/backend/");
	define("DIR_PATH", str_replace("\\","/",$_SERVER['DOCUMENT_ROOT'])."admin/");	
}

// Create connection
$conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASS, DB_NAME);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


// Get settings
$getsettings = "SELECT * FROM ".TABLE_PREFIX."settings";
$getsettings = mysqli_query($conn,$getsettings) or die (mysqli_error($conn));

while($rowsettings = mysqli_fetch_assoc($getsettings))
{
   $settings[$rowsettings['config_type']] = stripslashes($rowsettings['config_val']);
}

?>
