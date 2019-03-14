<?php
include("connection.php");
$id=$_GET['id'];
$i=mysql_query("delete from health_service where hs_id='$id'");
if($i>0)
{
?>
<script>
alert("delete sucessfully");
window.location="viewhealthservice.php";
</script>
<?php
}
?>