<?php session_start();
    if($_POST['email']!=NULL)
	{
		$email=$_POST['email'];
		$_SESSION['email']=$email;
		header('location:otp_ser.php');
	}
	else
	{
		header('location:index1.php');
	}
?>

