<?php
$to = $_GET['uemail'];
$subject = 'verification';
	
$msg="";
    
    	for($i=0;$i<4;$i++)
		{
			$msg=$msg.rand(0,9);
		}
		
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
$mail->Port       = 587;
$mail->Host       = "smtp.gmail.com";
$mail->Username   = "colorhuntgame@gmail.com";
$mail->Password   = "25812581";



$mail->IsHTML(true);
$mail->AddAddress($to, "");
$mail->SetFrom("colorhuntgame@gmail.com", "HAKS PORTAL");
$mail->AddReplyTo("syash2581@gmail.com", "Shah Yash");
//$mail->AddCC("cc-recipient-email@domain", "cc-recipient-name");
$mail->Subject = $subject;
$content = "<b>".$message."</b>";



$mail->MsgHTML($content); 
if(!$mail->Send()) {
  //echo "Error while sending Email.";
  //var_dump($mail);
} else {
  echo "Email sent successfully";
  header("location:set_new_pwd.php");
}
?>