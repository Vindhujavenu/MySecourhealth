<?php
$lid=$_GET['lid'];
$lastinsertedid=$_GET['lastinsert'];
$userid=$_GET['userid'];
include("connection.php");
$v1="select * from chat where chat_id>'$lastinsertedid' AND ((toid='$userid' and  fromid='$lid') or (toid='$lid' and fromid='$userid')  )  order by chat_id asc";
$response=array();
if($a1=mysql_query($v1))
{
	$response["status"]=1;
	$response["data"]=array();
	while($arr=mysql_fetch_array($a1))
	{
		$data=array();
		$data["senduserid"]=$arr[2];
		$data["message"]=$arr[1];
		$data["date"]=$arr[4];
		$data["mid"]=$arr[0];
		array_push($response["data"],$data);
	}
}
else
{
	$response["status"]=0;
}
echo json_encode($response);
?>