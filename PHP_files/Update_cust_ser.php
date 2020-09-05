<?php
session_start();
if (isset($_POST['submit'])){} else{ header("location:index2.php"); }

	$con= mysqli_connect("localhost","root","");
    $db=mysqli_select_db($con,"haks_portal");
    $query="select * from customer where cb_id='".$_SESSION['cid']."'";
    $result=mysqli_query($con,$query);

	$name=$_POST['cname'];
	$contact=$_POST['ccno'];
	$email=$_POST['cemail'];
	$addr=$_POST['cadd'];
	$city=$_POST['ccity'];
	
	
	
	$query="update Customer set c_name='".$name."',c_email='".$email."',c_contact=".$contact.",c_add='".$addr."',c_city='".$city."' where cb_id ='".$_SESSION['cid']."'";
	$result=mysqli_query($con,$query);
	
	
	if($result>0)
	{
			header("location:customer_account.php");
	}
	
?>
