<!DOCTYPE html>
<html style="height: 100%;margin: 0;">
<head>
<title>Booking</title>
<style>
body
{
   color: #000000;
   padding: 0;
   text-align: center;
   top: 40%;
   height: 100%;margin: 0;
   background-color:#fa8072;
}
input {
  border: 2px solid rgb(234, 0, 255);
  border-radius: 4px;
  width: 60%;
}
input:focus {
  background-color:rgb(255, 131, 152);
}
label{
    font-size: x-large;
    color: rgb(4, 0, 255);
}
.outer{
    padding: 30px;
    height:100%;
}
.inner{
    top:50%;
    margin: auto;
    border-radius: 3px;
    height:auto;
}
.container {
  height: 600px;
  position: relative;
}
.center {
  margin: 0;
  position: absolute;
  top: 60%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
.center2{
    margin: 0;
  position: absolute;
  top: 20%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
table {
color:purple;
width:50%;
align-self: center;
  border: 2px solid black;
  border-collapse: collapse;
  margin: 0 auto;
}
th, td {
   color:purple;
  border: 2px solid black;
  border-collapse: collapse;
}
</style>
</head>
<body>
<div class="bg"> 
<div class="container" style="text-align: center;">
<br><br>
<div class="center2" style="top:32px;font-size: xx-large;background-color:rgb(10, 164, 202);text-align: center;color:white; width: 70% ;border:3px solid  black;padding: 10px;">Enter the Ticket Details</div>
<br><br><br><br>
<div top:200px; style="font-size: x-large;color:blue;">Ticket Cost showwise</div>

<div style="width:100%;height:200px;">
<table bgcolor="cyan">
      <tr><th>Show</th><th>Timing </th><th>Price</th></tr>
      <tr><td>Morning</td><td>10:00:00 </td><td>120</td></tr>
      <tr><td>Afternoon </td><td>15:00:00</td><td>186</td></tr>
      <tr><td>Evening </td><td>21:00:00 </td><td>200 </td></tr>
</table>
</div>
</div>
<br><br>
<div class="center" style="background-color:#ffa07a;top:550px;width: 50%;border: 5px solid darkblue;">
<form id="form1" action="insert.php" method="POST" >
    <br>
<label for="cname">Customer Name:</label><br>
<input type="text" id="cname" name="cname"><br><br>
<label for="email_id">Email Id:</label><br>
<input type="email" id="email_id" name="email_id"><br><br>
<label for="phone_no">Phone Number:</label><br>
<input type="number" id="phone_no" name="phone_no"><br><br>
<label for="Day">Day:</label><br>

<select name="Day" size="1" id="Day" title="Movie" style="width:60%;height:35px">
  <option disabled selected>--Select Day--</option>
  <option value="Monday">Monday</option>
  <option value="Tuesday">Tuesday</option>
  <option value="Wednesday">Wednesday</option>
  <option value="Thursday">Thursday</option>
  <option value="Friday">Friday</option>
  <option value="Saturday">Saturday</option>
  <option value="Sunday">Sunday</option>
</select>
<br>
<br>
<label for="Movie">Movie:</label><br>
<select name="Movie" size="1" id="Movie" style="width:60%;height:35px;" title="Movie">   
  <option disabled selected>--Select Movie--</option>
     <?php
     include "db_con.php";
          $a = mysqli_query($db,"SELECT m_name From movie");
  
          while($i = mysqli_fetch_array($a))
          {
              echo "<option value='". $i['m_name'] ."'>" .$i['m_name'] ."</option>";
          }	
      mysqli_close($db);
  ?>
  </select>
<br>
<br>
<label for="Timing">Timing:</label><br>
<select name="Timing" size="1" id="Timing" style="width:60%;height:35px;" title="Movie">
   <option disabled selected>--Select Timing--</option>
      <?php   
        include "db_con.php";
        $a = mysqli_query($db,"SELECT s_type From shows");
        while($i = mysqli_fetch_array($a))
        {
            echo "<option value='". $i['s_type'] ."'>" .$i['s_type'] ."</option>";
        }	
        mysqli_close($db);
    ?>
</select>
<br><br>  
<label for="No">Number of Tickets required</label>
<br>
<input type="number" id="No" name="No">
<br>
<br>
<input type="submit" name="submit" value="Submit" style="width: 20%;">
<br>
</form>
</div>
</div>
</div>
</div>
</body>
</html>