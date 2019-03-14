<?php
include("connection.php");
$lid=$_GET['lid'];
$qry=mysql_query("select health_insurance.policy,health_insurance_application.status from health_insurance,health_insurance_application where health_insurance.hid=health_insurance_application.hid and health_insurance_application.log_id='$lid'");
if(mysql_num_rows($qry)>0)
{
	$response["status"]="1";
	$response["result"]=array();
	while($b=mysql_fetch_array($qry))
	{
		$arr=array();
		$arr["policy"]=$b[0];
		$arr["status"]=$b[1];
		array_push($response["result"],$arr);
	}
	
}
else
{
	$response["status"]="0";
}
echo json_encode($response);
?>