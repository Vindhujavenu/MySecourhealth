<?php
include("connection.php");
$type=$_GET['type'];
$rid=$_GET['rid'];

$response=array();


$qry=mysql_query("update health_insurance_application set status='$type' where appid='$rid'");
if($qry>0)
{
$response['status']="1";	
}
else
{
	$response['status']="0";
}
echo json_encode($response);
?>