<?php
session_start();
if(!isset($_SESSION['cid']))
	header("location:login.php");

$MERCHANT_KEY ="gtKFFx"; //Vf3uygIV;
$SALT ="eCwWELxi"; //dyJ7J7pnfS;
// Merchant Key and Salt as provided by Payu.

$PAYU_BASE_URL = "https://sandboxsecure.payu.in";		// For Sandbox Mode
//$PAYU_BASE_URL = "https://secure.payu.in";			// For Production Mode

$action = '';

$posted = array();
if(!empty($_POST)) {
    //print_r($_POST);
	
  foreach($_POST as $key => $value) {    
    $posted[$key] = $value; 
	
  }
  $posted['surl']="http://localhost/xampp/HAKS_PORTAL/HAKS_PORTAL/HAKS_PORTAL/success.php";
  $posted['furl']="http://localhost/xampp/HAKS_PORTAL/HAKS_PORTAL/HAKS_PORTAL/cancel.php";
  $posted['curl']="http://localhost/xampp/HAKS_PORTAL/HAKS_PORTAL/HAKS_PORTAL/cancel.php";
  
}

$formError = 0;

if(empty($posted['txnid'])) {
  // Generate random transaction id
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
  $txnid = $posted['txnid'];
}
$posted['txnid']=$txnid;
$posted['key']=$MERCHANT_KEY;
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
  if(empty($posted['amount'])
	  || empty($posted['firstname'])
      || empty($posted['email'])
      || empty($posted['phone'])
      || empty($posted['surl'])
      || empty($posted['furl'])  
  ) {
    $formError = 1;
	//echo "$formError YES";
  } else {
	  //echo "$formError YES";
    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
	
	
	//print_r($posted);
	$hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';	
	foreach($hashVarsSeq as $hash_var) {
		$hash_var="".$hash_var."";
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }

    $hash_string .= $SALT;
	

    $hash = strtolower(hash('sha512', $hash_string));
	//echo $hash;
    $action = $PAYU_BASE_URL . '/_payment';
  }
} elseif(!empty($posted['hash'])) {
  $hash = $posted['hash'];
  $action = $PAYU_BASE_URL . '/_payment';
}
?>
<html>
  <head>
  
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
  <script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
  </script>
  
  
  
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
  <body onload="submitPayuForm()">
	
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
	<section id="invoice" class="checkout_area section_gap">
		<div id="container" class="container">
			<div class="returning_customer">
				
			<div id="billing_details" class="billing_details">
				<div class="row">
					<div class="col-lg-8">
						<h3>Billing & Shipping Details</h3>
						<form class="row contact_form" action="<?php echo $action; ?>" method="post" >
						<input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
						<input type="hidden" name="hash" value="<?php echo $hash ?>"/>
						<input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
						<input type="hidden" name="surl" value="<?php echo $posted['surl']; ?>"/>
						<input type="hidden" name="furl" value="<?php echo $posted['furl']; ?>"/>
						<input type="hidden" name="curl" value="<?php echo $posted['curl']; ?>"/>
						<input type="hidden" name="productinfo" value="<?php echo "Nice Product"; ?>"/>
							
							<div class="col-md-6 form-group p_star">
								<font color="Red" > Total Payable Amount(INR (₹))* </font></br>
								<input readonly type="text" class="form-control" id="first" name="amount" value="<?php echo (empty($posted['amount'])) ? '' : $posted['amount'] ?>">
								<!-- <span class="placeholder" data-placeholder="Total Payable Amount"></span> -->
							</div>
							<div class="col-md-6 form-group p_star">
								<!-- <input type="text" class="form-control" id="first" name="amount" value="<?php //echo (empty($posted['amount'])) ? '' : $posted['amount'] ?>">
								<span class="placeholder" data-placeholder="Total Payable Amount"></span> -->
							</div>
							<div class="col-md-6 form-group p_star">
								<input readonly type="text" name="firstname" id="firstname" value="<?php echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>" class="form-control" >
								<!-- <span class="placeholder" data-placeholder="First name"></span> -->
							</div>
							<div class="col-md-6 form-group p_star">
								<input readonly type="text" class="form-control" name="lastname" id="lastname" value="<?php echo (empty($posted['lastname'])) ? '' : $posted['lastname']; ?>">
								<!-- <span class="placeholder" data-placeholder="Last name"></span> -->
							</div>
							<!-- <div class="col-md-12 form-group">
								<input type="text" class="form-control" id="company" name="company" placeholder="Company name">
							</div> -->
							<div class="col-md-6 form-group p_star">
								<input readonly type="text" class="form-control" name="phone" value="<?php echo (empty($posted['phone'])) ? '' : $posted['phone']; ?>">
								<!-- <span class="placeholder" data-placeholder="Phone number"></span> -->
							</div>
							<div class="col-md-6 form-group p_star">
								<input readonly type="text" class="form-control" name="email" id="email" value="<?php echo (empty($posted['email'])) ? '' : $posted['email']; ?>">
								<!-- <span class="placeholder" data-placeholder="Email Address"></span> -->
							</div>
							<div class="col-md-12 form-group p_star">
								<!-- <select class="country_select" name="country">
									<option value="India">India</option>
								</select> -->
								
								<input readonly type="text" class="form-control" name="country" value="<?php echo (empty($posted['country'])) ? '' : $posted['country']; ?>" />
							</div>
							<div class="col-md-12 form-group p_star">
								<input readonly type="text" class="form-control" id="add1" name="address1" value="<?php echo (empty($posted['address1'])) ? '' : $posted['address1']; ?>">
								<!-- <span class="placeholder" data-placeholder="Address line 01"></span> -->
							</div>
							<div class="col-md-12 form-group p_star">
								<input readonly type="text" class="form-control" id="add2" name="address2" value="<?php echo (empty($posted['address2'])) ? '' : $posted['address2']; ?>">
								<!-- <span class="placeholder" data-placeholder="Address line 02"></span> -->
							</div>
							<div class="col-md-12 form-group p_star">
								<input readonly type="text" class="form-control" id="city" name="city" value="<?php echo (empty($posted['city'])) ? '' : $posted['city']; ?>">
								<!-- <span class="placeholder" data-placeholder="Town/City"></span> -->
							</div>
							<div class="col-md-12 form-group p_star">
								<!-- <select class="country_select" name="state">
									<option value="Kheda">Kheda</option>
									<option value="Anand">Anand</option>
									<option value="Panchmahal">Panchmahal</option>
								</select> -->
								<input readonly type="text" class="form-control" name="state" value="<?php echo (empty($posted['state'])) ? '' : $posted['state']; ?>" />
							</div>
							<div class="col-md-12 form-group">
								<input readonly type="text" class="form-control" id="zip" name="zipcode" value="<?php echo (empty($posted['zipcode'])) ? '' : $posted['zipcode']; ?>" placeholder="Postcode/ZIP">
							</div>
							 
								<?php if($hash) { ?>
								
									<input type="submit" value="Proceed to Payment" class="btn submit_btn" name="submit">
							
								<?php } ?>
							
						</form>
					</div>
					<div class="col-lg-4">
						<?php 
							$con=mysqli_connect("localhost","root","");
							$db=mysqli_select_db($con,"haks_portal");
							if(isset($_SESSION['item']) && $_SESSION['item']==true)
							{
									$_SESSION['item']=true; //for one item=true multiple items=false
									$query="select * from product where P_id='".$_SESSION['pi_id']."'";
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
								$query="select * from cart where C_id = ".$_SESSION['cid']." and ack=0";
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
							
								<!--<input type="submit" value="<?php echo "Proceed to Payment";?>" class="btn submit_btn" name="submit">
									-->			</form>

							
							
						</div>
						<button class="main_btn" onclick="generatePDF()">Download Invoice</button>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!--================End Checkout Area =================-->
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
    <!-- <h2>PayU Form</h2> -->
    <br/>
    <?php if($formError) { ?>
	
      <span style="color:red">Please fill all mandatory fields.</span>
      <br/>
      <br/>
    <?php } ?>
    <!-- <form action="<?php echo $action; ?>" method="post" name="payuForm">
      <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
      <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
      <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
      <table>
        <tr>
          <td><b>Mandatory Parameters</b></td>
        </tr>
        <tr>
          <td>Amount: </td>
          <td><input name="amount" value="<?php //echo (empty($posted['amount'])) ? '' : $posted['amount'] ?>" /></td>
          <td>First Name: </td>
          <td><input name="firstname" id="firstname" value="<?php //echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>" /></td>
        </tr>
        <tr>
          <td>Email: </td>
          <td><input name="email" id="email" value="<?php //echo (empty($posted['email'])) ? '' : $posted['email']; ?>" /></td>
          <td>Phone: </td>
          <td><input name="phone" value="<?php //echo (empty($posted['phone'])) ? '' : $posted['phone']; ?>" /></td>
        </tr>
        <tr>
          <td>Product Info: </td>
          <td colspan="3"><textarea name="productinfo"><?php //echo (empty($posted['productinfo'])) ? '' : $posted['productinfo'] ?></textarea></td>
        </tr>
        <tr>
          <td>Success URI: </td>
          <td colspan="3"><input name="surl" value="<?php //echo (empty($posted['surl'])) ? '' : $posted['surl'] ?>" size="64" /></td>
        </tr>
        <tr>
          <td>Failure URI: </td>
          <td colspan="3"><input name="furl" value="<?php //echo (empty($posted['furl'])) ? '' : $posted['furl'] ?>" size="64" /></td>
        </tr>

        <tr>
          <td colspan="3"><input type="hidden" name="service_provider" value="payu_paisa" size="64" /></td>
        </tr>

        <tr>
          <td><b>Optional Parameters</b></td>
        </tr>
        <tr>
          <td>Last Name: </td>
          <td><input name="lastname" id="lastname" value="<?php //echo (empty($posted['lastname'])) ? '' : $posted['lastname']; ?>" /></td>
          <td>Cancel URI: </td>
          <td><input name="curl" value="" /></td>
        </tr>
        <tr>
          <td>Address1: </td>
          <td><input name="address1" value="<?php //echo (empty($posted['address1'])) ? '' : $posted['address1']; ?>" /></td>
          <td>Address2: </td>
          <td><input name="address2" value="<?php //echo (empty($posted['address2'])) ? '' : $posted['address2']; ?>" /></td>
        </tr>
        <tr>
          <td>City: </td>
          <td><input name="city" value="<?php //echo (empty($posted['city'])) ? '' : $posted['city']; ?>" /></td>
          <td>State: </td>
          <td><input name="state" value="<?php //echo (empty($posted['state'])) ? '' : $posted['state']; ?>" /></td>
        </tr>
        <tr>
          <td>Country: </td>
          <td><input name="country" value="<?php //echo (empty($posted['country'])) ? '' : $posted['country']; ?>" /></td>
          <td>Zipcode: </td>
          <td><input name="zipcode" value="<?php //echo (empty($posted['zipcode'])) ? '' : $posted['zipcode']; ?>" /></td>
        </tr>
        <tr>
          <td>UDF1: </td>
          <td><input name="udf1" value="<?php //echo (empty($posted['udf1'])) ? '' : $posted['udf1']; ?>" /></td>
          <td>UDF2: </td>
          <td><input name="udf2" value="<?php //echo (empty($posted['udf2'])) ? '' : $posted['udf2']; ?>" /></td>
        </tr>
        <tr>
          <td>UDF3: </td>
          <td><input name="udf3" value="<?php //echo (empty($posted['udf3'])) ? '' : $posted['udf3']; ?>" /></td>
          <td>UDF4: </td>
          <td><input name="udf4" value="<?php //echo (empty($posted['udf4'])) ? '' : $posted['udf4']; ?>" /></td>
        </tr>
        <tr>
          <td>UDF5: </td>
          <td><input name="udf5" value="<?php //echo (empty($posted['udf5'])) ? '' : $posted['udf5']; ?>" /></td>
          <td>PG: </td>
          <td><input name="pg" value="<?php //echo (empty($posted['pg'])) ? '' : $posted['pg']; ?>" /></td>
        </tr>
        <tr>
         <?php /*if(!$hash) { ?>
            <td colspan="4"><input type="submit" value="Submit" /></td>
          <?php }*/ ?>
        </tr>
      </table>
	  
	      </form> -->
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
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
