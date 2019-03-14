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
	    if(document.getElementById("pname").value=="")
	{
            flag=false;
            document.getElementById("a").style.visibility="visible";
    	
 	}
	else
        {
            document.getElementById("a").style.visibility="hidden";
        }
		if(/[^a-z\s]/gi.test(document.getElementById("pname").value))
	{
		alert("Special characters are not allowed in name");
		document.getElementById("a").focus();
		return false;
	}
		  return flag;
   }
</script>
<body>
<form id="form1" name="form1" method="post" action="">
  <table width="397" border="1">
    <tr>
      <td width="131" height="62">Panchayath-Name</td>
      <td width="167"><label for="pname"></label>
      <input type="text" name="pname" id="pname" /></td>
       <td width="77"><div style="visibility:hidden" id="a"><font color="#FF0000">Invalid Entry!!!</font></div></td>
    </tr>
    <tr>
      <td height="94" colspan="2"><div align="center">
        <input type="submit" name="submit" id="submit" value="Register" onclick="return valid()" />
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	include("connection.php");
	$pname=$_POST['pname'];
	$qry=mysql_query("insert into panchayath values(null,'$pname')");
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