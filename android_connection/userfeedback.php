<?php
include("connection.php");
$response=array();
$feedback=$_GET['feedback'];
$lid=$_GET['lid'];

$res=mysql_query("insert into feedback values(null,'$lid','$feedback',curdate())");
if($res>0)
{
	$response["status"]="1";
}
else
{
	$response["status"]="0";
}
echo json_encode($response);
?>