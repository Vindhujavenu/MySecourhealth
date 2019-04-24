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
		include("connection.php");
        $su=$_GET["sid"];
        $sn=$_GET["snm"];
        ?>
       <div><h3><a href="survey_result_panchayath.php?sid=<?php echo $su ?>"><center> view results by panchayath</center></a></h3></div>
	   <hr/>
        <table width="1096" height="313" border="0" align="center">
             
             <tr>
     <td width="540"  align="center">
         <h2><?php echo $sn ?></h2><br/>
             
    <hr/>
        
        <script>
            var chart;
            var legend;

            var chartData = [
            <?php
			$res=mysql_query("select count(*) from survey_answer,survey_question where answer='yes' and survey_question.s_id='$su' and survey_answer.sq_id=survey_question.sq_id");
  
            if(mysql_num_rows($res)>0){
				$row=mysql_fetch_array($res);
            ?>
         {<?php echo "country: 'yes',litres:".$row[0] ?>
                       
            },
            <?php
            }
            ?>
           <?php
            $res=mysql_query("select count(*) from survey_answer,survey_question where answer='no' and survey_question.s_id='$su' and survey_answer.sq_id=survey_question.sq_id");
  
            if(mysql_num_rows($res)>0){
				$row=mysql_fetch_array($res);
            ?>
         {<?php echo "country: 'no',litres:".$row[0] ?>
                       
            }
            <?php
            }
            ?>
    ];

            AmCharts.ready(function () {
                // PIE CHART
                chart = new AmCharts.AmPieChart();
                chart.dataProvider = chartData;
                chart.titleField = "country";
                chart.valueField = "litres";
                chart.outlineColor = "#FFFFFF";
                chart.outlineAlpha = 0.8;
                chart.outlineThickness = 2;

                // WRITE
                chart.write(1+"");
            });
        </script>
        <div id="1" style="width: 100%; height: 400px;"></div>
        
        
        
    </td>
       
         </tr>

</table>

</body>
</html>
<?php
include("footer.php");
?>