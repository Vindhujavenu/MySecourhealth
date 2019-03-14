<?php
include("connection.php");
$response=array();
$fid=$_GET['fid'];
$qry=mysql_query("select * from member where f_id='$fid'");
if(mysql_num_rows($qry)>0)
{
	$response["status"]="1";
	$response["result"]=array();
	while($b=mysql_fetch_array($qry))
	{
		$arr=array();
		$arr["name"]=$res1[2];
		$arr["age"]=$res1[3];
		$arr["gender"]=$res1[4];
		$arr["relation"]=$res1[5];
		$arr["adhar_no"]=$res1[6];
		array_push($response["result"],$arr);
	}
}
else
{
	$response["status"]="0";
}
echo json_encode($response)
?>