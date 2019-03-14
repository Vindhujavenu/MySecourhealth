<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<script type="text/javascript" >
   function valid()
   {
	   var flag=true;
	    if(document.getElementById("name").value=="")
	{
            flag=false;
            document.getElementById("a").style.visibility="visible";
    	
 	}
	else
        {
            document.getElementById("a").style.visibility="hidden";
        }
		if(/[^a-z\s]/gi.test(document.getElementById("name").value))
	{
		alert("Special characters are not allowed in name");
		document.getElementById("a").focus();
		return false;
	}
		    if(document.getElementById("place").value=="")
	{
            flag=false;
            document.getElementById("b").style.visibility="visible";
    	
 	}
	else
        {
            document.getElementById("b").style.visibility="hidden";
        }
		if(/[^a-z\s]/gi.test(document.getElementById("place").value))
	{
		alert("Special characters are not allowed in name");
		document.getElementById("b").focus();
		return false;
	}
	 if(document.getElementById("post").value=="")
	{
            flag=false;
            document.getElementById("c").style.visibility="visible";
    	
 	}
	else
        {
            document.getElementById("c").style.visibility="hidden";
        }
		if(/[^a-z\s]/gi.test(document.getElementById("post").value))
	{
		alert("Special characters are not allowed in name");
		document.getElementById("c").focus();
		return false;
	}
	 if(document.getElementById("age").value=="")
	{
            flag=false;
            document.getElementById("d").style.visibility="visible";
    	
 	}
	else
        {
            document.getElementById("d").style.visibility="hidden";
        }
		return flag;
        }
		</script>
<body>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="704" border="1">
    <tr>
      <td width="240"><div align="center">Asha-Worker Name</div></td>
      <td width="251"><label for="name"></label>
        <div align="center">
          <input type="text" name="name" id="name" />
      </div></td>
       <td width="191"><div style="visibility:hidden" id="a"><font color="#FF0000">Invalid Entry!!!</font></div></td>
    </tr>
    <tr>
      <td><div align="center">Place</div></td>
      <td><label for="place"></label>
        <div align="center">
          <input type="text" name="place" id="place" />
      </div></td>
       <td><div style="visibility:hidden" id="b"><font color="#FF0000">Invalid Entry!!!</font></div></td>
    </tr>
    <tr>
      <td><div align="center">Post</div></td>
      <td><label for="post"></label>
        <div align="center">
          <input type="text" name="post" id="post" />
      </div></td>
       <td><div style="visibility:hidden" id="c"><font color="#FF0000">Invalid Entry!!!</font></div></td>
    </tr>
    <tr>
      <td><div align="center">Age</div></td>
      <td><label for="age"></label>
        <div align="center">
          <input type="number" name="age" id="age" />
      </div></td>
       <td><div style="visibility:hidden" id="d"><font color="#FF0000">Invalid Entry!!!</font></div></td>
    </tr>
    <tr>
      <td><div align="center">Ward-No</div></td>
      <td><label for="wardno"></label>
        <div align="center">
          <input type="text" name="wardno" id="wardno" />
      </div></td>
       <td><div style="visibility:hidden" id="e"><font color="#FF0000">Invalid Entry!!!</font></div></td>
    </tr>
    <tr>
      <td><div align="center">Adhar-No</div></td>
      <td><label for="adharno"></label>
        <div align="center">
          <input type="text" name="adharno" id="adharno" />
      </div></td>
       <td><div style="visibility:hidden" id="f"><font color="#FF0000">Invalid Entry!!!</font></div></td>
    </tr>
    <tr>
      <td><div align="center">Photo</div></td>
      <td><label for="photo"></label>
        <label for="upload"></label>
        <div align="center">
          <input type="file" name="upload" id="upload" />
      </div></td>
    </tr>
    <tr>
      <td><div align="center">Phone</div></td>
      <td><label for="email"></label>
        <div align="center">
          <input type="text" name="phone" id="email" />
      </div></td>
       <td><div style="visibility:hidden" id="g"><font color="#FF0000">Invalid Entry!!!</font></div></td>
    </tr>
    <tr>
      <td><div align="center">Email</div></td>
      <td><label for="phone"></label>
        <div align="center">
          <input type="text" name="email" id="phone" />
      </div></td>
       <td><div style="visibility:hidden" id="h"><font color="#FF0000">Invalid Entry!!!</font></div></td>
    </tr>
    <tr>
      <td><div align="center">Password</div></td>
      <td><label for="password"></label>
        <div align="center">
          <input type="password" name="password" id="password" />
      </div></td>
       <td><div style="visibility:hidden" id="i"><font color="#FF0000">Invalid Entry!!!</font></div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="submit" id="submit" value="Register" onclick="return valid()"/>
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	include("connection.php");
	$name=$_POST['name'];
	$place=$_POST['place'];
	$post=$_POST['post'];
	$age=$_POST['age'];
	$wardno=$_POST['wardno'];
	$adharno=$_POST['adharno'];
	$photo=$_FILES['upload']['name'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	move_uploaded_file($_FILES['upload']['tmp_name'],"asha/".$photo);
	mysql_query("insert into login values(null,'$email','$password','ashaworker')");
	$lid=mysql_insert_id();
	$pid=mysql_insert_id();
	$qry=mysql_query("insert into asha_worker values(null,'$lid','$name','$place','$post','$age','$pid','$wardno','$adharno','$photo','$phone','$email')");  
	if($qry>0)
	{
		?>
        <script>
		alert("sucessfully");
		window.location="adminhome.php";
		</script>
        <?php
	}
}

?>