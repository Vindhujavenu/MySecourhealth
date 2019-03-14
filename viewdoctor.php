<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
	include("connection.php");
	$i=0;
	session_start();
	$lid=$_SESSION['lid'];
	$res=mysql_query("select doctor.*,department.dptname from doctor,department where doctor.dpt_id=department.dpt_id and doctor.log_id='$lid'");
	while($res1=mysql_fetch_array($res))
	{
		$i++;
	?>
<body>
<form id="form1" name="form1" method="post" action="">
  <table width="341" border="1">
    <tr>
      <td width="170"><div align="center">Department</div></td>
      <td width="155"><div align="center"><?php echo $res1[13] ?></div></td>
    </tr>
    <tr>
      <td><div align="center">Doctor-Name</div></td>
      <td><div align="center"><?php echo $res1[3] ?></div></td>
    </tr>
    <tr>
      <td><div align="center">Date of Birth</div></td>
      <td><div align="center"><?php echo $res1[4] ?></div></td>
    </tr>
    <tr>
      <td><div align="center">Gender</div></td>
      <td><div align="center"><?php echo $res1[5] ?></div></td>
    </tr>
    <tr>
      <td><div align="center">Place</div></td>
      <td><div align="center"><?php echo $res1[6] ?></div></td>
    </tr>
    <tr>
      <td><div align="center">Post</div></td>
      <td><div align="center"><?php echo $res1[7] ?></div></td>
    </tr>
    <tr>
      <td><div align="center">Qualification</div></td>
      <td><div align="center"><?php echo $res1[8] ?></div></td>
    </tr>
    <tr>
      <td><div align="center">Experience</div></td>
      <td><div align="center"><?php echo $res1[9] ?></div></td>
    </tr>
    <tr>
      <td><div align="center">Photo</div></td>
      <td><div align="center"><?php echo $res1[12] ?></div></td>
    </tr>
    <tr>
      <td><div align="center">Phone No</div></td>
      <td><div align="center"><?php echo $res1[10] ?></div></td>
    </tr>
    <tr>
      <td><div align="center">Email Id</div></td>
      <td><div align="center"><?php echo $res1[11] ?></div></td>
    </tr>
    <?php } ?>
  </table>
</form>
</body>
</html>