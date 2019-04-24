<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
include("dheader.php");
?>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="881" border="1" align="center">
    <tr>
      <td width="47"><div align="center">SlNo</div></td>
      <td width="134"><div align="center">File Name</div></td>
      <td width="127"><div align="center">File</div></td>
      <td width="281"><div align="center">Details</div></td>
      <td width="141"><div align="center">Date</div></td>
	  <td></td>
	  
    </tr>
    
    
     <?php
	include("connection.php");
	
	$id=$_GET['id'];
	$i=0;
	$res=mysql_query("select * from medical_record where mr_id='$id' ");
	while($res1=mysql_fetch_array($res))
	{
		$i++;
	?>
    <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $res1[2] ?></td>
      <td><p><a href="download.php?filename=<?php echo $res1[3]?>">download Record</a></p></td>
      <td><?php echo $res1[4] ?></td>
      <td><?php echo $res1[5] ?></td>
      <?php
	  if($res1[7]=="pending")
	  {
	  ?>
      <td width="111"><a href="replymedicalrecord.php?id=<?php echo $res1[0]?> ">Reply</a></td>
	  <?php
	  }
	  else
	  {?>
	  <td><?php echo $res1[7] ?></td>
<?php } ?>
    </tr>
    <?php
	}
	?>
  </table>
</form>
</body>
</html>
<?php
include("footer.php");
?>