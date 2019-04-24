<?php
include("connection.php");
$response=array();
$qry=mysql_query("select * from panchayath");
if(mysql_num_rows($qry)>0)
{
	$response["status"]="1";
	$response["result"]=array();
	while($b=mysql_fetch_array($qry))
	{
		$arr=array();
		$arr['pname']=$b['name'];
		$arr['pid']=$b['p_id'];
		array_push($response["result"],$arr);
	}
}
else
{
	$response["status"]="0";
}
echo json_encode($response);
?>

