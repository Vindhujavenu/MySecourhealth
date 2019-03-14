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
             if(document.getElementById("question").value=="")
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
<body>
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1">
    <tr>
      <td>Question</td>
      <td><label for="question"></label>
      <input type="text" name="question" id="question" /></td>
      <td><div style="visibility:hidden" id="a"><font color="#FF0000">Invalid Entry!!!</font></div>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="submit" id="submit" value="Submit" onclick="return valid()" />
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
	$question=$_POST['question'];
	$qry=mysql_query("insert into question values(null,'$question')");
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