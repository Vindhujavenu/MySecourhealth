<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="309" border="1">
    <tr>
      <td width="54"><div align="center">SlNo</div></td>
      <td width="66"><div align="center">UserName</div></td>
      <td width="33"><div align="center">Email</div></td>
      <td width="29"><div align="center">Date</div></td>
      <td width="93"><div align="center">Feedback</div></td>
      
    </tr>
    <tr>
      
    </tr>
         <?php
	include("connection.php");
	$i=0;
	$res=mysql_query("select feedback.*,patient.email_id,patient.name from feedback,patient where feedback.log_id=patient.log_id");
	while($res1=mysql_fetch_array($res))
	{
		$i++;
	?>
    <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $res1[5] ?></td>
      <td><?php echo $res1[4] ?></td>
      <td><?php echo $res1[3] ?></td>
      <td><?php echo $res1[2] ?></td>
      
      </tr>
    <?php
	}
	?>
  </table>
</form>
</body>
</html>