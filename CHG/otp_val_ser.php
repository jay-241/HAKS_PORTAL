<?php
    session_start();
    if($_POST['otp']!=NULL)
    {
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
               
                if($row[0]==$_SESSION['email'])
                {
                    $otp=$row[1];
                    $flag=true;
                    break;
                }
                else
                {
                    $flag=false;
                }
        }
        //echo $flag;
        
        if($_POST['otp']==$otp)
            header("location:change_pwd_cli.php");
        else
            header("location:otp_val_cli.php");
    }
    else
    {
        header("location:otp_val_cli.php");
    }
   
?>