<?php
session_start();

if(!isset($_POST['submit'])){
	header("location:Forgot_Password.php?error=this ... Mind Your Own Business");
}
else
{
	//echo "".$_SESSION['uotp']."";
	$_SESSION['unpeamil']=$_POST['uname'];//user new password email
	$_SESSION['unpname']=$_POST['uemail'];//user new password name
	if(isset($_SESSION['uotp'])){
		if($_SESSION['uotp']==$_POST['uotp'])
		{
			header("location:new_pwd.php");
		}
		else{
			header("location:set_pwd_cli.php?error=Invalid OTP");
		}
	}
}
?>