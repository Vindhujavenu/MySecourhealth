<?php
include("connection.php");
$response=array();
$qry=mysql_query("select * from survey where s_id in (select distinct  survey_question.s_id from survey_question,survey_answer where survey_question.sq_id=survey_answer.sq_id) ");
if(mysql_num_rows($qry)>0)
{
	$response["status"]="1";
	$response["result"]=array();
	while($b=mysql_fetch_array($qry))
	{
		$arr=array();
		$arr["sid"]=$b[0];
		$arr["sname"]=$b[1];
		$arr["details"]=$b[2];
		array_push($response["result"],$arr);
	}
}
else
{
	$response["status"]="0";
}
echo json_encode($response);

?>