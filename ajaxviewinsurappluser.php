<div>
<table width="1116" height="136" border="0">
  <tr></tr>
  <tr></tr>
  <tr></tr>
  <tr>
    <td width="54"><div align="center">SlNo</div></td>
    <td width="85"><div align="center">User-Name</div></td>
    <td width="43"><div align="center">File</div></td>
    <td width="80"><div align="center">Date</div></td>
    <td width="38"><div align="center">Status</div></td>
 
  </tr>
  <?php
	include("connection.php");
	$id=$_GET['hinsur'];
	$a=mysql_query("select health_insurance_application.*,patient.name,health_insurance.file from health_insurance_application,patient,health_insurance where health_insurance_application.log_id=patient.log_id and health_insurance_application.hid=health_insurance.hid");
	$i=1;
	while($b=mysql_fetch_array($a))
	{
		
		
	?>
  <tr>
    <td><?php echo $i++ ?></td>
    <td><?php echo $b[6] ?></td>
    <td><?php echo $b[7] ?></td>
    <td><?php echo $b[2] ?></td>
    <td><?php echo $b[4] ?></td>
  </tr>
  <?php
	}
	?>
  </table>
  
