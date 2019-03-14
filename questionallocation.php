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
		 return flag;
   }
   </script>
<body>
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1">
    <tr>
      <td height="37">Survey</td>
      <td><label for="select"></label>
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
        
      </select></td>
       <td><div style="visibility:hidden" id="a"><font color="#FF0000">Invalid Entry!!!</font></div></td>
    </tr>
  </table>
  <table width="200" border="1">
    <tr>
      <td>Sl.no</td>
      <td>Question</td>
      <td>&nbsp;</td>
    </tr>
    <?php
	include("connection.php");
	$i=1;
	$res=mysql_query("select * from question");
	while($res1=mysql_fetch_array($res))
	{
		
	?>
    <tr>
      <td><?php echo $i++ ?></td>
      <td><?php echo $res1[1] ?></td> 
       <td><input type="checkbox" name="checkbox[]" id="checkbox" value="<?php echo $res1[0] ?>"/>
      <label for="checkbox"></label></td>
   
    </tr>
     <?php
	}
	?>
    <tr>
      <td colspan="3"><div align="center">
        <input type="submit" name="button" id="button" value="Allocate" />
      </div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
</body>
</html>
<?php
if(isset($_POST['button']))
{
	
	$sid=$_POST['select'];
	$qid=$_POST['checkbox'];
	for($i=0;$i<sizeof($qid);$i++)
	{
	mysql_query("insert into survey_question values(null,'$qid[$i]','$sid')");
	}
}
	?>