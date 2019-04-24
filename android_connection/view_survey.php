<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="844" border="1">
    <tr>
      <td width="52">Sl No </td>
      <td width="178">Survey Name </td>
      <td width="199">Details</td>
       <td width="101">&nbsp;</td>
       <td width="101">&nbsp;</td>
       <!--<td width="101">&nbsp;</td>-->
       <td width="109"><p>&nbsp;</p></td>
    </tr>
       <?php
        include("connection.php");
		$qry="select * from survey";
		$res=mysql_query($qry);
		if(mysql_num_rows($res)>0){
        $i=0;
        while($row=mysql_fetch_array($res))
        {
            $i++;
        
    ?>   
    <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $row[1] ?></td>
      <td><?php echo $row[2] ?></td>
      <td><p><a  style="color: #00f; font-style: italic;"id="linkstyle" href="delete_survey.jsp?sid=<?php echo $row[0] ?>">Delete</a></p></td>
      <td><p><a style="color: #00f; font-style: italic;" href="readFiles.jsp?sid=<?php echo $row[0] ?>">Publish results</a></p></td>
       <td><p><a style="color: #00f; font-style: italic;" href="survey_result_all_Ad.jsp?sid=<?php echo $row[0] ?>&snm=<?php echo $row[1] ?>">Complete results</a><br></br>
               <a style="color: #00f; font-style: italic;" href="survey_result.jsp?sid=<?php echo $row[0] ?>">Question Level</a></p></td>
    </tr>
    <?php
        }     
    ?>
  </table>
</form>
</body>
</html>
   <%@include file="h_foot.jsp" %>
