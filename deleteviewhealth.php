<?php
include("connection.php");
$id=$_GET['id'];
$i=mysql_query("delete from health_insurance where hid='$id'");
if($i>0)
{
?>
<script>
alert("delete sucessfully");
window.location="viewhealthinsurance.php";
</script>
<?php
}
?>