
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
  <table width="581" border="1" align="center">
    <tr>
      <td width="43">Sl No </td>
      <td width="168">Patient Name </td>
      <td width="209">Place </td>
      <td width="209">Age</td>
      <td width="133">&nbsp;</td>
    </tr>
	<?php
	include("connection.php");
	session_start();
	$lid=$_SESSION['lid'];
	$res=mysql_query("select distinct member.log_id,name,gender,age from member,chat where ((member.log_id=chat.fromid) or(member.log_id=chat.toid)) and (fromid='$lid' or toid='$lid')");
	$i=0;
	while($re1=mysql_fetch_array($res))
	{
	$i++;
	?>
      
    <tr>
       <td><?php  echo $i?></td>
       <td><?php echo $re1[1] ?></td>
       <td><?php echo $re1[2] ?></td>
       <td><?php echo $re1[3] ?></td>
       <td><a style="color: #00f; font-style: italic;"id="linkstyle" href="chatform1.php?did=<?php echo $re1['log_id'] ?>&nm=<?php echo $re1[1] ?>">Chat</a></td>
    </tr>
     <?php
	 } ?>
  </table>
</form>
    
</body>
</html>
<?php
include("footer.php");
?>