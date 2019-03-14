<?php
include("connection.php");

$hid=$_GET['hid'];
$lid=$_GET['lid'];
$response=array();
$a=mysql_query("select * from health_insurance_application where log_id='$lid' and hid='$hid'");
if(mysql_num_rows($a)>0)
{
	$response['status']="exist";
}
else
{
$qry=mysql_query("insert into health_insurance_application(log_id,date,time,hid)values('$lid',curdate(),curtime(),$hid)");
if($qry>0)
{
	$response['status']="1";
}
else
{
	$response['status']="0";
}
}
echo json_encode($response);
?>