<?php
session_start();

	if(!isset($_POST['submit'])){
		header("location:Forgot_pwd.php?error=Mind Your Own Business");
	}
	else{
			if($_POST['unpwd']===$_POST['urnpwd'])
			{
				$con= mysqli_connect("localhost", "root", ""); 
				$db= mysqli_select_db($con,"HAKS_PORTAL"); 
    
				$uname="'".$_SESSION['uid']."'";
				$uemail="'".$_SESSION['uemail']."'";
				$upwd="'".$_POST['unpwd']."'";
				
				
				$query="select * from customer where cb_id=$uname and c_email=$uemail";
				$cmd=mysqli_query($con,$query);
			
				if($row=mysqli_fetch_array($cmd))
				{
					$query="update customer set c_pwd=$upwd where cb_id=$uname and c_email=$uemail";
					$cmd=mysqli_query($con,$query);
					if($cmd)
					{
						header("location:Forgot_password.php?error=Password set Successfully");
					}
					else
					{
						header("location:Forgot_password.php?error=Some Error Occured Try Again After Some Time");
					}
				}
				else{
					header("location:Forgot_password.php?error=Incorrect User Id or Email !!! Please Register First or Enter Correct Credentials");
				}
				
				
				/*echo $uname."<br>".$uemail."<br>".$upwd;
				
				$query="update customer set c_pwd=$upwd where c_name=$uname and c_email=$uemail";
				echo $query;
				$cmd=mysqli_query($con,$query);
				if($cmd){
					header("location:Forgot_password.php?error=Password set Successfully");
				}
				else
				{
					//header("location:Forgot_password.php?error=Incorrect User name or Email");
				}*/
			}
			else{
				header("location:new_pwd.php?error=Enter Same Password for Both Fields");
			}
	}
		

?>