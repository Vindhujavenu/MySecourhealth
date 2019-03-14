<?php
include("connection.php");
$lid=$_GET['lid'];
$hid=$_GET['hid'];

$response=array();
$res=mysql_query("select * from health_insurance_application where log_id='$lid' and hid='$hid'");
if(mysql_num_rows($res)>0)
{
	$response['status']="2";
}
else
{
$qry=mysql_query("insert into health_insurance_application(log_id,date,time,status,hid)values('$lid',curate(),curtime(),'pending','$hid')");
if($qry>0)
{
$response['status']="1";	
}
else
{
	$response['status']="0";
}}
echo json_encode($response);
?>