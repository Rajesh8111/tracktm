<?php
session_start();

if(isset($_SESSION['emp_id']))
{
    echo '{
        "emp_id":"'.$_SESSION['emp_id'].'",
         "username":"'.$_SESSION['username'].'",
          "role_id":"'.$_SESSION['role_id'].'",
          "avatar":"'.base64_encode($_SESSION['avatar']).'"
        }';
}
else{
    echo 'false';
}

?>