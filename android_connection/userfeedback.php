<?php
include("connection.php");
$feedback=$_GET['feedback'];
$lid=$_GET['lid'];
$gid=$_GET['gid'];
$response=array();
$gry=mysql_query("insert into feedback(log_id,feedback,date)values('$lid','$feedback',curdate())");
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