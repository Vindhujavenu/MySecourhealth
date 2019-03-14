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
             if(document.getElementById("policy").value=="")
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
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="200" border="1">
    <tr>
      <td>Policy</td>
      <td><label for="textfield"></label>
      <input type="text" name="policy" id="policy" /></td>
       <td><div style="visibility:hidden" id="a"><font color="#FF0000">Invalid Entry!!!</font></div></td>
    </tr>
    <tr>
      <td>File</td>
      <td><label for="textfield2"></label>
        <label for="fileField"></label>
      <input type="file" name="fileField" id="fileField" /></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="button" id="button" value="Submit" onclick="return valid()"/>
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
	$policy=$_POST['policy'];
	$file=$_FILES['fileField']['name'];
	move_uploaded_file($_FILES['fileField']['tmp_name'],"file/".$file);
	$qry=mysql_query("insert into health_insurance values(null,'$policy','$file',curdate())");
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