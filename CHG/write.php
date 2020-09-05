<?php

if($_SERVER['REQUEST_METHOD']=='GET')
{
	//variables
	$error=true;
	$msg="Failure";

$uid=$_GET['uid'];
	$uemail=$_GET['uemail'];
	$password = $_GET['password'];
    	
	$result = array();

	//Getting values 
	
	
	//Connection with database and selection of database
	$con = mysqli_connect("localhost","id7387289_color","COLOR");
	
	$db=mysqli_select_db($con,"id7387289_color");
			
	//Query
	$sql = "update Player_info set upassword='$password' where uid='$uid' and uemail='$uemail'";

	$cmd=mysqli_query($con,$sql);
	
	if($cmd)
	{
 	 	$error=false;
           	 	$msg="Success";
            		array_push($result,array("error"=>$error,"msg"=>$msg));
            		print json_encode(array("result"=>$result));
	}
	else
	{
		echo "Failure";
	}
           }
        mysqli_close($con);

?>