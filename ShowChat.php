
   <table id="tbl" border="0"  style='width: 300px;'>
    <tr>
      <td>Message </td>
    </tr>
	<?php
	include("connection.php");
	session_start();
	$tid=$_SESSION['tid'];
	$lid=$_SESSION['lid'];
	$res=mysql_query("select * from chat where (fromid='$lid' and toid='$tid') or (fromid='$tid' and toid='$lid') order by chat_id");
	$i=0;
	while($re1=mysql_fetch_array($res))
	{
	$i++;
	?>
       
    <tr >
     
        <td onclick="ddd(<?php echo $re1['chat_id'] ?>)"><div <?php if($re1['fromid']==$lid){?> 
                align="right" style="background-color:#CCFFCC" 
				<?php
				}
				else
				{
				?>
             
                align="left" style="background-color:#FFFFCC" 
				<?php
				}
				?>
                ><?php echo $re1[1] ?></div></td>
     
    </tr>
  <?php }
  ?>
  </table>
