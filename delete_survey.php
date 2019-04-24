
      <?php
            $sid=$_GET["sid"];
			include("connection.php");
			$qry="delete from survey where s_id='$sid'";
            $i=mysql_query($qry);
            if($i>0)
            {
              header("location:view_survey.php");
            }
     ?>
