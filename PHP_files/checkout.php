<?php
session_start();

if(!isset($_SESSION['cid']))
{
	header("location:login.php");
}
else
{
		
}

?>
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
	
	 <script src="html2pdf.js-master\dist\html2pdf.bundle.min.js"></script>
	<script>
      function generatePDF() {
        // Choose the element that our invoice is rendered in.
        const element = document.getElementById("invoice");
        // Choose the element and save the PDF for our user.
        html2pdf()
          .from(element)
          .save();
      }
    </script>
</head>

<body>

	<!--================Header Menu Area =================-->
	<header class="header_area">
		<div class="top_menu row m0">
			<div class="container-fluid">
				<div class="float-left">
					<p>Call Us:7984915239</p>
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
					<a class="navbar-brand logo_h" href="home.php">
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
													<!-- <a class="nav-link" href="single-product.php">Product Details</a> -->
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
			<div class="overlay"></div>
			<div class="container">
				<div class="banner_content text-center">
					<h2>Product Checkout</h2>
					<div class="page_link">
						<a href="home.php">Home</a>
						<a href="checkout.php">Checkout</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

	<!--================Checkout Area =================-->
	<section class="checkout_area section_gap">
		<div class="container">
			<div class="returning_customer">
				<!-- <div class="check_title">
					<h2>Returning Customer?
						<a href="#">Click here to login</a>
					</h2>
				</div>
				<p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed
					to the Billing & Shipping section.</p>
				<form class="row contact_form" action="#" method="post" novalidate="novalidate">
					<div class="col-md-6 form-group p_star">
						<input type="text" class="form-control" id="name" name="name" value=" ">
						<span class="placeholder" data-placeholder="Username or Email"></span>
					</div>
					<div class="col-md-6 form-group p_star">
						<input type="password" class="form-control" id="password" name="password" value="">
						<span class="placeholder" data-placeholder="Password"></span>
					</div>
					<div class="col-md-12 form-group">
						<button type="submit" value="submit" class="btn submit_btn">Send Message</button>
						<div class="creat_account">
							<input type="checkbox" id="f-option" name="selector">
							<label for="f-option">Remember me</label>
						</div>
						<a class="lost_pass" href="#">Lost your password?</a>
					</div>
				</form>
			</div>
			<div class="cupon_area">
				<div class="check_title">
					<h2>Have a coupon?
						<a href="#">Click here to enter your code</a>
					</h2>
				</div>
				<input type="text" placeholder="Enter coupon code">
				<a class="tp_btn" href="#">Apply Coupon</a>
			</div> -->
			<div class="billing_details">
				<div class="row">
					<div class="col-lg-8">
					<?php if(isset($_GET['f']) && isset($_GET['p_id']))
							{
								echo "<b><font color=\"red\">You can Buy a product with 1 quantity directly.<br> If you want to buy a product with more than one quantity then first add it to cart and then buy.</font></b>";
							}?>
						<h3>Billing & Shipping Details</h3>
						<form class="row contact_form" action="PayUMoney_form.php" method="post" >
							<div class="col-md-6 form-group p_star">
								<input required="required" type="text" name="firstname" id="firstname"  class="form-control" placeholder="First Name">
								<!-- <span class="placeholder" data-placeholder="First name"></span> -->
							</div>
							<div class="col-md-6 form-group p_star">
								<input required="required" type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name">
								<!-- <span class="placeholder" data-placeholder="Last name"></span> -->
							</div>
							<!-- <div class="col-md-12 form-group">
								<input type="text" class="form-control" id="company" name="company" placeholder="Company name">
							</div> -->
							<div class="col-md-6 form-group p_star">
								<input pattern="(((\+){1}91){1})?[\-\s]?[1-9]{1}[0-9]{9}" 
								label="Enter Valid Mobile Number"
								
								required="required" type="text" class="form-control" name="phone" placeholder="Phone No">
								<!-- <span class="placeholder" data-placeholder="Phone number"></span> -->
							</div>
							<div class="col-md-6 form-group p_star">
								<input pattern="[a-zA-Z0-9\-\$]{1,}[@]{1}[a-zA-z]{2,}[\.]{1}[a-zA-z]{2,}([\.]{1}[a-zA-z]{2,})?"
								label="Enter Valid Email Address"
								
								required="required" type="email" class="form-control" name="email" id="email" placeholder="Email ID">
								<!-- <span class="placeholder" data-placeholder="Email Address"></span> -->
							</div>
							<div class="col-md-12 form-group p_star">
								<!-- <select class="country_select" name="country">
									<option value="India">India</option>
								</select> -->
								
								<input readonly required="required" type="text" class="form-control" name="country" value="India" />
							</div>
							<div class="col-md-12 form-group p_star">
								<input required="required" type="text" class="form-control" id="add1" name="address1" placeholder="Address line 01">
								<!-- <span class="placeholder" data-placeholder="Address line 01"></span> -->
							</div>
							<div class="col-md-12 form-group p_star">
								<input required="required" type="text" class="form-control" id="add2" name="address2" placeholder="Address line 02">
								<!-- <span class="placeholder" data-placeholder="Address line 02"></span> -->
							</div>
							<div class="col-md-12 form-group p_star">
								<input required="required" type="text" class="form-control" id="city" name="city" placeholder="Town/City">
								<!-- <span class="placeholder" data-placeholder="Town/City"></span> -->
							</div>
							<div class="col-md-12 form-group p_star">
								<!-- <select class="country_select" name="state">
									<option value="Kheda">Kheda</option>
									<option value="Anand">Anand</option>
									<option value="Panchmahal">Panchmahal</option>
								</select> -->
								<input readonly required="required" type="text" class="form-control" name="state" value="Gujarat" />
							</div>
							<div class="col-md-12 form-group">
								<input required="required" type="text" class="form-control" id="zip" name="zipcode"  placeholder="Postcode/ZIP">
							</div>
							
						
					</div>
					<div class="col-lg-4">
						<?php 
							$con=mysqli_connect("localhost","root","");
							$db=mysqli_select_db($con,"haks_portal");
							if(isset($_GET['f']) && isset($_GET['p_id']))
							{
									$_SESSION['item']=true; //for one item=true multiple items=false
									$_SESSION['pi_id']=$_GET['p_id'];
									
									$query="select * from product where P_id='".$_GET['p_id']."'";
									$cmd=mysqli_query($con,$query);
							$tp=0;
							$tpp=0;
						?>
						<div class="order_box">
							<h2>Your Order</h2>
							<ul class="list">
								<li>
									<a href="#">Product
										<span>Total</span>
									</a>
								</li> 
								<?php if($cmd){ while($row=mysqli_fetch_row($cmd)){ ?><li>
									<a href="#"><?php echo $row[1]; ?>
										<span class="middle">x <?php echo "1"; ?></span>
										<span class="last"><?php $tp=1*$row[4]; if($row[8]==1){ $tp=1*$row[9]; }else{} echo $tp; $tpp=$tpp+$tp; ?></span>
									</a>
								</li><?php } } ?>
							</ul>
							<ul class="list list_2">
								<li>
									<a href="#">Subtotal
										<span><?php echo $tpp." INR(₹)"; ?></span>
									</a>
								</li>
								<li>
									<a href="#">Shipping Charge
										<span><?php if($tpp<500 && $tpp!=0){ echo "50 INR(₹)"; $tpp=$tpp+50; }else{ echo "00 INR(₹)"; }?></span>
									</a>
								</li>
								<li>
									<a href="#">Total
										<span><?php echo "$tpp INR(₹)"; ?></span>
									</a>
								</li>
							</ul>
							
							
							
							
							<input type="hidden" name="amount" value="<?php echo $tpp; ?>"/>
							<?php }
							else
							{
								$_SESSION['item']=false; //for one item=true multiple items=false

								$query="select * from cart where C_id = '".$_SESSION['cid']."' and ack=0";
								$cmd=mysqli_query($con,$query);
								$tp=0;
								$tpp=0;
								?>
							<div class="order_box">
							<h2>Your Order</h2>
							<ul class="list">
								<li>
									<a href="#">Product
										<span>Total</span>
									</a>
								</li> 
								<?php if($cmd){ while($row=mysqli_fetch_row($cmd)){ ?><li>
									<a href="#"><?php echo $row[3]; ?>
										<span class="middle">x <?php echo $row[5]; ?></span>
										<span class="last"><?php $tp=$row[5]*$row[6]; if($row[7]==1){ $tp=$row[5]*$row[8]; }else{} echo $tp; $tpp=$tpp+$tp; ?></span>
									</a>
								</li><?php } } ?>
							</ul>
							<ul class="list list_2">
								<li>
									<a href="#">Subtotal
										<span><?php echo $tpp." INR(₹)"; ?></span>
									</a>
								</li>
								<li>
									<a href="#">Shipping Charge
										<span><?php if($tpp<500 && $tpp!=0){ echo "50 INR(₹)"; $tpp=$tpp+50; }else{ echo "00 INR(₹)"; }?></span>
									</a>
								</li>
								<li>
									<a href="#">Total
										<span><?php echo "$tpp INR(₹)"; ?></span>
									</a>
								</li>
							</ul>
							
							
							
							
							<input type="hidden" name="amount" value="<?php echo $tpp; ?>"/>
							<?php } ?>
							
							<input type="hidden" name="productinfo" value="<?php echo "Nice Product"; ?>"/>
							
								<input type="submit" value="<?php echo "Proceed to Payment";?>" class="btn submit_btn" name="submit">
												</form>
												
							<!-- <div class="payment_item">
								<div class="radion_btn">
									<input type="radio" id="f-option5" name="selector">
									<label for="f-option5">Check payments</label>
									<div class="check"></div>
								</div>
								<p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
							</div> -->
							<!-- <div class="razorpay-embed-btn" data-url="https://rzp.io/l/7k8M8jH" data-text="Pay Now" data-color="#528FF0" data-size="large">
  <script>
    (function(){
      var d=document; var x=!d.getElementById('razorpay-embed-btn-js')
      if(x){ var s=d.createElement('script'); s.defer=!0;s.id='razorpay-embed-btn-js';
      s.src='https://cdn.razorpay.com/static/embed_btn/bundle.js';d.body.appendChild(s);} else{var rzp=window['__rzp__'];
      rzp && rzp.init && rzp.init()}})();
  </script>
</div> -->
    
	
	<!-- <a href="PayUMoney_form.php" >Click Here </a>
							<div class='pm-button'><a href='https://www.payumoney.com/paybypayumoney/#/746F702FFE1186B57A2F8E987AA96963'><img src='https://www.payumoney.com/media/images/payby_payumoney/new_buttons/23.png' /></a></div> 
							
							<div class="payment_item active">
								<div class="radion_btn">
									<input type="radio" id="f-option6" name="selector">
									<label for="f-option6">Paypal </label>
									<img src="img/product/single-product/card.jpg" alt="">
									<div class="check"></div>
								</div>
								<p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
							</div>
							<div class="creat_account">
								<input type="checkbox" id="f-option4" name="selector" required="required">
								<label for="f-option4">I’ve read and accept the </label>
								<a href="#">terms & conditions*</a>
							</div>
							<a class="main_btn" href="final_test.php">Proceed to Paypal</a>
							
							<form action="final_test.php" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="PD6GSJR5KWRUE">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form> -->

							
							
						</div>
							<!-- <button class="main_btn" onclick="generatePDF()">Download Invoice</button> -->
											
													
						</div>						
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!--================End Checkout Area =================-->

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
						<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&id=92a4423d01"
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
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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