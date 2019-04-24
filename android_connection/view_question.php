<?php
include("connection.php");
$response=array();
$sid=$_GET['sid'];
$res=mysql_query("select question.*,survey_question.* from question,survey_question where question.q_id=survey_question.q_id and survey_question.s_id='$sid'");
if(mysql_num_rows($res)>0)
{
	$response["status"]="1";
	$response["result"]=array();
	while($res1=mysql_fetch_array($res))

	{
										
		$arr=array();
		$arr["q_id"]=$res1[0];
		$arr["ques"]=$res1[1];
		$arr["sqid"]=$res1[2];
	
		array_push($response["result"],$arr);
		
	}
	
}
else
{
	$response["status"]="0";
}
echo json_encode($response);

?>