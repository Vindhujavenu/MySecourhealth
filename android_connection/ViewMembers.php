<?php
include("connection.php");
$ashid=$_GET['ashid'];
$response=array();
$res=mysql_query("select * from member");
if(mysql_num_rows($res)>0)
{
	$response["status"]="1";
	$response["result"]=array();
	while($res1=mysql_fetch_array($res))
	
	{
										
		$arr=array();
		$arr["mid"]=$res1['mbr_id'];
		$arr["name"]=$res1['name'];
		$arr["age"]=$res1['age'];
		$arr["gender"]=$res1['gender'];
		$arr["relation"]=$res1['relation'];
		$arr["adhar_no"]=$res1['adhar_no'];
		
		
		array_push($response["result"],$arr);
		
	}
	
}
else
{
	$response["status"]="0";
}
echo json_encode($response);

?>