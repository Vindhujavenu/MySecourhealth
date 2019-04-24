<?php
include("connection.php");
$response=array();
$lid=$_GET['lid'];
//$lid="63";
$res=mysql_query("select asha_wrk_alloctn.*,survey.* from asha_wrk_alloctn,survey,asha_worker where asha_wrk_alloctn.s_id=survey.s_id and asha_worker.log_id='$lid' and asha_worker.log_id=asha_wrk_alloctn.asha_id");
if(mysql_num_rows($res)>0)
{
	$response["status"]="1";
	$response["result"]=array();
	while($res1=mysql_fetch_array($res))
 												
	{						
		$arr=array();
		$arr["acn_id"]=$res1['acn_id'];
		$arr["ashaid"]=$res1['asha_id'];
		$arr["sid"]=$res1[2];
		$arr["sname"]=$res1['survey_name'];
		$arr["det"]=$res1['details'];
		
		
		array_push($response["result"],$arr);
		
	}
	
}
else
{
	$response["status"]="0";
}
echo json_encode($response);

?>