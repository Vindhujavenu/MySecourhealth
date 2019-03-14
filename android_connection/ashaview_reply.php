<?php
include("connection.php");
$response=array();
$lid=$_GET['lid'];
$qry=mysql_query("select * from complaint where log_id='$lid'");
if(mysql_num_rows($qry)>0)
{
	$response["status"]="1";
	$response["result"]=array();
	while($b=mysql_fetch_array($qry))
	{
		$arr=array();
		$arr["reply"]=$b[4];
		$arr["date"]=$b[5];
		array_push($response["result"],$arr);
	}
}
else
{
	$response["status"]="0";
}
echo json_encode($response);
?>