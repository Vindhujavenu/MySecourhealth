<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="274" height="117" border="1">
    <tr>
      <td width="44">SlNo</td>
      <td width="63">Subject</td>
      <td width="56">Details</td>
      <td width="52">&nbsp;</td>
    </tr>
    <tr>
      
    </tr>
    <?php
	include("connection.php");
	$i=0;
	$res=mysql_query("select * from health_service");
	while($res1=mysql_fetch_array($res))
	{
		$i++;
	?>
    <tr>
      <td height="102"><div align="center"><?php echo $i ?></div></td>
      <td><div align="center"><?php echo $res1[1] ?></div></td>
      <td><div align="center"><?php echo $res1[2] ?></div></td>
      
      <td><a href="deletehealthservice.php?id=<?php echo $res1[0]?> ">delete</a></td>
      </tr>
    <?php
	}
	?>
  </table>
</form>
</body>
</html>