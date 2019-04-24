<?php
include("connection.php");
$response=array();
$res=mysql_query("select * from family");
if(mysql_num_rows($res)>0)
{
	$response["status"]="1";
	$response["result"]=array();
	while($res1=mysql_fetch_array($res))
	
	
	
	{
										
		$arr=array();
		$arr["fid"]=$res1['f_id'];
		$arr["house_no"]=$res1['house_no'];
		$arr["house_name"]=$res1['house_name'];
		$arr["owner_name"]=$res1['owner_name'];
		$arr["annual_income"]=$res1['annual_income'];
		$arr["no_of_members"]=$res1['no_of_members'];
		$arr["pid"]=$res1['pid'];
		
		array_push($response["result"],$arr);
		
	}
	
}
else
{
	$response["status"]="0";
}
echo json_encode($response);

?>