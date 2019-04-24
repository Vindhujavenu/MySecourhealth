<?php
include("connection.php");
$response=array();
$qry=mysql_query("select * from health_insurance");
if(mysql_num_rows($qry)>0)
{
	$response["status"]="1";
	$response["result"]=array();
	while($b=mysql_fetch_array($qry))
	{
		$arr=array();
		$arr["policy"]=$b[1];
		$arr["file"]=$b[2];
		$arr["date"]=$b[3];
		$arr["id"]=$b[0];
		array_push($response["result"],$arr);
	}
}
else
{
	$response["status"]="0";
}
echo json_encode($response);

?>