<?php
include("connection.php");
$response=array();
$lid=$_GET['lid'];
$res=mysql_query("select * from complaint where log_id='$lid' order by c_id desc");
if(mysql_num_rows($res)>0)
{
	$response["status"]="1";
	$response["result"]=array();
	while($res1=mysql_fetch_array($res))

	{						
		$arr=array();
		$arr["c_id"]=$res1['c_id'];
		$arr["complaints"]=$res1['complaints'];
		$arr["date"]=$res1['date'];
		$arr["reply"]=$res1['reply'];
		$arr["rdate"]=$res1['rdate'];
		
		
		array_push($response["result"],$arr);
		
	}
	
}
else
{
	$response["status"]="0";
}
echo json_encode($response);

?>