<?php
session_start();
if(isset($_SESSION['cid'])){ }else { header("location:index2.php"); }
if(isset($_SESSION['error'])){ unset($_SESSION['error']); }
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
	<link rel="stylesheet" href="css/font-awesome.min2.css">
	
	
	<script type="text/javascript">
	<?php if(!isset($_GET['pno']) && isset($_GET['f'])){?>
		window.onload(alert(<?php echo "\"Welcome ".$_SESSION['cname']."\""; ?>));
	<?php } ?>
</script>
	<!-- <script type="text/javascript" >
   function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
</script> -->
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
						<li>
						<a href="#">
							
							<?php echo "<b> Welcome ".$_SESSION['cname']. "</b>"; ?>
							</a>
						</li>
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
					<a class="navbar-brand logo_h" href="  "><!--index2.php-->
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
									<li class="nav-item active"><!--index2.php--> 
										<a class="nav-link" href="home.php">Home</a>
									</li>
									<li class="nav-item submenu dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a class="nav-link" href="category.php">Shop Category</a>
												<!--<li class="nav-item">
													<a class="nav-link" href="single-product.html">Product Details</a>-->
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
												<a class="nav-link" href="login.html">Login</a>
												<li class="nav-item">
													<a class="nav-link" href="tracking.html">Tracking</a>
													<li class="nav-item">
														<a class="nav-link" href="elements.html">Elements</a>
													</li>
										</ul>
									</li> -->
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
	<section class="home_banner_area">
		<div class="overlay"></div>
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content row">
					<div class="offset-lg-2 col-lg-8">
						<h3>Fashion for
							<br /><?php $d=Date('m');  if($d>10 || $d<3){ echo "Upcoming Summer"; }elseif($d>1 && $d<6){ echo "Upcoming Monsoon"; }else{echo "Upcoming Winter";} ?></h3>
						<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
							aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p> -->
						<a class="white_bg_btn" href="#">View Collection</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

	<!--================Hot Deals Area =================-->
	<section class="hot_deals_area section_gap">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6">
					<div class="hot_deal_box">
						<img class="img-fluid" src="img/product/hot_deals/deal1.jpg" alt="">
						<div class="content">
							<h2>Hot Deals of this Month</h2>
							<p>shop now</p>
						</div>
						<a class="hot_deal_link" href="#"></a>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="hot_deal_box">
						<img class="img-fluid" src="img/product/hot_deals/deal1.jpg" alt="">
						<div class="content">
							<h2>Hot Deals of this Month</h2>
							<p>shop now</p>
						</div>
						<a class="hot_deal_link" href="#"></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Hot Deals Area =================-->

	<!--================Clients Logo Area =================-->
	<section class="clients_logo_area">
		<div class="container-fluid">
			<div class="clients_slider owl-carousel">
				<div class="item">
					<img src="img/clients-logo/c-logo-1.png" alt="">
				</div>
				<div class="item">
					<img src="img/clients-logo/c-logo-2.png" alt="">
				</div>
				<div class="item">
					<img src="img/clients-logo/c-logo-3.png" alt="">
				</div>
				<div class="item">
					<img src="img/clients-logo/c-logo-4.png" alt="">
				</div>
				<div class="item">
					<img src="img/clients-logo/c-logo-5.png" alt="">
				</div>
			</div>
		</div>
	</section>
	<!--================End Clients Logo Area =================-->

	<!--================Feature Product Area =================-->
	<section class="feature_product_area section_gap">
		<div class="main_box">
			<div class="container-fluid">
				<div class="row">
					<div class="main_title">
						<h2>Featured Products</h2>
						<p>Who are in extremely love with eco friendly system.</p>
					</div>
				</div>
			<?php 
					if(isset($_GET["pno"]) && isset($_SESSION["pno"])){
						if($_GET["pno"]<=0)
						{	$pno=1;
						$_SESSION["pno"]=$pno;}
						else
						{	$pno=$_GET["pno"];
						$_SESSION["pno"]=$pno;}
						
							
						
					}
					else
					{
						$pno=01;
						$_SESSION["pno"]=$pno;
					}

				?>
				<div class="row">
					<nav class="cat_page mx-auto" aria-label="Page navigation example">
						<ul class="pagination">
							</li><li class="page-item">
								<a class="page-link" href="home.php?pno=<?php echo 1; ?>">
									<i class="fa fa-home"  aria-hidden="true" style="font-size:28px;margin-top:4px" label="Home"></i>
								</a>
							</li></li><li class="page-item">
								<a class="page-link" href="home.php?pno=<?php echo $pno-8; ?>">
									<i class="fa fa-angle-double-left" aria-hidden="true" style="font-size:28px;margin-top:4px" label="Move 8 backward"></i>
								</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="home.php?pno=<?php echo $pno-1; ?>">
									<i class="fa fa-chevron-left" aria-hidden="true"></i>
								</a>
							</li>
							<?php if($pno!=0){?>
							<li class="page-item active">
								<a class="page-link" href="home.php?pno=<?php echo $pno; ?>"><?php echo $pno; ?></a>
							</li><?php } ?>
							<li class="page-item">
								<a class="page-link" href="home.php?pno=<?php echo $pno+1; ?>"><?php echo $pno+1; ?></a>
							</li>
							<li class="page-item">
								<a class="page-link" href="home.php?pno=<?php echo $pno+2; ?>"><?php echo $pno+2; ?></a>
							</li>
							<li class="page-item">
								<a class="page-link" href="home.php?pno=<?php echo $pno+3; ?>"><?php echo $pno+3; ?></a>
							</li>
							<li class="page-item">
								<a class="page-link" href="home.php?pno=<?php echo $pno+4; ?>"><?php echo $pno+4; ?></a>
							</li>
							<li class="page-item">
								<a class="page-link" href="home.php?pno=<?php echo $pno+5; ?>"><?php echo $pno+5; ?></a>
							</li>
							<li class="page-item">
								<a class="page-link" href="home.php?pno=<?php echo $pno+6; ?>"><?php echo $pno+6; ?></a>
							</li>
							<li class="page-item">
								<a class="page-link" href="home.php?pno=<?php echo $pno+7; ?>"><?php echo $pno+7; ?></a>
							</li>
							<li class="page-item">
								<a class="page-link" href="home.php?pno=<?php echo $pno+8; ?>"><?php echo $pno+8; ?></a>
							</li>
							<li class="page-item">
								<a class="page-link" href="home.php?pno=<?php echo $pno+1; ?>">
									<i class="fa fa-chevron-right" aria-hidden="true"></i>
								</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="home.php?pno=<?php echo $pno+8; ?>">
									<i class="fa fa-angle-double-right" aria-hidden="true" style="font-size:28px;margin-top:4px" label="Move 8 forward"></i>
								</a>
							</li>
						</ul>
					</nav>
				</div>
				
				<div class="row">
					<?php 
					$pno=1;
					$j=1;
					if(isset($_GET['pno']))
							{
								$pno=$_GET['pno'];
								$j=$_GET['pno'];
								
							}
						$con= mysqli_connect("localhost","root","");
						$db=mysqli_select_db($con,"haks_portal");
						if($pno>0)
						{
							$limit=10*$j;
						}
						else
						{
							$limit=10;
						}
						$query="select * from product where P_isOffer=1 limit $limit";
						
						//echo $query;
						$cmd=mysqli_query($con,$query);
						
						$k=$limit;
						//echo $k;
						if($cmd){
						if(mysqli_num_rows($cmd)>0){
							
							$i=1;
							
							$r=10*($j-1);
							//echo $r."r";
							
							for($p=0;$p<$r;$p++)
							{	
								$row=mysqli_fetch_row($cmd);
								$k--;
								
							}
							$ok=$k;
							//echo $k;
							
							while($row=mysqli_fetch_row($cmd)){ $k--;
							?>
								<a href="single-product.php?f=home&P_id=<?php echo $row[0]; ?>">
								<div class="col col<?php echo "$i"; if($i<=9){ $i++; }else{
								$i=1; } ?>"> 
									<div class="f_p_item">
										<div class="f_p_img">
											<img src="<?php echo "$row[7]"; /*P_link */?>" alt="" height="200px" width="200px">
												<div class="p_icon">
													<a href="single-product.php?f=home&P_id=<?php echo $row[0]; ?>">
														<i class="lnr lnr-heart"></i>
													</a>
													<a href="single-product.php?f=home&P_id=<?php echo $row[0]; ?>">	
														<i class="lnr lnr-cart"></i>
													</a>
												</div>
										</div>
										<a href="#">
											<h4><?php echo $row[5]."&nbsp;&nbsp;"; /*P_company*/echo $row[1]; /*P_name*/ ?></h4>
										</a>
										<h5><?php  echo $row[9]."&nbsp;&nbsp;₹"; /*P_oprice */ ?></h5>
										<h5><strike><?php echo $row[4]."&nbsp;&nbsp;₹"; /*P_price*/ ?></strike></h5>
									</div>
								</div></a>
						<?php }} }
						
						
						//echo "rows to be".$k."<br>r=".$r;
						if($k>0){
							//echo $k."new";
							$query="select * from product where P_isOffer=0 limit $k";
							$cmd=mysqli_query($con,$query); 
							
							if($cmd){
								
								
								if($k==$ok)
								{
									//echo "$k==$ok";
									//echo "<br>".mysqli_num_rows($cmd);
									//$r=10*($k-10);
									//echo $r."r";
									$query="select * from product where P_isOffer=0 limit $r";
									$cmd=mysqli_query($con,$query);
									if($cmd){
									for($p=0;$p<$r-10;$p++)
									{	
										$row=mysqli_fetch_row($cmd);
										$k--;
									}
									}
								}
							$i=1;
							while($row=mysqli_fetch_row($cmd)){
							?>
								<a href="single-product.php?f=home&P_id=<?php echo $row[0]; ?>"><div class="col col<?php echo "$i"; if($i<=9){ $i++; }else{
								$i=1; } ?>"> 
									<div class="f_p_item">
										<div class="f_p_img">
											<img src="<?php echo "$row[7]"; /*P_link */?>" alt="" height="200px" width="200px">
												<div class="p_icon">
													<a href="single-product.php?f=home&P_id=<?php echo $row[0]; ?>">
														<i class="lnr lnr-heart"></i>
													</a>
													<a href="single-product.php?f=home&P_id=<?php echo $row[0]; ?>">	
														<i class="lnr lnr-cart"></i>
													</a>
												</div>
										</div>
										<a href="#">
											<h4><?php echo $row[5]."&nbsp;&nbsp;"; /*P_company*/echo $row[1]; /*P_name*/ ?></h4>
										</a>
						
										<h5><?php echo $row[4]."&nbsp;&nbsp;₹"; /*P_price*/ ?></h5>
									</div>
								</div></a>
						<?php } }
						
						
					} ?>
				</div>
				<?php 
					if(isset($_GET["pno"]) && isset($_SESSION["pno"])){
						if($_GET["pno"]<=0)
						{	$pno=1;
						$_SESSION["pno"]=$pno;}
						else
						{	$pno=$_GET["pno"];
						$_SESSION["pno"]=$pno;}
						
							
						
					}
					else
					{
						$pno=01;
						$_SESSION["pno"]=$pno;
					}

				?>
				<div class="row">
					<nav class="cat_page mx-auto" aria-label="Page navigation example">
						<ul class="pagination">
							</li><li class="page-item">
								<a class="page-link" href="home.php?pno=<?php echo 1; ?>">
									<i class="fa fa-home"  aria-hidden="true" style="font-size:28px;margin-top:4px" label="Home"></i>
								</a>
							</li></li><li class="page-item">
								<a class="page-link" href="home.php?pno=<?php echo $pno-8; ?>">
									<i class="fa fa-angle-double-left" aria-hidden="true" style="font-size:28px;margin-top:4px" label="Move 8 backward"></i>
								</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="home.php?pno=<?php echo $pno-1; ?>">
									<i class="fa fa-chevron-left" aria-hidden="true"></i>
								</a>
							</li>
							<?php if($pno!=0){?>
							<li class="page-item active">
								<a class="page-link" href="home.php?pno=<?php echo $pno; ?>"><?php echo $pno; ?></a>
							</li><?php } ?>
							<li class="page-item">
								<a class="page-link" href="home.php?pno=<?php echo $pno+1; ?>"><?php echo $pno+1; ?></a>
							</li>
							<li class="page-item">
								<a class="page-link" href="home.php?pno=<?php echo $pno+2; ?>"><?php echo $pno+2; ?></a>
							</li>
							<li class="page-item">
								<a class="page-link" href="home.php?pno=<?php echo $pno+3; ?>"><?php echo $pno+3; ?></a>
							</li>
							<li class="page-item">
								<a class="page-link" href="home.php?pno=<?php echo $pno+4; ?>"><?php echo $pno+4; ?></a>
							</li>
							<li class="page-item">
								<a class="page-link" href="home.php?pno=<?php echo $pno+5; ?>"><?php echo $pno+5; ?></a>
							</li>
							<li class="page-item">
								<a class="page-link" href="home.php?pno=<?php echo $pno+6; ?>"><?php echo $pno+6; ?></a>
							</li>
							<li class="page-item">
								<a class="page-link" href="home.php?pno=<?php echo $pno+7; ?>"><?php echo $pno+7; ?></a>
							</li>
							<li class="page-item">
								<a class="page-link" href="home.php?pno=<?php echo $pno+8; ?>"><?php echo $pno+8; ?></a>
							</li>
							<li class="page-item">
								<a class="page-link" href="home.php?pno=<?php echo $pno+1; ?>">
									<i class="fa fa-chevron-right" aria-hidden="true"></i>
								</a>
							</li><li class="page-item">
								<a class="page-link" href="home.php?pno=<?php echo $pno+8; ?>">
									<i class="fa fa-angle-double-right" aria-hidden="true" style="font-size:28px;margin-top:4px" label="Move 8 forward"></i>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!--================End Feature Product Area =================-->

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
						<p>We two ,our one website.</p>
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
	<script src="vendors/counter-up/jquery.waypoints.min.js"></script>
	<script src="vendors/flipclock/timer.js"></script>
	<script src="vendors/counter-up/jquery.counterup.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="js/theme.js"></script>
</body>

</html>