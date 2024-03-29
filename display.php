<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ticket</title>
<meta name="generator" content="Quick 'n Easy Web Builder - http://www.quickandeasywebbuilder.com">
<style>
body
{
   background-color: #FA8072;
   color: #000000;
   font-family: Arial;
   font-weight: normal;
   font-size: 13px;
   line-height: 1.1875;
   margin: 0;
   padding: 0;
}
a
{
   color: #0000FF;
   text-decoration: none;
}
a:visited
{
   color: #800080;
}
a:active
{
   color: #FF0000;
}
a:hover
{
   color: #0000FF;
   text-decoration: none;
}
#Image1
{
   border: 0px solid #000000;
   padding: 0px 0px 0px 0px;
   margin: 0;
   left: 0;
   top: 0;
   width: 100%;
   height: 100%;
}
#InlineFrame1
{
   border: 7px solid #008B8B;
   margin: 0;
}
#wb_PanelMenu1 a, #PanelMenu1_markup li a
{
   display: block;
   text-align: center;
   vertical-align: middle;
}
#PanelMenu1_markup
{
   display: none;
   margin: 0;
   padding: 0px 0px 0px 0px;
}
#PanelMenu1_panel #PanelMenu1_markup
{
   display: block;
}
#PanelMenu1_markup ul
{
   list-style: none;
   list-style-type: none;
   margin: 0;
   padding: 0;
}
#PanelMenu1_markup li a, #PanelMenu1_markup li a:hover
{
   padding: 10px 10px 10px 10px;
   -webkit-box-shadow: none;
   -moz-box-shadow: none;
   box-shadow: none;
}
#PanelMenu1_markup .divider
{
   height: 1px;
   margin: 9px 0;
   overflow: hidden;
   background-color: #2E2E2E;
}
#PanelMenu1_panel
{
   display: none;
   position: absolute;
   position: fixed;
   top: 0;
   height: 100%;
   width: 250px;
   z-index: 9999;
}
#PanelMenu1_markup li a
{
   color: #F7F7F7;
   border: 1px solid #2E2E2E;
   background-color: #20B2AA;
   font-family: Arial;
   font-weight: normal;
   font-size: 27px;
   font-style: normal;
   text-decoration: none;
}
#wb_PanelMenu1 a
{
   color: #F7F7F7;
   border: 1px solid #2E2E2E;
   background-color: #008B8B;
   font-family: Arial;
   font-weight: normal;
   font-size: 27px;
   font-style: normal;
   text-decoration: none;
}
#PanelMenu1_markup li a:hover
{
   color: #F7F7F7;
   background-color: #484848;
   border: 1px solid #2E2E2E;
}
#wb_PanelMenu1 a:hover
{
   color: #F7F7F7;
   background-color: #484848;
   border: 1px solid #2E2E2E;
}
#PanelMenu1_panel
{
   background-color: #20B2AA;
   overflow-y: auto;
}
#PanelMenu1
{
   line-height: 99px;
   width: 437px;
   height: 99px;
   position: absolute;
   z-index: 999;
}
#wb_Form1
{
   background-color: #FFA07A;
   background-image: none;
   border: 0px solid #000000;
}
#wb_Text5
{
   background-color: transparent;
   background-image: none;
   border: 0px solid #C0C0C0;
   padding: 0;
   margin: 0;
   text-align: left;
}
#wb_Text5 div
{
   text-align: left;
}
</style>
<script src="js/jquery-1.12.4.min.js"></script>
<script src="js/wb.panel.min.js"></script>
<script src="js/qwb7.min.js"></script>
<script>
$(document).ready(function()
{
   $("#PanelMenu1").panel({animate: true, animationDuration: 200, animationEasing: 'linear', dismissible: true, display: 'push', position: 'left', toggle: true});
});
</script>
</head>
<body onload="ShowPanel('PanelMenu1', event);return false;">
<iframe name="InlineFrame1" id="InlineFrame1" style="position:absolute;left:126px;top:135px;width:822px;height:522px;z-index:2;" src=""></iframe>
<div id="wb_PanelMenu1" style="position:absolute;left:326px;top:17px;width:437px;height:99px;text-align:center;z-index:3;">
<a href="#PanelMenu1_markup" id="PanelMenu1">Print Ticket</a>
<div id="PanelMenu1_markup">
<ul role="menu">
   <li role="menuitem"><a href="./MainMenu.html" title="Main Menu">Main Menu</a></li>
</ul>
</div>
</div>
<div id="wb_Form1" style="position:absolute;text-align:center;left:134px;top:142px;width:822px;height:520px;z-index:4;">
<form name="Form1" method="post" action="URL to MYSQL" enctype="multipart/form-data" id="Form1">
<div id="wb_Text5" style="height:17px;z-index:0;">
<br><br>
<div style="text-align:center;font-size: xx-large;color: rgb(4, 0, 255);">The Ticket Details</div>
<br><br>
<div style="left:300px;font-family:Arial;font-size:13px;color:#000000;">
<div style="text-align:center;color:purple;font-size:x-large;width:98%;border: 5px solid darkblue;background-color:cyan;">
   <?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "ticket_db";
   
   // Create connection
   $conn = mysqli_connect($servername, $username, $password, $dbname);
   // Check connection
   if (!$conn) 
   {
     die("Connection failed: " . mysqli_connect_error());
   }
   
   
   $sql = "SELECT * FROM ticket where ticket_no = (SELECT max(ticket_no) FROM ticket)";
   $result = mysqli_query($conn, $sql) or die( mysqli_error($conn));
   
   if (mysqli_num_rows($result) > 0) 
   {
     while($row = mysqli_fetch_array($result)) 
   {
       echo "Ticket no: " . $row["ticket_no"]."<br>". "No of tickets: " . $row["no_of_tickets"]."<br>";
       echo "Customer Name: " . $row["Name"]."<br>". "Phone no: " . $row["phone_no"]. "<br>";
       echo "------------------------------------------------<br>";
       echo "Movie Name: " . $row["movie"]."<br>" ;
       $sql1 = "SELECT * FROM `THEATRE` WHERE `m_name` = '" . $row['movie'] . "' ";
       $res1= mysqli_query($conn, $sql1) or die( mysqli_error($conn));
       while($row2 = mysqli_fetch_array($res1)){
           echo "             Theatre Name: ".$row2["t_name"]."<br>";
       }
       $sql3 = "SELECT * FROM `DAYS` WHERE `day` = '" . $row['day'] . "' ";
       $res3 = mysqli_query($conn,$sql3) or die(mysqli_error($conn));
       while($row4 = mysqli_fetch_array($res3)){
           echo "Date of show: ".$row4["dates"]."<br>"."Day of show: " . $row["day"]."<br>". "Show timing: " .$row["timing"]. "<br>";
       }
       echo "------------------------------------------------<br>";
       $sql2 = "SELECT * FROM `SHOWS` WHERE `s_type` = '" . $row['timing'] . "' ";
       $res2 = mysqli_query($conn, $sql2) or die( mysqli_error($conn));
       while($row3 = mysqli_fetch_array($res2)){
         $price=$row3["cost"]*$row["no_of_tickets"];
           echo "Price: " .$price. "<br>";
       }
    }
   } 
   else 
   {
     echo "0 results";
   }
   
   mysqli_close($conn);
   ?></div>
</div>
</div>
</form>
</div>
</body>
</html>