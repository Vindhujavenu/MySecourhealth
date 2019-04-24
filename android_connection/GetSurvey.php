<?php
include("connection.php");
$ashid=$_GET['ashid'];
$response=array();
$res=mysql_query("select * from survey,asha_wrk_alloctn where survey.s_id=asha_wrk_alloctn.s_id and asha_id='$ashid'");
if(mysql_num_rows($res)>0)
{
	$response["status"]="1";
	$response["result"]=array();
	while($res1=mysql_fetch_array($res))
	
	
	
	{
		$arr=array();
		$arr["s_id"]=$res1['s_id'];
		$arr["survey_name"]=$res1['survey_name'];
		$arr["details"]=$res1['details'];
		
		array_push($response["result"],$arr);
		
	}
	
}
else
{
	$response["status"]="0";
}
echo json_encode($response);

?>