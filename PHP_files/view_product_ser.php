<?php
session_start();
if(!isset($_SESSION['aid'])){ header("location:admin_login.php?msg=Login First to access home page");}
if (isset($_POST['P_id'])){} else{ header("location:index2.php"); }

	$con= mysqli_connect("localhost","root","");
    $db=mysqli_select_db($con,"haks_portal");
    $query="select * from product where P_id='".$_POST['P_id']."'";
    $result=mysqli_query($con,$query);

	
	$P_id="";
	$P_name="";
	$P_category="";
	$P_availability="";
	$P_price="";
	$P_company="";
	$P_expirydate="";
	$P_link="";
	$P_isOffer="";
	$P_oprice="";

	if($row = mysqli_fetch_array($result))
    {
			$P_name=$row[1];
			$P_category=$row[2];
			$P_availability=$row[3];
			$P_price=$row[4];
			$P_company=$row[5];
			$P_expirydate=$row[6];
			$P_link=$row[7];
			
			if($row[8]==1)
				$P_isOffer="YES";
			else
				$P_isOffer="NO";
			$P_oprice=$row[9];
	
			$_SESSION['fpid']=$row[0];
			$_SESSION['fpname']=$P_name;//Fetched Detail Name
			$_SESSION['fpcategory']=$P_category;
			$_SESSION['fpavailability']=$P_availability;
			$_SESSION['fpprice']=$P_price;
			$_SESSION['fpcompany']=$P_company;
			$_SESSION['fpexpirydate']=$P_expirydate;
			$_SESSION['fplink']=$P_link;
			$_SESSION['fpisOffer']=$P_isOffer;
			$_SESSION['fpoprice']=$P_oprice;			
	}
	else{
		header("location:view_product.php?error=Product Not Found");
	}
?>

<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>HAK'S PORTAL</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="vendors/animate-css/animate.css">
	<link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css">
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
	<script type="text/javascript">
        function preventBack() { window.history.forward(); }
        setTimeout("preventBack()", 0);
        window.onunload = function () { null }; 
    </script>
</head>

