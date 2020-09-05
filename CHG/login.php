<?php

if($_SERVER['REQUEST_METHOD']=='GET')
{
	//variables
	$error=true;
	$msg="Failure";
    $result = array();

	//Getting values 
	$uid=$_GET['uid'];
	$upwd = $_GET['upwd'];

	
	//Connection with database and selection of database
	$con = mysqli_connect("localhost","id8580185_scott","bts2019");
	
	$db=mysqli_select_db($con,"id8580185_bts");
	if($db)
	{
	    echo "selected";
	}
			
	//Query
	$sql = "select * from USER where Userid='$uid' and password='$upwd'";
	$cmd=mysqli_query($con,$sql);

	//Fetching Record
        if($ans=mysqli_num_rows($cmd)>0)
        {
            $error=false;
            $msg="Success";
            array_push($result,array("error"=>$error,"msg"=>$msg));
             print json_encode(array("result"=>$result));  
        }
        else
            echo "Failure";
       
	
	mysqli_close($con);
}
?>

