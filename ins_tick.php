<?php 
include "db_con.php";
if(isset($_POST['submit']))
{		
    $a1 = $_POST['Movie'];      //a1=m_name
    echo $a1;
    $a= mysqli_query($db, "SELECT m_id FROM movie where m_name=$a1 limit 1");   //a=m_id
    $b1 = $_POST['Timing'];      //b=start_time
    echo "$b1";
    $b=mysqli_query($db, "SELECT start_time FROM shows where s_type=$b1 limit 1");  //b1=s_type
    echo "$b";
    $c=mysqli_query($db, "SELECT run_time FROM movie where m_id=$a LIMIT 1");  //c1=run_time
    $d1=$_POST['Day'];
    $d=mysqli_query($db, "SELECT dates FROM days where day=$d1");   //d=date
    $e1=mysqli_query($db, "SELECT count FROM seat_count where (day=$d1 && t_id=$a && s_type=$b1 limit 1");
    $e=$e1+1;
    $f=$a;  //f=t_id
    $h= mysqli_query($db,"SELECT curdate()");
    $i= mysqli_query($db, "SELECT admin_id FROM employee where t_id=$a limit 1");   //i=admin_id
    $j = $_POST['Discount'];        //j=offer_id
    echo "$j";
    $per=mysqli_query($db, "SELECT percent FROM discount where offer_id=$j limit 1");
    $org=mysqli_query($db, "SELECT cost FROM shows where start_time=$b limit 1");
    $g=$org-$per;       //g=price after discount
    echo "$g";
    $l=$_POST['Phone_no'];  //l=phone_no
    $k=mysqli_query($db, "SELECT c_id FROM customer where phone_no=$l limit 1");    //k=c_id
    $m=$_POST['No'];
    $insert = mysqli_query($db,"INSERT INTO `ticket` (`m_id`,`start_time`,`run_time`,`date`,`seat_no`,`t_id`,`price`,`b_date`,`admin_id`,`offer_id`,`c_id`,`phone_no`,`no_of_tickets`) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m')");

    if(!$insert)
    {
        echo mysqli_error($db);
        echo "Records entry Unsuccessful";
    }
}

mysqli_close($db);
?>