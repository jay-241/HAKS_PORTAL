<?php
session_start();
$status=$_POST["status"];
$firstname=$_POST["firstname"];
$amount=$_POST["amount"];
$txnid=$_POST["txnid"];
$posted_hash=$_POST["hash"];
$key=$_POST["key"];
$productinfo=$_POST["productinfo"];
$email=$_POST["email"];
$salt="";

// Salt should be same Post Request 

If (isset($_POST["additionalCharges"])) {
       $additionalCharges=$_POST["additionalCharges"];
        $retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
  } else {
        $retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
         }
		 $hash = hash("sha512", $retHashSeq);
       if ($hash != $posted_hash) {
	       echo "Invalid Transaction. Please try again";
		   } else {
          echo "<h3>Thank You. Your order status is ". $status .".</h3>";
          echo "<h4>Your Transaction ID for this transaction is ".$txnid.".</h4>";
          echo "<h4>We have received a payment of Rs. " . $amount . ". Your order will soon be shipped.</h4>";
		   }
	
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"haks_portal");
	
if(isset($_SESSION['item']) && $_SESSION['item']==true)
{
	$query1="select * from cbill";
	$cmd=mysqli_query($con,$query1);
	if($cmd)
	{
		$num=mysqli_num_rows($cmd);
		$num=$num+1;
		$temp_query="select * from Product where P_id='".$_SESSION['pi_id']."'";
		$cmdtemp_query=mysqli_query($con,$temp_query);
		if($cmdtemp_query)
		{
			$row=mysqli_fetch_row($cmdtemp_query);
			$price=($row[8]==1)?$row[9]:$row[4];
		}
		
		$query2="insert into cbill values($num,".date().",$price)";
		$cmd2=mysqli_query($con,$query2);
		
		$C_id=$_SESSION['cid'];
		$P_id=$_SESSION['pi_id'];
		$query3="update cart set CB_id=$num,ack=1 where C_id='$C_id' and P_id='$P_id'";
		$cmd3=mysqli_query($con,$query3);
		
		$query4="update product set P_availability=P_availability-1 where P_id='$P_id'";
		$cmd4=mysqli_query($con,$query4);
	}
}
else if(isset($_SESSION['item']) && $_SESSION['item']==false)
{
	$query1="select * from cbill";
	$cmd=mysqli_query($con,$query1);
	if($cmd)
	{
		$num=mysqli_num_rows($cmd);
		$num=$num+1;
		$temp_query="select * from Product where P_id='".$_SESSION['pi_id']."'";
		$cmdtemp_query=mysqli_query($con,$temp_query);
		if($cmdtemp_query)
		{
			$row=mysqli_fetch_row($cmdtemp_query);
			$price=($row[8]==1)?$row[9]:$row[4];
		}
		
		$query2="insert into cbill values($num,".date().",$price)";
		$cmd2=mysqli_query($con,$query2);
		
		$C_id=$_SESSION['cid'];
		$P_id=$_SESSION['pi_id'];
		$query3="update cart set CB_id=$num,ack=1 where C_id='$C_id' and P_id='$P_id'";
		$cmd3=mysqli_query($con,$query3);
		
		$query4="update product set P_availability=P_availability-1 where P_id='$P_id'";
		$cmd4=mysqli_query($con,$query4);
	}
}
?>	