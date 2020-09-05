<?php
	session_start();
	if(isset($_GET['C_id']) && $_SESSION['cid'])
	{
		$cid=$_GET['C_id'];
		$con=mysqli_connect("localhost","root","");
		$db=mysqli_select_db($con,"haks_portal");
		
		if(isset($_GET['pid']))
		{
			$pid=$_GET['pid'];
			$query="delete from cart where C_id ='$cid' and P_id='$pid'";		
			$cmd=mysqli_query($con,$query);
			if($cmd)
			{
				header("location:cart.php?msg=Your product has been removed");
			}
		}
		else
		{
			$query="delete from cart where C_id ='$cid'";
			$cmd=mysqli_query($con,$query);
			if($cmd)
			{
				header("location:cart.php?msg=Your cart has been cleared");
			}
		}
		//echo $query;
		
	}
	else
	{
		header("location:index2.php");
	}
?>