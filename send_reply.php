<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
include("header.php");
?>
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
  <table width="296" height="110" border="0" align="center">
    <tr>
      <td width="35" height="70">Reply</td>
      <td width="144"><label for="textfield"></label>
      <input type="text" name="reply" id="reply"  /></td>
      <td width="103"><div style="visibility:hidden" id="a"><font color="#FF0000">Invalid Entry!!!</font></div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="button" id="button" value="Submit" onclick="return valid()" />
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
	$i=mysql_query("update complaint set reply='$reply',rdate=curdate() where c_id='$id'");
	if($i>0)
{
?>
<script>
alert("update sucessful");
window.location="asha_comp.php";
</script>


<?php
	}
}

	?>
	<?php
include("footer.php");
?>
	