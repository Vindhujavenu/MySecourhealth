<?php
include("connection.php");
$response=array();

$lid=$_GET['lid'];
$hid=$_GET['hid'];
$qry=mysql_query("select family.*,health_insurance_application.* from family,health_insurance_application,asha_worker,member where asha_worker.log_id='$lid' and asha_worker.p_id=family.pid and health_insurance_application.hid='$hid' and health_insurance_application.status='pending' and health_insurance_application.log_id=member.log_id and member.f_id=family.f_id");
if(mysql_num_rows($qry)>0)
{
	$response["status"]="1";
	$response["result"]=array();
	while($b=mysql_fetch_array($qry))
	{
		$arr=array();
		$arr["name"]=$b[3];
		$arr["income"]=$b[4];
		$arr["members"]=$b[5];
		$arr["rid"]=$b[8];
		array_push($response["result"],$arr);
	}
}
else
{
	$response["status"]="0";
}
echo json_encode($response);

?>