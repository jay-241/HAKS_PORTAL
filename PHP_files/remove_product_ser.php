<?php
session_start();
if(!isset($_SESSION['aid'])){ header("location:admin_login.php?msg=Login First to access home page");}
if (isset($_POST['submit'])){} else{ header("location:remove_product.php"); }
	$P_id=$_POST['P_id'];
$con= mysqli_connect("localhost","root","");	
    $db=mysqli_select_db($con,"haks_portal");
    $query="select * from product where P_id='".$_POST['P_id']."'";
    $result=mysqli_query($con,$query);

	echo mysqli_num_rows($result);
	if(mysqli_num_rows($result)==1)
    {
		$query="delete from product where P_id ='".$P_id."'";

		$result=mysqli_query($con,$query);
	
		if(mysqli_affected_rows($con)>0)
		{
			header("location:remove_product.php?error=Product Removed");
		}	
	}
	else{
		header("location:remove_product.php?error=Product Not Found");
	}
?>
