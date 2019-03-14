<?php
include("connection.php");
$id=$_GET['id'];
$i=mysql_query("delete from panchayath where p_id='$id'");
if($i>0)
{
?>
<script>
alert("delete sucessfully");
window.location="viewpanchayath.php";
</script>
<?php
}
?>