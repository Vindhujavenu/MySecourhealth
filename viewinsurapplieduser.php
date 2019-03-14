<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script>

            var xmlHttp;
            function showclass(to){
                if (typeof XMLHttpRequest != "undefined"){
                xmlHttp= new XMLHttpRequest();
                }
                else if (window.ActiveXObject){
                    xmlHttp= new ActiveXObject("Microsoft.XMLHTTP");
                }
                if (xmlHttp==null){
                    alert("Browser does not support XMLHTTP Request")
                    return;
                }
                var url="ajaxviewinsurappluser.php";
				var hinsur=document.getElementById("select").value;
                url +="?hinsur=" 
                xmlHttp.onreadystatechange = stateChange;
                xmlHttp.open("GET", url, true);
                xmlHttp.send(null);
            }
            
            
            function stateChange(){
                if(xmlHttp.readyState==4 || xmlHttp.readyState=="complete"){
                    document.getElementById("insurance").innerHTML=xmlHttp.responseText   
                }
	}
	</script>
</head>

<body>
<form>
<table width="221" border="1">
  <tr>
    <td width="143" height="37">Health Insurance</td>
    <td width="62"><label for="select"></label>
      <select name="hinsur" id="select" onchange="showclass()">
      <option>select</option>
      <?php
	  include("connection.php");
	 $a= mysql_query("select * from health_insurance");
	 while($b=mysql_fetch_array($a))
		{
		
		?>
        <option value="<?php echo $b[0]?>"><?php echo $b[1]?></option>
        <?php
		}
		?>
	  ?>
      </select></td>
  </tr>
</table>
<p>&nbsp;</p>

<table width="540" border="1" id="insurance">
</table>
</form>
<p>&nbsp;</p>
</body>
</html>