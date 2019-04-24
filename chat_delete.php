<?php
include("connection.php");
$cid=$_GET['cid'];
mysql_query("delete from chat where chat_id='$cid'");
?>
