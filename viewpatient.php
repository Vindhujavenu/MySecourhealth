<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="962" height="196" border="1">
    <tr>
      <td width="50"><div align="center">SlNo</div></td>
      <td width="67"><div align="center">Name</div></td>
      <td width="40"><div align="center">Place</div></td>
      <td width="50"><div align="center">Post</div></td>
      <td width="55"><div align="center">Age</div></td>
      <td width="65"><div align="center">Gender</div></td>
      <td width="122"><div align="center">Emai-Id</div></td>
      <td width="189"><div align="center">Phone Number</div></td>
      <td width="142"><div align="center">Photo</div></td>
      <td width="118"><div align="center"></div></td>
    </tr>
    
     <?php
	include("connection.php");
	$i=0;
	session_start();
	$lid=$_SESSION["lid"];
	$res=mysql_query("select medical_record.*,patient.* from medical_record,patient where medical_record.pt_id=patient.log_id and medical_record.d_id='$lid'");
 
	while($res1=mysql_fetch_array($res))
	{
		$i++;
	?>
    <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $res1[10] ?></td>
      <td><?php echo $res1[11] ?></td>
      <td><?php echo $res1[12] ?></td>
      <td><?php echo $res1[13] ?></td>
      <td><?php echo $res1[17] ?></td>
      <td><?php echo $res1[14] ?></td>
      <td><?php echo $res1[15] ?></td>
      <td><?php echo $res1[16] ?></td>
      <td><a href="medicalrecord.php?id=<?php echo $res1[0]?> ">View Record</a></td>
      </tr>
    <?php
	}
	?>
  </table>
</form>
</body>
</html>