 <?php
include("header.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <body>
        <form name="form1" method="get" action="ajax_survey_pan.php">
      <table width="200" border="0" align="center">
        <tr>
          <th scope="row">Panchayath</th>
          <td><label for="select"></label>
              <select name="select" id="select">
                <option>select</option>
                <?php
                $sid=$_GET['sid'];
				include("connection.php");
				$res=mysql_query("SELECT * FROM `panchayath` ORDER BY `name`");
				if(mysql_fetch_array($res)>0){
				while($row=mysql_fetch_array($res)){
                
                ?>
                <option value="<?php echo $row[0] ?>"><?php echo $row[1]?></option>
                <?php
                }
				}
                ?>
                
                
          </select></td>
          
        
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="hidden" value="<?php echo $sid ?>" name="sid" />
                <input type="submit" name="submit" value="Submit"/></td>
        </tr>
      </table>
      <p>&nbsp;</p>
    </form>
    
    </body>
</html>
 <?php
include("foot.php");
?>