<?php
include("connection.php");
$pid=$_GET['pid'];
$houseno=$_GET['houseno'];
$housena=$_GET['housena'];
$owner=$_GET['owner'];
$income=$_GET['income'];
$members=$_GET['members'];
$lid=$_GET['lid'];
$response=array();
$qry=mysql_query("insert into family(house_no,house_name,owner_name,annual_income,no_of_members,pid,log_id)values('$houseno','$housena','$owner','$income','$members','$pid','$lid')");
if(qry>0)
{
$response['status']="1";	
}
else
{
	$response['status']="0";
}
echo json_encode($response);
?>