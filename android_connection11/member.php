<?php
include("connection.php");
$name=$_GET['name'];
$age=$_GET['age'];
$gender=$_GET['gender'];
$relation=$_GET['relation'];
$email=$_GET['email'];
$phone=$_GET['phone'];

$fid=$_GET['fid'];
$adharno=$_GET['adharno'];;
$response=array();
$qry=mysql_query("insert into login(username,password,type)values('$email','$phone','user')");
$lid=mysql_insert_id();
$qry1=mysql_query("insert into member(f_id,name,age,gender,relation,adhar_no,log_id)values ('$fid','$name','$age','$gender','$relation','$adharno','$lid')");
if($qry1>0)
{
	
	$response['status']="1";
}
else
{
	$response['status']="0";
}
echo json_encode($response);
?>