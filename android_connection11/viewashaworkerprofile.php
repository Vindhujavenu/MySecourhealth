<?php
include("connection.php");
//$name=$_GET['name'];
//$place=$_GET['place'];
//$post=$_GET['post'];
//$age=$_GET['age'];
//$pid=$_GET['pid'];
//$wardno=$_GET['wardno'];
//$adharno=$_GET['adharno'];
//$photo=$_GET['photo'];
//$phone=$_GET['phone'];

$lid=$_GET['lid'];
$lid="6";
$response=array();
$qry=mysql_query("select * from asha_worker where log_id='$lid'");
if(mysql_num_rows($qry)>0)
{
	$response['status']="1";
	$b=mysql_fetch_array($qry);
	$response['lid']=$b[1];
	$response['name']=$b[2];
	$response['place']=$b[3];
	$response['post']=$b[4];
	$response['age']=$b[5];
	$response['pid']=$b[6];
	$response['wardno']=$b[7];
	$response['adharno']=$b[8];
	$response['photo']=$b[9];
	$response['phone']=$b[10];
	$response['email']=$b[11];
}
else
{
	$response['status']="0";
}
echo json_encode($response);

 ?>