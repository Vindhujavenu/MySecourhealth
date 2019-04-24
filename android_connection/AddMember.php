<?php
include("connection.php");
$response=array();
$fid=$_GET['fid'];
$name=$_GET['name'];
$age=$_GET['age'];
$gender=$_GET['gender'];
$relation=$_GET['relation'];
$adhar_no=$_GET['adhar_no'];
$res=mysql_query("insert into member(f_id,name,age,gender,relation,adhar_no)values('$fid','$name','$age','$gender','$relation','$adhar_no')");
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