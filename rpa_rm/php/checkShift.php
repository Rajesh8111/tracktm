<?php

session_start();
require_once 'connect.php';


$emp_id = $_SESSION['emp_id'];

$res=mysqli_query($con, "SELECT * FROM sessions WHERE Emp_id='$emp_id' and End_time='0000-00-00 00:00:00' and Duration=0")  or die("Error: ".mysqli_error($con));

$count = mysqli_num_rows($res);

if($count == 1){
    $row=mysqli_fetch_array($res, MYSQLI_ASSOC);    
    $_SESSION['shift_id']=$row['Session_id'];
    echo 'End Shift';
}
else if($count == 0){
    echo 'Start Shift';
}
else{
    throw new Exception("More Records of sessions found.");
}
?>