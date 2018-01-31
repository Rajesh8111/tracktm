<?php

session_start();
require_once 'connect.php';

if(isset($_SESSION['emp_id']))
{
    //Set Timezone
    date_default_timezone_set("Asia/Kolkata");

    $emp_id = $_SESSION['emp_id'];
    if(isset($_SESSION['shift_id'])){
    $session_id = $_SESSION['shift_id'];
    }
    $method = $_POST['method'];
    $date =     date('Y-m-d');
    $timestamp =  date('Y-m-d H:i:s');

    if($method == 'Start Shift'){
        $sql = "Insert into sessions (Emp_id,Date,Start_time) values('".$emp_id."','".$date."','".$timestamp."')";
        $res=mysqli_query($con,$sql)  or die("Error: ".mysqli_error($con));
        echo 'true';
    }
    else if($method == 'End Shift'){
        
        $sql = "SELECT Start_time FROM sessions WHERE Session_id=$session_id";
        $res=mysqli_query($con,$sql)  or die("Error: ".mysqli_error($con));
        $row=mysqli_fetch_array($res, MYSQLI_ASSOC);
        
        //Get Starttime
        $Start_time = $row['Start_time'];

        $duration = round((strtotime($timestamp) - strtotime($Start_time))/3600,1);

        //Close Shift
        $sql = "update sessions set End_time='".$timestamp."',Duration='$duration' where Session_id=$session_id";
        $res=mysqli_query($con,$sql)  or die("Error: ".mysqli_error($con));
        echo 'true';
    }

    
}

?>