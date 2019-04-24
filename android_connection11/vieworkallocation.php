<?php
include("connection.php");
$response=array();
$lid=$_GET['lid'];
$qry=mysql_query("select survey.* from survey,asha_wrk_alloctn where asha_wrk_alloctn.s_id=survey.s_id and asha_wrk_alloctn.asha_id='$lid' ");
if(mysql_num_rows($qry)>0)
{
	$response['status']="1";
	$response["result"]=array();
	while($b=mysql_fetch_array($qry))
	{
		$arr=array();
		$arr["name"]=$b[1];
		$arr["details"]=$b[2];
		array_push($response["result"],$arr);
	}
	
}
else
{
	$response['status']="0";
}
echo json_encode($response);

 ?>
