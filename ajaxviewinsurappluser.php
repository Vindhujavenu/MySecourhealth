<div>
<table width="1116" height="136" border="0">
  <tr></tr>
  <tr></tr>
  <tr></tr>
  <tr>
    <td width="54"><div align="center">SlNo</div></td>
	   <td width="85"><div align="center">House Number</div></td>
	      <td width="85"><div align="center">House Name</div></td>
    <td width="85"><div align="center">Owner Name</div></td>
    <td width="43"><div align="center">File</div></td>
    <td width="80"><div align="center">Date</div></td>
    <td width="38"><div align="center">Status</div></td>
 
  </tr>
  <?php
	include("connection.php");
	$id=$_GET['id'];
	$a=mysql_query("select health_insurance_application.*,family.house_no,family.house_name,family.owner_name,health_insurance.file from health_insurance_application,family,health_insurance,member where health_insurance_application.log_id=member.log_id and member.f_id=family.f_id and health_insurance_application.hid=health_insurance.hid and health_insurance_application.hid='$id'");
	$i=1;
	while($b=mysql_fetch_array($a))
	{
		
		
	?>
  <tr>
    <td><?php echo $i++ ?></td>
	 <td><?php echo $b[6] ?></td>
	  <td><?php echo $b[7] ?></td>
    <td><?php echo $b[8] ?></td>
    <td><img src="file/<?php echo $b[9] ?>" height="100"width="100"></img></td>
    <td><?php echo $b[2] ?></td>
    <td><?php echo $b[4] ?></td>
  </tr>
  <?php
	}
	?>
  </table>
  
