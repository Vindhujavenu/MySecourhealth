<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<script>
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
		if(document.getElementById("select").value=="-1")
	{
            flag=false;
            document.getElementById("b").style.visibility="visible";
    	
 	}
	else
        {
            document.getElementById("b").style.visibility="hidden";
        }
		if(document.getElementById("dob").value=="")
	{
            flag=false;
            document.getElementById("c").style.visibility="visible";
    	
 	}
	else
        {
            document.getElementById("c").style.visibility="hidden";
        }
		if(document.getElementById("place").value=="")
	{
            flag=false;
            document.getElementById("d").style.visibility="visible";
    	
 	}
	else
        {
            document.getElementById("d").style.visibility="hidden";
        }
		
		if(/[^a-z\s]/gi.test(document.getElementById("place").value))
	{
		alert("Special characters are not allowed in name");
		document.getElementById("d").focus();
		return false;
	}
		if(document.getElementById("post").value=="")
   	{
     	  flag=false;
     	document.getElementById("e").style.visibility="visible";    	
 	}
	else
        {
            document.getElementById("e").style.visibility="hidden";
        }
		if(/[^a-z\s]/gi.test(document.getElementById("post").value))
	{
		alert("Special characters are not allowed in name");
		document.getElementById("e").focus();
		return false;
	}
	if(document.getElementById("quali").value=="")
   	{
     	  flag=false;
     	document.getElementById("f").style.visibility="visible";    	
 	}
	else
        {
            document.getElementById("f").style.visibility="hidden";
        }
		if(/[^a-z\s]/gi.test(document.getElementById("quali").value))
	{
		alert("Special characters are not allowed in name");
		document.getElementById("f").focus();
		return false;
	}
	if(document.getElementById("exp").value=="")
   	{
     	  flag=false;
     	document.getElementById("g").style.visibility="visible";    	
 	}
	else
        {
            document.getElementById("g").style.visibility="hidden";
        }
		if(/[^a-z\s]/gi.test(document.getElementById("exp").value))
	{
		alert("Special characters are not allowed in name");
		document.getElementById("g").focus();
		return false;
	}
		if((document.getElementById("phone").value).length!=10)
	
	{
		 flag=false;
		document.getElementById("h").style.visibility="visible";	
	}
	else
        {
            document.getElementById("h").style.visibility="hidden";
        }
	if(document.getElementById("email").value=="")
	{
		  flag=false;
		document.getElementById("i").style.visibility="visible";
	}
	else
        {
            document.getElementById("i").style.visibility="hidden";
        }
	var emailPat =/^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
	var emailid=document.getElementById("email").value;
	var matchArray = emailid.match(emailPat);
	if (matchArray == null)
	{
		 flag=false;
		document.getElementById("i").style.visibility="visible";
		
	}
	else
        {
            document.getElementById("i").style.visibility="hidden";
        }
		if(document.getElementById("pass").value=="")
	{
		flag=false;
		document.getElementById("j").style.visibility="visible";
    	
 	}
	else
        {
            document.getElementById("j").style.visibility="hidden";
        }
	if(document.getElementById("pass").value.length<6)
	{
		flag=false;
		document.getElementById("j").style.visibility="visible";
    	
	}
	else
        {
            document.getElementById("j").style.visibility="hidden";
        }
	   return flag;
   }
</script>

<body>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="493" border="1">
    <tr>
      <td width="144">Doctor Name</td>
      <td width="224"><label for="textfield"></label>
      <input type="text" name="name" id="name" /></td>
       <td width="103"><div style="visibility:hidden" id="a"><font color="#FF0000">Invalid Entry!!!</font></div></td>
    </tr>
    <tr>
      <td>Department</td>
      <td><label for="select"></label>
        <select name="dept" id="select">
        <option value="-1">select</option>
        <?php
		include("connection.php");
		$a=mysql_query("select * from department ");
		while($b=mysql_fetch_array($a))
		{
		
		?>
        <option value="<?php echo $b[0]?>"><?php echo $b[1]?></option>
        <?php
		}
		?>
      </select></td>
      <td width="103"><div style="visibility:hidden" id="b"><font color="#FF0000">Invalid Entry!!!</font></div></td>
    </tr>
    <tr>
      <td>DOB</td>
      <td><label for="textfield2"></label>
      <input type="date" name="dob" id="dob" /></td>
      <td width="103"><div style="visibility:hidden" id="c"><font color="#FF0000">Invalid Entry!!!</font></div></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td><input type="radio" name="radio" id="radio" value="male" checked="checked"/>
      <label for="radio">Male<br />
        <input type="radio" name="radio" id="radio2" value="female" />
        Female
      </label></td>
    </tr>
    <tr>
      <td>Place</td>
      <td><label for="textfield3"></label>
      <input type="text" name="place" id="place" /></td>
      <td width="103"><div style="visibility:hidden" id="d"><font color="#FF0000">Invalid Entry!!!</font></div></td>
    </tr>
    <tr>
      <td>Post</td>
      <td><label for="textfield4"></label>
      <input type="text" name="post" id="post" /></td>
      <td width="103"><div style="visibility:hidden" id="e"><font color="#FF0000">Invalid Entry!!!</font></div></td>
    </tr>
    <tr>
      <td>Qualification</td>
      <td><label for="textfield5"></label>
      <input type="text" name="qualification" id="quali" /></td>
      <td width="103"><div style="visibility:hidden" id="f"><font color="#FF0000">Invalid Entry!!!</font></div></td>
    </tr>
    <tr>
      <td>Experience</td>
      <td><label for="textfield6"></label>
      <input type="text" name="experience" id="exp" /></td>
      <td width="103"><div style="visibility:hidden" id="g"><font color="#FF0000">Invalid Entry!!!</font></div></td>
    </tr>
    <tr>
      <td>Photo</td>
      <td><label for="photo"></label>
      <input type="file" name="pic" id="photo" /></td>
      
    </tr>
    <tr>
      <td>Phone No</td>
      <td><label for="textfield7"></label>
      <input type="text" name="phoneno" id="phone" /></td>
      <td width="103"><div style="visibility:hidden" id="h"><font color="#FF0000">Invalid Entry!!!</font></div></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><label for="textfield8"></label>
      <input type="text" name="email" id="email" /></td>
      <td width="103"><div style="visibility:hidden" id="i"><font color="#FF0000">Invalid Entry!!!</font></div></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><label for="textfield9"></label>
      <input type="password" name="password" id="pass" /></td>
      <td width="103"><div style="visibility:hidden" id="j"><font color="#FF0000">Invalid Entry!!!</font></div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="button" id="button" value="Submit" onclick="return valid()" />
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>
<?php
if(isset($_POST['button']))
{
	include("connection.php");
	$name=$_POST['name'];
	$dob=$_POST['dob'];
	$radio=$_POST['radio'];
	$place=$_POST['place'];
	$post=$_POST['post'];
	$qualification=$_POST['qualification'];
	$experience=$_POST['experience'];
	$phoneno=$_POST['phoneno'];
	$photo=$_FILES['pic']['name'];
	$email=$_POST['email'];
	move_uploaded_file($_FILES['pic']['tmp_name'],"doctor/".$photo);
	$dept=$_POST['dept'];
	$password=$_POST['password'];
	mysql_query("insert into login values(null,'$email','$password','doctor')");
	$lid=mysql_insert_id();
	$qry=mysql_query("insert into doctor values(null,'$lid','$dept','$name','$dob','$radio','$place','$post','$qualification','$experience','$phoneno','$email','$photo')");  
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