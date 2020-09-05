<html>
	<head>
		<title> Feedback site </title>
		<link rel="shortcut icon" href="ic_launcher_demo.png"/>
		<style>
			body{ border:3px solid red; border-radius:05%;}
			div#center1{
				height:100%;
				width:100%;
				//background-color:#999999;
				background-color:skyblue;
				border:2px solid red;
				border-radius:05%;
				font: Times New Roman bold;
			}
			font.a{
				color:yellow;
				family:Times New Roman;
				size:5px;				
			}
			marquee{
				margin-top:20px;
				border:meedium;
				background:linear-gradient(to right,red,red);
			}
			hr{
				border-width:2px;
			}	
			tt{
				text-align:center;
				text-color:green;
			}
			u{
				bgcolor=red;}
		</style>
	</head>
	<body>
		<div id="center1" align="center">
		<font class="a"><marquee><big><big>
				Color Hunt Game &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
					       Color Hunt Game &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
					       Color Hunt Game &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
					       Color Hunt Game &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					       Color Hunt Game &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
					       Color Hunt Game &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					       Color Hunt Game &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					       Color Hunt Game &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				
			</big></big></marquee></font><br><br><hr color="red">
			<h1><font color="Blue"><u> Acknowlwdgement </u></font></h1>
			<font color="green" size="5px"><?php
			if($_POST['email']!="" && $_POST['uname']!="" && $_POST['feedback']!="" && $_POST['stars']!="")
			{	 echo "<br><br>Thank You, ";
				 echo "<font color=\"red\" size=\"5px\"><tt><u>".$_POST['uname']."</u></tt></font> to provide your valuable feedback ";
				 echo "<font color=\"red\" size=\"5px\"><tt><u>\"".$_POST['feedback']."\"</u></tt></font> and give";
				 echo "<font color=\"red\" size=\"5px\"><tt><u>\"".$_POST['stars']."\"</u></tt></font> stars to my game. The link for the game is sent to the given email ";
				 echo "<font color=\"red\" size=\"5px\"><tt><u>\"".$_POST['email']."\"</u></tt></font>.<br>";
				 echo "<br><br><br><font color=\"blue\" size=\"5px\">Have A Nice Day !!!!...<img src=\"dsd.jpg\"></img><img src=\"dsd.jpg\"></img><img src=\"dsd.jpg\"></img> </font><br>"; 
				 
				 //header('location:feedback_ser.php'); 
			}
			else
			{		
				echo "one or more is not perfact";
				header('location:index.php');
			}
?>
</font>
		
		</div>
	</body>
</html>