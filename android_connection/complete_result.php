<?php
include("connection.php");
$sid=$_GET['sid'];
$sname=$_GET['sname'];
//$sid="1";
$response=array();


$res=mysql_query("select count(*) from survey_answer,survey_question where answer='yes' and survey_question.s_id='$sid' and survey_answer.sq_id=survey_question.sq_id");
  
            if(mysql_num_rows($res)>0){
				$row=mysql_fetch_array($res);
				{
				$ycount=$row[0];
				$response["status"]="1";
				$response["yes"]=$ycount;
				
				}
				}
				
				
				 $re=mysql_query("select count(*) from survey_answer,survey_question where answer='no' and survey_question.s_id='$sid' and survey_answer.sq_id=survey_question.sq_id");
  
            if(mysql_num_rows($re)>0){
				$ro=mysql_fetch_array($re);
				{
				$ncount=$ro[0];
				$response["no"]=$ncount;
				}
				}
				echo json_encode($response);

?>