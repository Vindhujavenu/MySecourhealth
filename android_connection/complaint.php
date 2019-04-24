<?php
include("connection.php");
$response=array();
$complaint=$_GET['complaint'];
$lid=$_GET['lid'];

$res=mysql_query("insert into complaint(log_id,complaints,date,reply,rdate)values('$lid','$complaint',curdate(),'pending','pending')");
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