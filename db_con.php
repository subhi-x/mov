<?php
$db=mysqli_connect("localhost","root","","ticket_db");

if($db){
    echo("Successfully connected");
}
if(!$db){
die("Connection Failed" .mysqli_connect_error());
}

?>