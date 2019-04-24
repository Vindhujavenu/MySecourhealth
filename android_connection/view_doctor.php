<?php
include("connection.php");
$response=array();
$qry=mysql_query("select department.dptname,doctor.* from doctor,department where department.dpt_id=doctor.dpt_id ");
if(mysql_num_rows($qry)>0)
{
	$response["status"]="1";
	$response["result"]=array();
	while($b=mysql_fetch_array($qry))
	{
		$arr=array();
		$arr["lid"]=$b[2];
		$arr["name"]=$b[4];
		$arr["dept"]=$b[0];
		$arr["phone"]=$b[11];
		array_push($response["result"],$arr);
	}
}
else
{
	$response["status"]="0";
}
echo json_encode($response);


?>