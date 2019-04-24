<?php
include("connection.php");
$response=array();

$lid=$_GET['lid'];
$hid=$_GET['hid'];
//$lid="37";
//$hid="9";
$qry=mysql_query("select family.*,health_insurance_application.* from family,health_insurance_application,asha_worker,member where asha_worker.log_id='$lid' and asha_worker.p_id=family.pid and  family.f_id=member.f_id and health_insurance_application.hid='$hid' and health_insurance_application.status='pending' and health_insurance_application.log_id=member.log_id");
if(mysql_num_rows($qry)>0)
{
	$response["status"]="1";
	$response["result"]=array();
	while($b=mysql_fetch_array($qry))
	{
		$arr=array();
		$arr["hname"]=$b[2];
		$arr["hno"]=$b[1];
		$arr["owner"]=$b[3];
		$arr["rid"]=$b['appid'];
		array_push($response["result"],$arr);
	}
}
else
{
	$response["status"]="0";
}
echo json_encode($response);

?>