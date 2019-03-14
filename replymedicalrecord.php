<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<script type="text/javascript">
         function valid()
        {
            
            var flag=true;
             if(document.getElementById("reply").value=="")
	{
            flag=false;
            document.getElementById("a").style.visibility="visible";
    	
 	}
        else
        {
            document.getElementById("a").style.visibility="hidden";
        }
		return flag;
		}
		</script>
<?php
include("connection.php");
$id=$_GET['id'];
?>
<body>
<form id="form1" name="form1" method="post" action="">
  <table width="239" border="1">
    <tr>
      <td width="79"><div align="center">Reply</div></td>
      <td width="144"><label for="textfield"></label>
      <input type="text" name="reply" id="reply" /></td>
       <td width="103"><div style="visibility:hidden" id="a"><font color="#FF0000">Invalid Entry!!!</font></div></td>
    </tr>
    <tr>
      <td height="89" colspan="2"><div align="center">
        <input type="submit" name="button" id="button" value="Submit"  onclick="return valid()" />
        
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>
<?php
if(isset($_POST['button']))
{
	$reply=$_POST['reply'];
	$i=mysql_query("update medical_record set reply='$reply',d_id='1' where mr_id='$id'");
	if($i>0)
	{
		?>
        <?php
	}}
	?>
	
