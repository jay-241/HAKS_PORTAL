<?php 
session_start();

if(isset($_SESSION['cid']))
{
		$cid=$_SESSION['cid'];
}
else
{
	header("location:index2.php");
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
</head>

<body>

	<!--================Header Menu Area =================-->
	<header class="header_area">
		<div class="top_menu row m0">
			<div class="container-fluid">
				<div class="float-left">
					<p>Call Us: 012 44 5698 7456 896</p>
				</div>
				<div class="float-right">
					<ul class="right_side">
						<li>
							<a href="index2.php">
								Logout
							</a>
						</li>
						<li>
							<a href="customer_account.php">
								My Account
							</a>
						</li>
						<li>
							<a href="aboutus.html">
								About Us
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index2.php">
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
							<div class="col-lg-7 pr-0">
								<ul class="nav navbar-nav center_nav pull-right">
									<li class="nav-item active">
										<a class="nav-link" href="home.php">Home</a>
									</li>
									<li class="nav-item submenu dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a class="nav-link" href="category.php">Shop Category</a>
												<li class="nav-item">
													<!-- <a class="nav-link" href="single-product.html">Product Details</a> -->
													<li class="nav-item">
														<a class="nav-link" href="checkout.php">Product Checkout</a>
														<li class="nav-item">
															<a class="nav-link" href="cart.php">Shopping Cart</a>
														</li>
														<!-- <li class="nav-item">
															<a class="nav-link" href="confirmation.html">Confirmation</a>
														</li> -->
										</ul>
										</li>
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
													<a class="nav-link" href="index2.php">Login</a>
													<li class="nav-item">
														<a class="nav-link" href="tracking.html">Tracking</a>
														<li class="nav-item">
															<a class="nav-link" href="elements.html">Elements</a>
														</li>
											</ul>
											</li>-->
											<li class="nav-item">
												<a class="nav-link" href="contact.php">Contact</a>
											</li>
								</ul>
							</div>

							<div class="col-lg-5">
								<ul class="nav navbar-nav navbar-right right_nav pull-right">
									<hr>
									<li class="nav-item">
										<a href="#" class="icons">
											<i class="fa fa-search" aria-hidden="true"></i>
										</a>
									</li>

									<hr>

									<li class="nav-item">
										<a href="customer_account.php" class="icons">
											<i class="fa fa-user" aria-hidden="true"></i>
										</a>
									</li>

									<hr>

									<!-- <li class="nav-item">
										<a href="#" class="icons">
											<i class="fa fa-heart-o" aria-hidden="true"></i>
										</a>
									</li> -->

									<hr>

									<li class="nav-item">
										<a href="cart.php" class="icons">
											<i class="lnr lnr lnr-cart"></i>
										</a>
									</li>

									<hr>
								</ul>
							</div>
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
					<h2>Shopping Cart</h2>
					<div class="page_link">
						<a href="home.php">Home</a>
						<a href="cart.php">Cart</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

	<!--================Cart Area =================-->
	<section class="cart_area">
		<div class="container">
			<div class="cart_inner">
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th scope="col" colspan="4"><font color="red"><?php if(isset($_GET['error'])){  echo $_GET['error']."<br>"; unset($_GET['error']); }else{ }
								if(isset($_GET['msg'])){  echo $_GET['msg']; }else{ ?>If you want to increase Quantity please add that product again.
							You can order only 5 items at once.<?php } ?></font></th>
								
							</tr>
						</thead>
					</table>
		
					
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Product</th>
								<th scope="col">Price</th>
								<th scope="col">Quantity</th>
								<th scope="col">Total</th>
								<th scope="col">Buy Now</th>
								<th scope="col">Remove</th>
							</tr>
						</thead>
						<tbody>
						
						<?php 
							$tp=0;
							$con=mysqli_connect("localhost","root","");
							$db=mysqli_select_db($con,"haks_portal");
							$query="select * from cart where C_id='$cid' and ack=0";
							
							$cmd=mysqli_query($con,$query);
							
							if($cmd){
							while($row=mysqli_fetch_row($cmd))
							{
						?>
						
							
							<tr>
								
								<td>
									
									<div class="media">
										<div class="d-flex">
											<img width="150px" height="100px" src="<?php echo $row[4]; ?>" alt="">
										</div>
										<div class="media-body">
											<p><?php echo $row[3]; ?></p>
										</div>
									</div>
								</td>
								<td>
									<h5><?php  if($row[7]==1){ echo $row[8]; $tpp=$row[8]*$row[5]; $tp=$tp+$tpp; }else{ echo $row[6];$tpp=$row[6]*$row[5]; $tp=$tp+$tpp;} ?>&nbsp; INR(₹)</h5>
								</td>
								<td>
									<div class="product_count">
										<input type="number" disabled="disabled" name="qty" value="<?php echo $row[5];?>"id="sst" maxlength="12" value="1" min="1" max="5" title="Quantity" class="input-text qty">
										<!-- <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
										 class="increase items-count" type="button">
											<i class="lnr lnr-chevron-up"></i>
										</button>
										<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
										 class="reduced items-count" type="button">
											<i class="lnr lnr-chevron-down"></i>
										</button> -->
									</div>
								</td>
								<td>
									<h5><?php echo "$tpp"; ?></h5>
								</td>
								<td>
										<a href="single-product.php?P_id=<?php echo $row[2]; ?>">Buy Now </a>
								</td>
								<td>
									<a href="clear_cart.php?C_id=<?php echo $_SESSION['cid']?>&pid=<?php echo $row[2]; ?>">Remove From Cart </a>
								</td>
							</tr>
							<?php } 
							}
							?>
							
							<tr class="bottom_button">
								<td>
									<!--<a class="main_btn" href="#">Update Cart</a> -->
								</td> 
								<td>

								</td>
								<td>

								</td>
								<td>

								</td>
								<td>

								</td>
								<td>
									<div class="cupon_text">
										<!--<input type="text" placeholder="Coupon Code">
										<a class="main_btn" href="#">Apply</a>
										<a class="gray_btn" href="#">Close Coupon</a>-->
									</div>
								</td> 
							</tr>
							<tr>
								<td>

								</td>
								<td>

								</td>
								<td>

								</td>
								<td>

								</td>
								<td>
									<h5>Subtotal</h5>
								</td>
								<td>
									<h5>&nbsp; INR(₹)<?php echo "$tp"; ?></h5>
								</td>
							</tr>
							<tr class="shipping_area">
								<td>

								</td>
								<td>

								</td>
								<td>

								</td>
								<td>

								</td>
								<td>
									<!-- <h5>Shipping</h5> -->
								</td>
								<td>
									<div class="shipping_box">
										<ul class="list">
											<!-- <li>
												<a href="#">Flat Rate: $5.00</a>
											</li> -->
											<li>
												<?php if($tp>=500){ echo "You are eligible for Free Shipping"; }else{ if($tp!=0){$tp=$tp+50; echo "Shipping Charge=50 INR(₹)"; }else{ echo "Shipping Charge=0 INR(₹)"; } echo "<br><font color=\"red\">(For free Shipping buy products which has subtotal greater or equal to 500 INR(₹))</font>"; }?>
											</li>
											<li>
												<strong><font color="blue" ="bold">Total Payable Amount <?php echo $tp; ?> INR(₹)</font></strong>
											</li>
											<!-- <li class="active">
												<a href="#">Local Delivery: $2.00</a>
											</li> -->
										</ul>
										<!-- <h6>Calculate Shipping
											<i class="fa fa-caret-down" aria-hidden="true"></i>
										</h6>
										<select class="shipping_select">
											<option value="1">Bangladesh</option>
											<option value="2">India</option>
											<option value="4">Pakistan</option>
										</select>
										<select class="shipping_select">
											<option value="1">Select a State</option>
											<option value="2">Select a State</option>
											<option value="4">Select a State</option>
										</select>
										<input type="text" placeholder="Postcode/Zipcode">
										<a class="gray_btn" href="#">Update Details</a> -->
									</div>
								</td>
							</tr>
							<tr class="out_button_area">
								<td>

								</td>
								<td>

								</td>
								<td>

								</td>
								
								<td>

								</td>
								<td>
									<div class="checkout_btn_inner">
										<a class="main_btn" href="home.php">Continue Shopping</a>
										<a class="main_btn" href="clear_cart.php?C_id=<?php echo $_SESSION['cid']; ?>">Clear Cart</a>
										<a class="main_btn" href="checkout.php">Proceed to checkout</a>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
	<!--================End Cart Area =================-->

	<!--================ Subscription Area ================-->
	<section class="subscription-area section_gap">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="section-title text-center">
						<h2>Subscribe for Our Newsletter</h2>
						<span>We won’t send any kind of spam</span>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div id="mc_embed_signup">
						<form target="_blank" novalidate action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&id=92a4423d01"
						 method="get" class="subscription relative">
							<input type="email" name="EMAIL" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'"
							 required="">
							<!-- <div style="position: absolute; left: -5000px;">
									<input type="text" name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="">
								</div> -->
							<button type="submit" class="newsl-btn">Get Started</button>
							<div class="info"></div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Subscription Area ================-->

	<!--================ start footer Area  =================-->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6 class="footer_title">About Us</h6>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>
					</div>
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
Copyright &copy;2019 All rights reserved
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