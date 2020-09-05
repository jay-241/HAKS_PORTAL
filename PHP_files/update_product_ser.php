<?php
session_start();
if(!isset($_SESSION['aid'])){ header("location:admin_login.php?msg=Login First to access home page");}
if (isset($_POST['submit'])){} else{ header("location:update_product.php"); }


$target_dir = "uploads/image/";
//echo strlen($target_dir);
//echo $_FILES["fileToUpload"]["name"];
$target_file = $target_dir ."1000". basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
while (file_exists($target_file)) {
	//echo substr($target_file,strlen($target_dir),1);
	$i=(int)substr($target_file,strlen($target_dir),4);
	echo $i;
	$i++;
    //echo "Sorry, file already exists.";
    $uploadOk = 1;
	$target_file = $target_dir .$i. basename($_FILES["fileToUpload"]["name"]);
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 50000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
	$con= mysqli_connect("localhost","root","");
    $db=mysqli_select_db($con,"haks_portal");


		
		
		
	
	
	
	$P_id=$_SESSION['P_id'];
	$P_name=$_POST['P_name'];
	$P_category=$_POST['P_category'];
	$P_availability=$_POST['P_availability'];
	$P_price=$_POST['P_price'];
	$P_company=$_POST['P_company'];
	$P_expirydate=$_POST['P_expirydate'];
	$P_link=$target_file;
		
	if($_POST['P_isOffer']==="YES")
	{	$P_isOffer=1;
	$P_oprice=$_POST['P_oprice'];}
	else
	{	$P_isOffer=0;
		$P_oprice=0;
	}
	
	$_SESSION['fpid']=$_SESSION['P_id'];
	$_SESSION['fpname']=$P_name;//Fetched Detail Name
	$_SESSION['fpcategory']=$P_category;
	$_SESSION['fpavailability']=$P_availability;
	$_SESSION['fpprice']=$P_price;
	$_SESSION['fpcompany']=$P_company;
	$_SESSION['fpexpirydate']=$P_expirydate;
	$_SESSION['fplink']=$P_link;
	$_SESSION['fpisOffer']=$P_isOffer;
	$_SESSION['fpoprice']=$P_oprice;			

	
	
	
	
	
	
	
	
	$query="update product set P_name='".$P_name."',P_category='".$P_category."',P_availability=".$P_availability.",P_price=".$P_price.",P_company='".$P_company."',P_description='".$P_expirydate."',P_link='".$target_file."',P_isOffer=".$P_isOffer.",P_oprice=".$P_oprice." where P_id ='".$_SESSION['P_id']."'";

	$result=mysqli_query($con,$query);
	
	
	if($result>0)
	{
		unset($_SESSION['P_id']);
		header("location:update_product.php?error=Product Updated");
	}
	}
}	
?>
