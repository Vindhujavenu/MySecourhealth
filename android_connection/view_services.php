<?php
include("connection.php");
$response=array();
$res=mysql_query("select * from health_service order by  hs_id desc");
if(mysql_num_rows($res)>0)
{
	$response["status"]="1";
	$response["result"]=array();
	while($res1=mysql_fetch_array($res))

	{						
		$arr=array();
		
		$arr["sub"]=$res1[1];
		$arr["det"]=$res1[2];
		
		
		array_push($response["result"],$arr);
		
	}
	
}
else
{
	$response["status"]="0";
}
echo json_encode($response);

?>