<?php
session_start();
$to ;//= $_POST['uemail'];
$uname=$_POST['uname'];

$con= mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"haks_portal");
$query="select * from customer";
$result=mysqli_query($con,$query);

while($row = mysqli_fetch_array($result))
{
	//echo $row[6];

    if(strcmp($_POST['uname'],$row[0])==0)
	{
		//$_SESSION['cid']=$_POST['aduname'];
		$_SESSION['cname']=$row[1];
		$_SESSION['uname']=$row[1];
        $_SESSION['uemail']=$row[2];
		$to=$row[2];
		echo $to;
		break;
	}
    else
    {	
		$_SESSION['error']="Invalid Username Or Password";
		//echo "Hello World";
		header("Location: Forgot_Password.php?error=Invalid User Id");
	}
}

$uemail=$to;

$_SESSION['uid']=$uname;
$_SESSION['uemail']=$uemail;
$subject = 'verification';
	
$msg="";
    
    	for($i=0;$i<4;$i++)
		{
			$msg=$msg.rand(0,9);
		}
	$_SESSION['uotp']=$msg;	
    $message =$msg." is your verification code for changing new password for HAKS PORTAL"; 
	
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';


$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";

$mail->SMTPDebug  = 1;  
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port       = "587";
$mail->Host       = "smtp.gmail.com";
$mail->Username   = "colorhuntgame@gmail.com";//Lifeho.toashi@gmail.com
$mail->Password   = "25812581";//ganpaa23AK



$mail->IsHTML(true);
$mail->AddAddress($to, "");
$mail->SetFrom("Lifeho.toashi@gmail.com", "HAKS PORTAL");
$mail->AddReplyTo("syash2581@gmail.com", "Yash Shah");//krupa.patel239@gmail.com//Krupa Patel
//$mail->AddCC("cc-recipient-email@domain", "cc-recipient-name");
$mail->Subject = $subject;
$content = "<b>".$message."</b>";

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);


$mail->MsgHTML($content); 
if(!$mail->Send()) {
  //echo "Error while sending Email.";
  //var_dump($mail);
} else {
  echo "Email sent successfully";
 
  header("location:set_pwd_cli.php");
}
?>