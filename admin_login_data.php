<?php
session_start();
include_once("functions.php");
include_once("config.php");
$admin_id=protect_anything($_POST['admin_id']);
$admin_password=protect_anything($_POST['admin_password']);
if($admin_id=="ryder@onymail.com" && $admin_password=="1234567T")
{
	$_SESSION["Adminid"]="ryder@onymail.com";
	echo "11";
	return;
}
else
{
	echo "0";
	return;
}
?>