
<?php
session_start();
    $con= mysql_connect("localhost", "root", ""); 
    $db= mysql_select_db($con,"HAKS_PORTAL"); 
    
	$cbid=$_POST['cbid'];
    $cname=$_POST['cname'];
    $cemail=$_POST['cemail'];
    $ccno=$_POST['ccno'];
    $cadd=$_POST['cadd'];
    $ccity=$_POST['ccity'];
    $cpwd=$_POST['pwd'];
    
	/*$pwd=$_POST['Password'];
    $course=$_POST['Course'];
    $pyear=$_POST['Passingyear'];
    $medium=$_POST['Medium'];
    $college=$_POST['College'];
    $university=$_POST['University'];*/

$conn = mysql_connect('localhost', 'root', '', '');

$sql = "SELECT * FROM student";
$result = mysql_query($conn, $sql);

$files = mysql_fetch_row($result, mysql_ASSOC);

// Uploads files
if (isset($_POST['submit'])) { // if save button on the form is clicked
    // name of the uploaded file
    //$filename = $_FILES['file']['name'];

    // destination of the file on the server
    //$destination = 'uploads/' . $filename;

    // get the file extension
    //$extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    //$file = $_FILES['file']['tmp_name'];
    //$size = $_FILES['file']['size'];

    /*if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
        echo "You file extension must be .zip, .pdf or .docx";
    } elseif ($_FILES['file']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
        }
    }*/
}




    $query="insert into  customer  values('$cbid','$cname','$cemail',$ccno,'$cadd','$ccity','$cpwd')";
    $cmd=mysql_query($con,$query);
    if(!$cmd){
       $_SESSION['error_reg']=mysql_error($con);
    }
    if($cmd)
    {if (isset($_SESSION['error_reg'])) {
        unset($_SESSION['error_reg']);
    }

        header("location:index2.php");
    }
    else
    {
        header("location: registration.php");
   }
?>