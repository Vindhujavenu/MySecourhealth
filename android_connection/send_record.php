<?php
include("connection.php");
$response=array();
$fname=$_POST['fname'];
$des=$_POST['des'];
$did=$_POST['did'];
$image=$_FILES['pic']['name'];
$lid=$_POST['lid'];
move_uploaded_file($_FILES['pic']['tmp_name'],"../medical_records/".$image);

$res=mysql_query("insert into medical_record values(null,'$lid','$fname','$image','$des',curdate(),'$did','pending')");
if($res>0)
{
  $response["success"]=1;
}
else
{
 $response["success"]=0;
 }
echo json_encode($response);
?>