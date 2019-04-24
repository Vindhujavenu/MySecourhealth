<?php
include("connection.php");
$username=$_GET['username'];
$password=$_GET['password'];

$response=array();
$res=mysql_query("select login.*,asha_worker.*,panchayath.name from login,asha_worker,panchayath where (login.username='$username' and login.password='$password') and login.logid=asha_worker.log_id and asha_worker.p_id=panchayath.p_id ");
if(mysql_num_rows($res)>0)
{
	$response["status"]="1";
	$res1=mysql_fetch_array($res);
	$lid=$res1[0];
	$response["lid"]=$lid;
	$response["uname"]=$res1['username'];
	$response["pwd"]=$res1['password'];
	$response["name"]=$res1[2];
	$response["place"]=$res1[7];
	$response["post"]=$res1[8];
	$response["age"]=$res1[9];
	$response["ward_no"]=$res1[11];
	$response["email"]=$res1[13];
	$response["phone"]=$res1[14];
	$response["photo"]=$res1[12];
	$response["pid"]=$res1[10];
	$response["pname"]=$res1[15];
	
}
else
{
	$response["status"]="0";
}
echo json_encode($response);

?>