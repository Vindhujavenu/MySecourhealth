<?php
include("connection.php");
$qid=$_GET['qid'];
//$qid="2";
$response=array();


$res=mysql_query("SELECT COUNT(`sa_id`) FROM `survey_answer` WHERE `survey_answer`.`sq_id`='$qid' AND `answer`='yes'");
  
            if(mysql_num_rows($res)>0){
				$row=mysql_fetch_array($res);
				{
				$ycount=$row[0];
				$response["status"]="1";
				$response["yes"]=$ycount;
				
				}
				}
				
				
				 $re=mysql_query("SELECT COUNT(`sa_id`) FROM `survey_answer` WHERE `survey_answer`.`sq_id`='$qid' AND `answer`='no'");
  
            if(mysql_num_rows($re)>0){
				$ro=mysql_fetch_array($re);
				{
				$ncount=$ro[0];
				$response["no"]=$ncount;
				}
				}
				echo json_encode($response);

?>