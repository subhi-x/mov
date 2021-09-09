<?php 
include "db_con.php";

if(isset($_POST['submit']))
{		
    $cname = $_POST['cname'];
    $em = $_POST['email_id'];
    $ph = $_POST['phone_no'];

    if(!empty($_POST['Day'])) {
        $day = $_POST['Day'];
    } 

    if(!empty($_POST['Movie'])) {
        $mov = $_POST['Movie'];
    } 
    
    if(!empty($_POST['Timing'])) {
        $tim = $_POST['Timing'];
    }

    if(!empty($_POST['No'])) {
        $no = $_POST['No'];
    }

    $insert = mysqli_query($db,"INSERT INTO `customer` (`c_name`,`email_id`,`phone_no`) 
    VALUES ('$cname','$em','$ph')");

    $insert2 = mysqli_query($db,"INSERT INTO `ticket` (`Name`,`phone_no`,`email_id`,`day`,`movie`,`timing`,`no_of_tickets`) VALUES ('$cname','$ph','$em','$day','$mov','$tim','$no')");

    if(!$insert)
    {
        echo mysqli_error($db);
        echo "Records entry Unsuccessful";
    }
    else
    {
        header('location: display.php');
    }
}
mysqli_close($db);
?>