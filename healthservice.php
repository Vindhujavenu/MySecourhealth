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
             if(document.getElementById("subject").value=="")
	{
            flag=false;
            document.getElementById("a").style.visibility="visible";
    	
 	}
        else
        {
            document.getElementById("a").style.visibility="hidden";
        }
		    if(document.getElementById("details").value=="")
	{
            flag=false;
            document.getElementById("b").style.visibility="visible";
    	
 	}
        else
        {
            document.getElementById("b").style.visibility="hidden";
        }
			   return flag;
   }
</script>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="375" height="116" border="1">
    <tr>
      <td width="72"><div align="center">Subject</div></td>
      <td width="287"><label for="textfield"></label>
      <input type="text" name="subject" id="subject" /></td>
      <td width="141"><div style="visibility:hidden" id="a"><font color="#FF0000">Invalid Entry!!!</font></div></td>
    </tr>
    <tr>
    <td height="46"><div align="center">Details</div></td>
    <td><label for="textarea"></label>
      <textarea name="details" id="details" cols="45" rows="5"></textarea></td>
    <td width="141"><div style="visibility:hidden" id="b"><font color="#FF0000">Invalid Entry!!!</font></div></td>
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
	include("connection.php");
	$subject=$_POST['subject'];
	$details=$_POST['details'];
	$qry=mysql_query("insert into health_service values(null,'$subject','$details')");
	if($qry>0)
	{
		?>
        <script>
		alert("sucessfully");
		window.location="adminhome.php";
		</script>
        <?php
	} 
	}

?>