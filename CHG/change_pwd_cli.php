<html>
	<head>
		<title>Set New Password</title>
		<link rel="shortcut icon" href="ic_launcher_demo.jpg"/>
	</head>
    <?php session_start(); ?><body>
    <article>
        <header><B><center><font color="blue"> Welcome Site For Set A New Password Of Color Hunt Game </font></center></B></header><br><br><?php 
    if(isset($_SESSION['email']))
    {?>
            <center><form action="change_pwd_ser.php" method="post">
             <font size="2" color="red">Enter Your New Password</font><br>
            Enter New Password:<input type="password" name="npwd"><br>
            Re-Enter New Password:<input type="password" name="rnpwd"><br>
            <input type="submit" name="submit" value="submit"></form></center>
        <?php } else    header('location:index1.php'); ?>
        <br><br><footer  background="background.jpg"><center><font size="1" color="red">Design And Developed By</font><font size="1" color="blue"><b><u>YASH H SHAH</u></b></font></center></footer>
</article></body></html>
    
