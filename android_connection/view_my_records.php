<?php
include("connection.php");
$response=array();
$lid=$_GET['lid'];
//$lid="25";
$qry=mysql_query("select medical_record.*,doctor.doctor_name from doctor,medical_record where medical_record.d_id=doctor.log_id and medical_record.mbr_id='$lid' order by mr_id desc ");
if(mysql_num_rows($qry)>0)
{
	$response["status"]="1";
	$response["result"]=array();
	while($b=mysql_fetch_array($qry))
	{
		$arr=array();
		$arr["rid"]=$b[0];
		$arr["fname"]=$b[2];
		$arr["file"]=$b[3];
		$arr["details"]=$b[4];
		$arr["date"]=$b[5];
		$arr["doctor"]=$b[8];
		$arr["reply"]=$b[7];
		array_push($response["result"],$arr);
	}
}
else
{
	$response["status"]="0";
}
echo json_encode($response);

?>