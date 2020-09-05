<?php
	
	session_start();
	if(isset($_POST['submit']) || isset($_GET['f']))
	{
		if(isset($_SESSION["cpid"]))
		{
			$pid=$_SESSION["cpid"];
			$pname=$_SESSION["cpname"];
			$pcat=$_SESSION["cpcat"];
			$pavl=$_SESSION["cpavl"];
			$pprice=$_SESSION["cpprice"];
			$pcom=$_SESSION["cpcom"];
			$pdes=$_SESSION["cpdes"];
			$plink=$_SESSION["cplink"];
			$piof=$_SESSION["cpiof"];
			$pop=$_SESSION["cppo"];
			$date=date("Y-m-d");
			
			if(isset($_GET['f']) && $_GET['f']=="single-product")
			{
					$qty=1;
			}
			else{
				$qty=$_POST['qty'];
			}
			$Cid=$_SESSION['cid'];
			$msg="";
			
			
			
			
			
			
			$con=mysqli_connect("localhost","root","");
			$db=mysqli_select_db($con,"haks_portal");
			$query="select * from cart where C_id='$Cid' and P_id='$pid'";
			$cmd=mysqli_query($con,$query);
			
			if(mysqli_num_rows($cmd)==1)
			{
				$sqty=$qty;
				
				
				
				//$nqty=(int)$row[3]-$sqty;
				
				
				if($pavl<$qty)
				{
					//header("location:cart.php?msg=Your required quantity is more than available quantity for $pname");
					$msg="Your required quantity is more than available quantity for $pname";
				}
				else{
					$row=mysqli_fetch_row($cmd);
					$qty=$qty+$row[5];
					if($qty<=5 && $qty>0)
					{
						$query="update cart set P_name='$pname',P_link='$plink',qty='$qty',P_price='$pprice',P_isoffer='$piof',P_oprice='$pop',date='$date' where C_id='$Cid' and P_id='$pid'";
						$cmd=mysqli_query($con,$query);
						if($cmd)
						{
							//$query2="update product set P_availability=(select P_availability from product where P_id='$pid')-$sqty where P_id = '$pid'";
							//echo $query2;
							//$cmd2=mysqli_query($con,$query2);
							$msg="Your Product has been added successfully in your cart.";
							unset($_SESSION["cpid"]);
						}
						else{
							//header("location:");
							$msg="Your Product could not be added";
						}
					}
					else
					{
						//header("location:cart.php?msg=The product that you want to add is reached it's limit");
						$msg="The product that you want to add is reached it's limit";
					}
					//echo $query;
				}
			}
			else
			{
			
				$query="insert into cart values('','$Cid','$pid','$pname','$plink',$qty,$pprice,$piof,$pop,'$date',0,1,'','','','','')";
			
				//echo $query;
			
				$cmd=mysqli_query($con,$query);
			
				if($cmd)
				{
					$msg="Your Product has been added successfully in your cart";
					unset($_SESSION["cpid"]);
					//header("location:?cid=$_SESSION['cid']");
				}
				else
				{
					$msg="Your Product could not be added";
				}
			}
		}
		//echo $msg;
		if(isset($_GET['f']) && isset($_GET['p_id']))
		{
			header("location:checkout.php?f=single_product&p_id=$pid");
		}
		else
		{
			header("location:cart.php?msg=$msg");
		}
	}
	else
	{
		header("location:index2.php");
	}
?>