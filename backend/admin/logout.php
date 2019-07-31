<?php
include("config/connect.php");
unset($_SESSION['admin_id']);
unset($_SESSION['admin_username']);
setcookie("AdminCookie",'',time());
header("location:index.php");
?>