<?php
include("connection.php");
$lid=$_GET['lid'];
$type=$_GET['type'];
//$type="ashaworker";
//$lid="37";
$response=array();
$res="";
if($type=="ashaworker")
{
$res=mysql_query("select p_id from asha_worker where log_id='$lid'");
}
if($type=="member")
{
$res=mysql_query("select family.pid from family,member where member.f_id=family.f_id and member.log_id='$lid'");

}


if(mysql_num_rows($res)>0)
{
	$response["status"]="1";
	$res1=mysql_fetch_array($res);
	
	
	$response["pid"]=$res1[0];
	
	
}
else
{
	$response["status"]="0";
}
echo json_encode($response);

?>