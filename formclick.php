<?php
include("connection.php");
$msg=$_GET['c'];
$tid=$_GET['did'];
session_start();
$frmid=$_SESSION['lid'];
//echo "insert into chat values( null,'$msg','$frmid','$tid',now())";
mysql_query("insert into chat values( null,'$msg','$frmid','$tid',now())");
?>


