<?php
include("connection.php");
$complaint=$_GET['complaint'];
$lid=$_GET['lid'];
$response=array();

$qry=mysql_query("insert into complaint(log_id,complaints,date)values('$lid','$complaint',curdate())");
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