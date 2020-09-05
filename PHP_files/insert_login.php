<?php
session_start();
                $con= mysqli_connect("localhost","root","");
                $db=mysqli_select_db($con,"haks_portal");
                $query="select * from customer";
                $result=mysqli_query($con,$query);
				$flag=false;
            while($row = mysqli_fetch_array($result))
             {
				//echo $row[6];

                	if(strcmp($_POST['aduname'],$row[0])==0)
					{
						if( strcmp($_POST['adpass'],$row[6])==0)
						{
                    		$_SESSION['cid']=$_POST['aduname'];
							$_SESSION['cname']=$row[1];
							$_SESSION['uname']=$row[1];
                        	header("Location: home.php?f=index");
							$flag=true;
						}
                 		else
                 		{	
							$_SESSION['error']="Invalid Username Or Password";
							//echo "Hello World";
							header("Location: login.php");
                 		}
                	}
           }
		   if(!$flag)
		   {
			$_SESSION['error']="Invalid Username Or Password";
			header("location:login.php");
		   }
?>