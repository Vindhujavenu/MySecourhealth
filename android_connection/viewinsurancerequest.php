<?php
include("connection.php");
$response=array();
$lid=$_GET['lid'];
$qry=mysql_query("select * ");
if(mysql_num_rows($qry)>0)
{
	$response["status"]="1";
	$response["result"]=array();
	while($b=mysql_fetch_array($qry))
	{
		$arr=array();
		$arr[""]=$b[];
		$arr[""]=$b[];
		array_push($response["result"],$arr);
	}
}
else
{
	$response["status"]="0";
}
echo json_encode($response);
?>