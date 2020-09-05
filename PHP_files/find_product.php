<?php
session_start();
$to ;//= $_POST['uemail'];
$uname=$_POST['P_id'];

$con= mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"haks_portal");
$query="select * from product";
$result=mysqli_query($con,$query);

while($row = mysqli_fetch_array($result))
{
	//echo $row[6];

    if(strcmp($_POST['P_id'],$row[0])==0)
	{
		$_SESSION['P_id']=$_POST['P_id'];
		$_SESSION['P_name']=$row[1];
		$_SESSION['P_name']=$row[1];
        //$_SESSION['uemail']=$row[2];
		//$to=$row[2];
		break;
	}
    else
    {	
		$_SESSION['error']="Invalid Username Or Password";
		//echo "Hello World";
		header("Location: update_product.php?error=Invalid Product Id");
	}
}
header("location:fetch_product.php?P_id=$uname");
?>