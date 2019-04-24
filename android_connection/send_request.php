<?php
include("connection.php");
$response=array();
$lid=$_GET['lid'];
$hid=$_GET['hid'];
$res=mysql_query("insert into health_insurance_application values(null,'$lid',curdate(),curtime(),'pending','$hid')");
if($res>0)
{
  $response["status"]=1;
}
else
{
 $response["status"]=0;
 }
echo json_encode($response);
?>