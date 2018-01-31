<?php
session_start();
require_once 'connect.php';

if(isset($_POST['username']))
{
	$username = explode('@',mysqli_real_escape_string($con, $_POST['username']))[0];
	$mail = $username.'@prodapt.com';
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$res=mysqli_query($con, "SELECT * FROM users WHERE Mail='$mail'")  or die("Error: ".mysqli_error($con));
	$row=mysqli_fetch_array($res, MYSQLI_ASSOC);

	//echo $username;
	

	if($password!='' and $row['Password']==md5($password))
	{
		$_SESSION['emp_id'] = $row['Emp_id'];
		$_SESSION['username']= $username; 	
		$_SESSION['role_id']= $row['Role_id'];
		header('Content-type: image/jpg');
		$_SESSION['avatar'] = $row['Avatar'];
		echo 'true';
	}
	else
	{
		echo 'false';
	}
	
	
}
?>