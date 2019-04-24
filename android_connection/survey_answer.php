<?php
 
include("connection.php");
$response=array();
$sqid=$_GET['sqid'];
$answer=$_GET['answer'];
$mbrid=$_GET['mbrid'];
$alid=$_GET['alid'];

$res=mysql_query("select * from  survey_answer where sq_id='$sqid' and mbr_id='$mbrid'");
if(mysql_num_rows($res)<=0)
{

$i=mysql_query("insert into survey_answer(sq_id,answer,mbr_id,asha_lid,date) values('$sqid','$answer','$mbrid','$alid',curdate())");
}

if($i>0)
{
	$response["status"]="1";
}
else
{
	$response["status"]="0";
}
echo json_encode($response);
?>