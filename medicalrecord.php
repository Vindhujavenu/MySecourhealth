<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="384" border="1">
    <tr>
      <td width="47"><div align="center">SlNo</div></td>
      <td width="134"><div align="center">File Name</div></td>
      <td width="48"><div align="center">File</div></td>
      <td width="41"><div align="center">Details</div></td>
      <td width="80"><div align="center">Date</div></td>
    </tr>
    
    
     <?php
	include("connection.php");
	$i=0;
	$res=mysql_query("select * from medical_record ");
	while($res1=mysql_fetch_array($res))
	{
		$i++;
	?>
    <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $res1[2] ?></td>
      <td><?php echo $res1[3] ?></td>
      <td><?php echo $res1[4] ?></td>
      <td><?php echo $res1[5] ?></td>
      
      <td><a href="replymedicalrecord.php?id=<?php echo $res1[0]?> ">Reply</a></td>
      </tr>
    <?php
	}
	?>
  </table>
</form>
</body>
</html>