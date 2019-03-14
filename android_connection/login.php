<?php
include("connection.php");
$uname=$_GET['uname'];
$pwd=$_GET['pwd'];

$response=array();
$qry=mysql_query("select * from login where username='$uname' and password='$pwd'");
if(mysql_num_rows($qry)>0)
{
	$response['status']="1";
	$b=mysql_fetch_array($qry);
	$response['lid']=$b[0];
	$response['type']=$b[3];
}
else
{
	$response['status']="0";
}
echo json_encode($response);

 ?>