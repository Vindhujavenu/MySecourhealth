<?php
include("connection.php");
include("des_en.php");
$response=array();
$image=$_FILES['ansFile']['name'];
move_uploaded_file($_FILES['ansFile']['tmp_name'],"../enc/".$image);
$contents=file_get_contents("C:\\wamp\\www\\nehru\\secourhealth\\enc\\".$image);
$des = new des();
				$key=$des->des_key_generation();
				$encoded_key=base64_encode($key);
		 		$encrypted=$des->encrypt($key, $contents);
				//$value1=$des->decrypt("bhjbhjn", $value);
file_put_contents("C:\\wamp\\www\\nehru\\secourhealth\\survey_files\\".$image,$encrypted);
 $response["status"]="ok";

echo $image;
?>