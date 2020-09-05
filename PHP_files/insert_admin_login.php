<?php
session_start();
                $con= mysqli_connect("localhost","root","");
                $db=mysqli_select_db($con,"haks_portal");
                $query="select * from admin where a_id='".$_POST['aduname']."'";
                $result=mysqli_query($con,$query);

	if($row = mysqli_fetch_array($result))
    {
		if(strcmp($_POST['aduname'],$row[0])==0)
		{
			if( strcmp($_POST['adpass'],$row[5])==0)
			{
				$_SESSION['aid']=$_POST['aduname'];
                        		
				echo $_POST['aduname']."<br>";
				echo $_POST['adpass'];
				$_SEESION['aid']=$_POST['aduname'];
				unset($_SEESION['error2']);
				header("Location: admin_home.php");
			}
			else
			{	
		$_SESSION['error2']="Invalid Username and Password";
				header("Location:admin_login.php");
			}
		}
		else{
			$_SESSION['error2']="Invalid Username and Password";
			header("Location:admin_login.php");
		}
	}
	else{
		$_SESSION['error2']="Invalid Username and Password";
		header("Location:admin_login.php");
	}

?>