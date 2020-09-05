<html>
	<head>
		<title>Set New Password</title>
		<link rel="shortcut icon" href="ic_launcher_demo.jpg"/>
	</head>
<?php  session_start(); ?><body>
    <article>
        <header><B><center><font color="blue"> Welcome Site For Set A New Password Of Color Hunt Game </font></center></B></header><br><br><center><?php
    if(isset($_SESSION['email']))
    {
        if($_POST['npwd'] == $_POST['rnpwd'])
        {
            $pwd=$_POST['npwd'];
            $con=mysqli_connect("localhost","id7387289_scott","tiger");
	        $db=mysqli_select_db($con,"id7387289_user_otp");
	        $email=$_SESSION['email'];
	        $msg=$_SESSION['otp'];
	        //echo $email."<br>";
	        $query="select * from user_otp";
            $cmd=mysqli_query($con,$query);
       
            while($row=mysqli_fetch_row($cmd))
            {
                    //print_r($row);
               
                  if($row[0]==$email)
                    {
                        $flag=true;
                        break;
                    }
                    else
                    {
                        $flag=false;
                    }
            }
            //echo $flag;
            if($flag==true)
            {
                $query="update user_otp set password='$pwd' where email='$email'";
                $cmd=mysqli_query($con,$query);
                if($cmd)
                {
                    echo "password set successfully";
                }
                else
                {
                    echo "password does not set";
                }
            }
            
        }
        else
            echo "password does not set try again!!!";
    }        
    
    else
    {
       header('location:index1.php');
    }
    session_destroy();
    
    
?>
</center>
 <br><br><footer  background="background.jpg"><center><font size="1" color="red">Design And Developed By</font><font size="1" color="blue"><b><u>YASH H SHAH</u></b></font></center></footer>
</article></body></html>
