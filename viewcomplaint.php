<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form>
  <table width="366" height="128" border="1">
    <tr>
      <td width="59"><div align="center">Sl no</div></td>
      <td width="99"><div align="center">User Name</div></td>
      <td width="42"><div align="center">Email</div></td>
      <td width="66"><div align="center">Complaint</div></td>
      <td width="29"><div align="center">Date</div></td>
      <td width="31">&nbsp;</td>
    </tr>
     <?php
	include("connection.php");
	$i=0;
	$res=mysql_query("select complaint.*,patient.name,patient.email_id from complaint,patient where complaint.log_id=patient.log_id");
	while($res1=mysql_fetch_array($res))
	{
		$i++;
	?>
    <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $res1[6] ?></td>
      <td><?php echo $res1[7] ?></td>
      <td><?php echo $res1[2] ?></td>
      <td><?php echo $res1[3] ?></td>
      
      
      <td><a href="Reply.php?id=<?php echo $res1[0]?> ">Reply</a></td>
      </tr>
    <?php
	}
	?>
  </table>
</form>
</body>
</html>