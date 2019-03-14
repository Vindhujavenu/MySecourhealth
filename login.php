<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="406" height="128" border="1">
    <tr>
      <td width="155"><div align="center">User-Name</div></td>
      <td width="235"><label for="uname"></label>
        <div align="center">
          <input type="text" name="uname" id="uname" />
      </div></td>
    </tr>
    <tr>
      <td><div align="center">Password</div></td>
      <td><label for="password"></label>
        <div align="center">
          <input type="text" name="password" id="password" />
      </div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="submit" id="submit" value="Login" />
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>
<?php
include("connection.php");
if(isset($_POST['submit']))
{
$uname=$_POST['uname'];
$password=$_POST['password'];
$a=mysql_query("select * from login where username='$uname' and password='$password'");
if($b=mysql_fetch_array($a))
{
	$lid=$b['logid'];
	$type=$b['type'];
	session_start();
	$_SESSION["lid"]=$lid;
	$_SESSION["type"]=$type;
	if($type=='admin')
	{
		header("location:adminhome.php");
	}
	else if($type=='doctor')
	{
		header("location:doctorhome.php");
	}

	else
	{
		?>
    <script>alert("invalid user");</script>
    <?php
	}
}
}
?>
		
	
	
