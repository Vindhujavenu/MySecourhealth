<?php
include("connection.php");
$lid=$_GET['lid'];
//$lid="63";
$response=array();
$res=mysql_query("select asha_worker.*,panchayath.name from asha_worker,panchayath where panchayath.p_id=asha_worker.p_id and log_id='$lid' ");
if($res>0)
{
	$response["status"]="1";
	$res1=mysql_fetch_array($res);
	$response["lid"]=$res1["log_id"];
	$response["name"]=$res1[2];
	$response["place"]=$res1["place"];
	$response["post"]=$res1["post"];
	$response["age"]=$res1["age"];
	$response["ward_no"]=$res1["ward_no"];
	$response["email"]=$res1["email"];
	$response["phone"]=$res1["phone"];
	$response["photo"]=$res1["photo"];
	$response["pname"]=$res1[11];
	
	
	
}
else
{
	$response["status"]="0";
}
echo json_encode($response);

?>