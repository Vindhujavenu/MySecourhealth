<?php
include("header.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
       <link rel="stylesheet" href="style.css" type="text/css">
        <script src="amcharts/amcharts.js" type="text/javascript"></script>
        <script src="amcharts/pie.js" type="text/javascript"></script>


    </head>
    <body>
       
        <?php
        $su=$_GET["sid"];
        ?>
        <div><h2><a href="survey_result_panchayathQ.php?sid=<?php echo $su ?>"><center>view results by panchayath</center></a></h2></div>
		<hr/>
        <table width="1096" height="313" border="0" align="center">
             <?php
         include("connection.php");
		 $res=mysql_query("SELECT `sq_id`,`question` FROM `question`,`survey_question` WHERE `survey_question`.`s_id`='$su' AND `survey_question`.`q_id`=`question`.`q_id`");        
		 if(mysql_num_rows($res)>0){
        while($row=mysql_fetch_array($res)){
        
        ?>
             <tr>
     <td width="540"  align="center">
         <h2><?php echo $row[1] ?></h2><br/>
             
    
        
        <script>
            var chart;
            var legend;

            var chartData<?php echo $row[0]?> = [
            <?php
			$re=mysql_query("SELECT COUNT(`sa_id`) FROM `survey_answer` WHERE `survey_answer`.`sq_id`='$row[0]' AND `answer`='yes'");
			
            if(mysql_num_rows($re)>0){
				$row1=mysql_fetch_array($re);
            ?>
         {<?php echo "country: 'yes',litres:".$row1[0] ?>
                       
            },
            <?php
            }
            ?>
            <?php
			$re=mysql_query("SELECT COUNT(`sa_id`) FROM `survey_answer` WHERE `survey_answer`.`sq_id`='$row[0]' AND `answer`='no'");
			if(mysql_num_rows($re)>0){
				$row1=mysql_fetch_array($re);
            ?>
         {<?php echo "country: 'no',litres:".$row1[0] ?>
                       
            }
            <?php
            }
            ?>
];

            AmCharts.ready(function () {
                // PIE CHART
                chart = new AmCharts.AmPieChart();
                chart.dataProvider = chartData<?php echo $row[0] ?>;
                chart.titleField = "country";
                chart.valueField = "litres";
                chart.outlineColor = "#FFFFFF";
                chart.outlineAlpha = 0.8;
                chart.outlineThickness = 2;

                // WRITE
                chart.write("<?php echo $row[0] ?>");
            });
        </script>
        <div id="<?php echo $row[0] ?>" style="width: 100%; height: 400px;"></div>
        
        
        
    </td>
  
        
         </tr>
        <?php
        }
		 }
        ?>
  
</table>

</body>
</html>
<?php
include("footer.php");
?>