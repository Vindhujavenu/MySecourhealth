
<!DOCTYPE html>
<html>
   <?php
include("dheader.php");
?>
	<?php
	$d_id=$_GET['did'];
	$pnm=$_GET['nm'];
	session_start();
	$_SESSION['tid']=$d_id;
	?>
    <head>
        <script src="newjavascript.js"></script>
<script>
 
  var xmlHttp;
            function show(mid){
                var a=document.getElementById(mid).value; 
                var b=document.getElementById("hd").value;               
//                alert("-------------------");
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
                var url="formclick.php?c="+a+"&did="+b;
                xmlHttp.onreadystatechange = stateChange;
               
                 xmlHttp.open("GET", url, true);
                xmlHttp.send(null);
        
            }
            
         function stateChange(){
              if(xmlHttp.readyState==4 || xmlHttp.readyState=="complete"){
                   document.getElementById("txt").innerHTML=xmlHttp.responseText; 
                   document.getElementById("mg").value=""; 
                  // alert("haii");
                }
            }
            
$(document).ready(function() {
 	 $("#chat").load("ShowChat.php");
   var refreshId = setInterval(function() 
   {
      $("#chat").load('ShowChat.php');
   }, 1000);
   $.ajaxSetup({ cache: false });
         var rowpos = $('#tbl tr:last').position();
        $('#chat').scrollTop(rowpos.b);
});

var xhtp
function ddd(chat_id){
    var result = confirm("Want to delete?");
    if (result) {
        if (typeof XMLHttpRequest != "undefined"){
                xhtp= new XMLHttpRequest();
                }
                else if (window.ActiveXObject){
                    xhtp= new ActiveXObject("Microsoft.XMLHTTP");
                }
                if (xhtp==null){
                    alert("Browser does not support XMLHTTP Request")
                    return;
                }
                var url="chat_delete.php?cid="+chat_id;
                xhtp.onreadystatechange = stateChange1;
               
                 xhtp.open("GET", url, true);
                xhtp.send(null);
        
    }
    
}
function stateChange1(){
              if(xhtp.readyState==4 || xhtp.readyState=="complete"){
                  
                }
            }
</script>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <body>   
        
    <form method="post">
	
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <div align="center">
            <h2><?php echo $pnm?></h2>
        <div style="overflow: auto;height: 340px; width: 930px;" id="chat">
        
        </div >
        
                <table style="width:300px">
                    <tr>
                         
                        <td width="229"><input type="hidden"  value="<?php echo $d_id ?>" id="hd" />
                          <input name="t1" id="mg" type="text"  size="40"/></td>
                      <td width="59"><input type="button" name="s1" onClick="show('mg')"  value="SEND"/></td>
                    <div id="txt"></div>
                    </tr>
            </table> 
        </div>
   </form>
    </body>
</html>
   
<?php
include("footer.php");
?>