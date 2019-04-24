<?php
$lid=$_GET['lid'];
$userid=$_GET['userid'];
$message=$_GET['message'];
$response=array();
include("connection.php");
if(mysql_query("insert into chat values(null,'$message','$lid','$userid',curdate())"))
{
	$response["status"]="1";
}
else
{
	$response["status"]="error";
}
echo json_encode($response);
?>