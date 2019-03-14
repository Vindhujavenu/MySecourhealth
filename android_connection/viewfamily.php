<?php
include("connection.php");
$response=array();
$lid=$_GET['lid'];
$qry=mysql_query("select * from family where log_id='$lid'");
if(mysql_num_rows($qry)>0)
{
	$response["status"]="1";
	$response["result"]=array();
	while($b=mysql_fetch_array($qry))
	{
		$arr=array();
		$arr["house_no"]=$res1[1];
		$arr["house_name"]=$res1[2];
		$arr["owner_name"]=$res1[3];
		$arr["annual_income"]=$res1[4];
		$arr["no_of_members"]=$res1[5];
		array_push($response["result"],$arr);
}
}
else
{
		$response["status"]="0";
}
echo json_encode($response);
?>
