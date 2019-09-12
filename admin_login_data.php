<?php
session_start();
include_once("functions.php");
include_once("config.php");
$admin_id=protect_anything($_POST['admin_id']);
$admin_password=protect_anything($_POST['admin_password']);
if($admin_id=="ryder@onymail.com" && $admin_password=="123456bB")
{
	$_SESSION["Adminid"]="tempacc2179@gmail.com";
	echo "11";
	return;
}
else
{
	echo "0";
	return;
}
?>