<?php
include("connection.php");
$filename=$_GET['filename'];
$file=$_GET['file'];
$details=$_GET['details'];
$lid=$_GET['lid'];
$did=$_GET['did'];
$reply=$_GET['reply'];
$response=array();
$qry=mysql_query("insert into medical_record(mbr_id,file_name,file,details,date,d_id,reply)values('$lid','$filename','$file','$details','curdate()','$did','$reply')");
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