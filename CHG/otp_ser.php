<?php
	session_start();
	if(isset($_SESSION['email']))
	{$msg='';
	$email=$_SESSION['email'];
	
	if(isset($_SESSION['email']))
	{
		for($i=0;$i<4;$i++)
		{
			$msg=$msg.rand(0,9);
		}
		$_SESSION['otp']=$msg;
	    

	  header('location:send-text-email.php');
	}
	else
	{
		header('location:index1.php');
	}}
	else
	        header('location:index1.php');
	        
	
?>