<?php

include("connection.php");
include("des_en.php");
$surveyID=$_GET["sid"];
$files = array();

foreach (glob("survey_files/".$surveyID."_*") as $filename) {
	
	$file_contents=file_get_contents($filename);
	
	$des = new des();
	$key=$des->des_key_generation();
	$decrypted=$des->decrypt($key,$file_contents);

	$decoded = json_decode(trim($decrypted), true);
	$ans=$decoded['answer'];
	//echo "===".$decoded."===";
	foreach( $ans as $answer){
		
		$alid=$answer['asha_lid'];
		$sqid=$answer['sq_id'];
		$mid=$answer['member_id'];
		$ans=$answer['answer'];
		$res=mysql_query("select * from  survey_answer where sq_id='$sqid' and mbr_id='$mid'");
		if(mysql_num_rows($res)==0){
			$k=mysql_query("insert into survey_answer(sq_id,answer,mbr_id,asha_lid,date) values('$sqid','$ans','$mid','$alid',curdate())");	
		}
	}
}
?>
<script>
    alert("published..!!");
    window.location="view_survey.php";
</script>