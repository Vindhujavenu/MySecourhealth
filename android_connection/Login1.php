<?php
include("connection.php");
$username=$_GET['username'];
$password=$_GET['password'];

$response=array();
$res=mysql_query("select * from login where username='$username' and password='$password' ");
if(mysql_num_rows($res)>0)
{
	$response["status"]="1";
	$res1=mysql_fetch_array($res);
	$lid=$res1[0];
	$response["lid"]=$lid;
	$response["type"]=$res1[3];
	

}
else
{
	$response["status"]="0";
}
echo json_encode($response);

?>