<body>

	<!--================Header Menu Area =================-->
	<header class="header_area">
		<div class="top_menu row m0">
			<div class="container-fluid">
				<div class="float-left">
					<p>Call Us: 7984915239</p>
				</div>
				<div class="float-right">
					<ul class="right_side">
						<li class="nav-item submenu dropdown">
							<a href="index2.php">
								Logout
							</a> 
							
							
							<!-- <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login/Register</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a class="nav-link" href="login.php">Customer</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="admin_login.php">Admin</a>
                                        </li>
                                    </ul> -->
							
						</li>
						<li>
							<a href="admin_account.php">
								My Account
							</a>
						</li>
						<!--<li>
							<a href="aboutus.html">
								About Us
							</a>
						</li>-->
					</ul>
				</div>
			</div>
		</div>
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="admin_home.php">
						<img src="img/logo.png" alt="">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					 aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<div class="row w-100">
							<div class="">
								<ul class="nav navbar-nav center_nav pull-right">
									<pre>	</pre>
									<li class="nav-item active">
										<a class="nav-link" href="admin_home.php">Home</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="upload_product.php">Add Product</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="remove_product.php">Remove Product</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="update_product.php">Update Poduct</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="view_product.php">Search Product</a>
									</li>
									<!--<li class="nav-item">
										<a class="nav-link" href="contact.php">Contact</a>
									</li>-->
									<!-- <li class="nav-item submenu dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a class="nav-link" href="category.html">Shop Category</a>
												<li class="nav-item">
													<a class="nav-link" href="single-product.html">Product Details</a>
													<li class="nav-item">
														<a class="nav-link" href="checkout.php">Product Checkout</a>
														<li class="nav-item">
															<a class="nav-link" href="cart.php">Shopping Cart</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" href="confirmation.html">Confirmation</a>
														</li>
										</ul>
									</li> -->
									<!-- <li class="nav-item submenu dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a class="nav-link" href="blog.html">Blog</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="single-blog.html">Blog Details</a>
											</li>
										</ul>
									</li>
									<li class="nav-item submenu dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a class="nav-link" href="login.php">Login</a>
												<li class="nav-item">
													<a class="nav-link" href="tracking.html">Tracking</a>
													<li class="nav-item">
														<a class="nav-link" href="elements.html">Elements</a>
													</li>
										</ul>
									</li> -->
									
								</ul>
							</div>

							<!-- <div class="col-lg-5">
								<ul class="nav navbar-nav navbar-right right_nav pull-right">
									<hr>
									<li class="nav-item">
										<a href="#" class="icons">
											<i class="fa fa-search" aria-hidden="true"></i>
										</a>
									</li>

									<hr>

									<li class="nav-item">
										<a href="#" class="icons">
											<i class="fa fa-user" aria-hidden="true"></i>
										</a>
									</li>

									<hr>

									<li class="nav-item">
										<a href="#" class="icons">
											<i class="fa fa-heart-o" aria-hidden="true"></i>
										</a>
									</li>

									<hr>

									<li class="nav-item">
										<a href="#" class="icons">
											<i class="lnr lnr lnr-cart"></i>
										</a>
									</li>

									<hr>
								</ul>
							</div> -->
						</div>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================Header Menu Area =================-->

	<!--================Home Banner Area =================-->
	<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			 <div class="container"> 
				<div class="banner_content text-center">
					<h2>Search Product</h2>
					<div class="page_link">
						<a href="Home.php">Home</a>
						<a href="view_product_server.php">Search Product</a>
					</div>
				</div>
			 </div> 
		</div>
	</section>
	<!--================End Home Banner Area =================-->

	<!--================Login Box Area =================-->
	<section class="login_box_area p_120">
		<div class="container">
			<div class="row">
				<!-- <div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="img/login.jpg" alt="">
						<div class="hover">
							<h4>New to our website?</h4>
							<p>There are advances being made in science and technology everyday, and a good example of this is the</p>
							<a class="main_btn" href="#">Create an Account</a>
						</div>
					</div>
				</div> -->
				<div class="col-lg-6">
					<div class="login_form_inner reg_form">
						<h3>Your Product Details</h3>
						<?php if(isset($_GET['error'])){ echo "<font color='red'>User already Registered!!!Try Some New Data</font>"; } ?>
						<form class="row login_form" action="admin_home.php" method="post" id="contactForm" enctype="multipart/form-data">
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="P_id" placeholder="Product Id" required="required" disabled="disabled" value=<?php echo $_POST['P_id']; ?>>
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="P_name" placeholder="Product Name" required="required" value=<?php echo $P_name; ?> disabled="disabled">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="P_category" placeholder="Product Category" required="required" value=<?php echo $P_category; ?> disabled="disabled">
							</div>
							<div class="col-md-12 form-group">
								<input type="number" class="form-control" id="name" name="P_availability" placeholder="Available Product" min="01" max="101" required="required" value=<?php echo $P_availability; ?> disabled="disabled">
							</div>
							<div class="col-md-12 form-group">
								<input type="Number" class="form-control" id="name" name="P_price" placeholder="Product Price Per Unit" min="01" required="required" value=<?php echo $P_price; ?> disabled="disabled">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="P_company" placeholder="Product Company" required="required" value=<?php echo $P_company; ?> disabled="disabled">
							</div>
							<pre> &nbsp;&nbsp;&nbsp;</pre><h6><font color="red">Product Description:-</font></h6><div class="col-md-12 form-group">
								<textarea type="date" class="form-control" id="name" name="P_expirydate" placeholder="Product Description" required="required" disabled="disabled"><?php echo $P_expirydate; ?></textarea>
							</div>
							<pre> &nbsp;&nbsp;&nbsp;</pre><h6><font color="red">Product Picture:-</font></h6><div class="col-md-12 form-group">
								<!--<input type="file" class="form-control" id="name" name="fileToUpload" placeholder="Product Link" required="required">-->
								<img class="img-fluid"  src=<?php echo "\"".$P_link."\""; ?> alt="Image could not be loaded"/>
							</div>
							<pre> &nbsp;&nbsp;&nbsp;</pre><h6><font color="red">Is In Offer:-</font></h6><div class="col-md-12 form-group">
							<select name="P_isOffer" disabled="disabled">
								<option disabled="disabled" selected="selected" value=<?php echo "\"".$P_isOffer."\"";?> ><?php echo $P_isOffer;?></option> 
							<!--<option value="NO" selected="selected">No</option>-->
							</select>
							</div>
							<pre> &nbsp;&nbsp;&nbsp;</pre><h6><font color="red">Price In Offer Per Unit If It So:-</font></h6>
							<div class="col-md-12 form-group">
								<input type="Number" class="form-control" id="name" name="P_oprice" placeholder="Offer Price" required="required" value=<?php echo $P_oprice; ?> disabled="disabled">
							</div>
							<!-- <div class="col-md-12 form-group">
								<div class="creat_account">
									<input type="checkbox" id="f-option2" name="selector">
									<label for="f-option2">Keep me logged in</label>
								</div>
							</div> -->
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="btn submit_btn" name="submit">Home</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->

	<!--================ start footer Area  =================-->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6 class="footer_title">About Us</h6>
						<p>We two , our one website.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6 class="footer_title">Newsletter</h6>
						<p>Stay updated with our latest trends</p>
						<div id="mc_embed_signup">
							<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							 method="get" class="subscribe_form relative">
								<div class="input-group d-flex flex-row">
									<input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '"
									 required="" type="email">
									<button class="btn sub-btn">
										<span class="lnr lnr-arrow-right"></span>
									</button>
								</div>
								<div class="mt-10 info"></div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-footer-widget instafeed">
						<h6 class="footer_title">Instagram Feed</h6>
						<ul class="list instafeed d-flex flex-wrap">
							<li>
								<img src="img/instagram/Image-01.jpg" alt="">
							</li>
							<li>
								<img src="img/instagram/Image-02.jpg" alt="">
							</li>
							<li>
								<img src="img/instagram/Image-03.jpg" alt="">
							</li>
							<li>
								<img src="img/instagram/Image-04.jpg" alt="">
							</li>
							<li>
								<img src="img/instagram/Image-05.jpg" alt="">
							</li>
							<li>
								<img src="img/instagram/Image-06.jpg" alt="">
							</li>
							<li>
								<img src="img/instagram/Image-07.jpg" alt="">
							</li>
							<li>
								<img src="img/instagram/Image-08.jpg" alt="">
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget f_social_wd">
						<h6 class="footer_title">Follow Us</h6>
						<p>Let us be social</p>
						<div class="f_social">
							<a href="#">
								<i class="fa fa-facebook"></i>
							</a>
							<a href="#">
								<i class="fa fa-twitter"></i>
							</a>
							<a href="#">
								<i class="fa fa-dribbble"></i>
							</a>
							<a href="#">
								<i class="fa fa-behance"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row footer-bottom d-flex justify-content-between align-items-center">
				<p class="col-lg-12 footer-text text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;All rights reserved
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</p>
			</div>
		</div>
	</footer>
	<!--================ End footer Area  =================-->




	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="vendors/lightbox/simpleLightbox.min.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="vendors/isotope/isotope-min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="vendors/jquery-ui/jquery-ui.js"></script>
	<script src="vendors/counter-up/jquery.waypoints.min.js"></script>
	<script src="vendors/counter-up/jquery.counterup.js"></script>
	<script src="js/theme.js"></script>
</body>

</html>