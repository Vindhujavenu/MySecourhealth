<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
include("header.php");
?>
<body>
<form>
  <table width="779" height="128" border="1" align="center">
    <tr>
      <td width="54"><div align="center">Sl no</div></td>
      <td width="166"><div align="center">User Name</div></td>
      <td width="156"><div align="center">Place</div></td>
      <td width="125"><div align="center">Complaint</div></td>
      <td width="82"><div align="center">Date</div></td>
      <td width="156">&nbsp;</td>
    </tr>
     <?php
	include("connection.php");
	$i=0;
	$res=mysql_query("select complaint.*,asha_worker.name,asha_worker.place from complaint,asha_worker where complaint.log_id=asha_worker.log_id and complaint.reply='pending' ");

	if(mysql_num_rows($res)>0)
	{
	
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
      
      
      <td><a href="send_reply.php?id=<?php echo $res1[0]?> ">Reply</a></td>
    </tr>
    <?php
	}}
	?>
  </table>
</form>
</body>
</html>
<?php
include("footer.php");
?>