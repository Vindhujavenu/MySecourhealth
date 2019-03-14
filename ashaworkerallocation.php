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
             if(document.getElementById("select").value=="-1")
	{
            flag=false;
            document.getElementById("a").style.visibility="visible";
    	
 	}
        else
        {
            document.getElementById("a").style.visibility="hidden";
        }
		if(document.getElementById("select2").value=="-1")
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
  <table width="405" border="1">
    <tr>
      <td width="136"><div align="center">Survey</div></td>
      <td width="86"><div align="center">
        <select name="select" id="select">
         <option value="-1">select</option>
          <?php
		include("connection.php");
		$a=mysql_query("select * from survey");
		while($b=mysql_fetch_array($a))
		{
		
		?>
          <option value="<?php echo $b[0]?>"><?php echo $b[1]?></option>
          <?php
		}
		?>
        </select>
        <td width="116"><div style="visibility:hidden" id="a"><font color="#FF0000">Invalid Entry!!!</font></div></td>
      
      <label for="checkbox"></label>
    </tr>
    <tr>
      <td><div align="center">Asha-Worker</div></td>
      <td><label for="select"></label>
        <label for="select2"></label>
        <div align="center">
          <select name="select2" id="select2">
           <option value="-1">select</option>
           <?php
	
		$a=mysql_query("select * from asha_worker");
		while($b=mysql_fetch_array($a))
		{
		
		?>
          <option value="<?php echo $b[0]?>"><?php echo $b[2]?></option>
          <?php
		}
		?>
          </select>
          
      </div></td>
      <td width="116"><div style="visibility:hidden" id="b"><font color="#FF0000">Invalid Entry!!!</font></div></td>
    </tr>
  </table>
  <table width="405" height="64" border="1">
    <tr>
      <td width="383"><div align="center">
        <input type="submit" name="button" id="button" value="Submit" onclick="return valid()" />
      </div></td>
    </tr>
  </table>
  <p align="left">&nbsp;</p>
</form>
</body>
</html>
<?php
if(isset($_POST['button']))
{
	include("connection.php");
	$select=$_POST['select'];
	$select2=$_POST['select2'];
	
	$qry=mysql_query("insert into asha_wrk_alloctn values(null,'$select2','$select')"); 
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