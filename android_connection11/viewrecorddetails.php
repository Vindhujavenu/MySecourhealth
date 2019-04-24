<?php
include("connection.php");
$response=array();
$lid=$_GET['$lid'];

$qry=mysql_query("select medical_record.*,doctor.doctor_name from doctor,medical_record where doctor.log_id=medical_record.d_id and medical_record.mbr_id='$lid'");
if(mysql_num_rows($qry)>0)
{
	$response["status"]="1";
	$response["result"]=array();
	while($b=mysql_fetch_array($qry))
	{
		$arr=array();
		$arr["filename"]=$res1[2];
		$arr["file"]=$res1[3];
		$arr["details"]=$res1[4];
		$arr["date"]=$res1[5];
		$arr["reply"]=$res1[7];
		array_push($response["result"],$arr);
	}
}
else
{
	$response["status"]="0";
}
echo json_encode($response);

?>