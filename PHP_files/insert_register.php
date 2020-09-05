
<?php
session_start();
    $con= mysqli_connect("localhost", "root", ""); 
    $db= mysqli_select_db($con,"HAKS_PORTAL"); 
    
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

$conn = mysqli_connect('localhost', 'root', '', '');

$sql = "SELECT * FROM customer";
$result = mysqli_query($conn,$sql);

//$files = mysqli_fetch_row($result, mysqli_ASSOC);

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
    $cmd=mysqli_query($con,$query);
    if(!$cmd){
       $_SESSION['error']=mysqli_error($con);
    }
    if($cmd)
    {
		if(isset($_SESSION['error'])){ unset($_SESSION['error']); }
        header("location:home.php");
    }
    else
    {
        header("location: registration.php");
        
   }
?>