<?php session_start();
include('config.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Super Market an Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home </title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
<meta name="keywords" content="Super Market Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="al/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="al/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="al/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="al/js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="al/js/move-top.js"></script>
<script type="text/javascript" src="al/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
	
<body>

<!-- header -->
	<div class="agileits_header">
		<div class="container">
			<div class="w3l_offers">
				<p>SALE UP TO 70% OFF. USE CODE "SALE70%" .</p>
			</div>
			<div class="agile-login">
				<ul>
					<li><a href="registered.php"> Create Account </a></li>
					<li><a href="login.php">Login</a></li>
				
					<li><a href="adminlogin.php">Admin</a></li>
					<li><a href="contact.php">Help</a></li>
				</ul>
			</div>
			<div class="product_list_header">  
				<form action="#" method="post" class="last"> 
					<input type="hidden" name="cmd" value="_cart">
					<input type="hidden" name="display" value="1">
					<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
				</form>  
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="logo_products">
			
			
				<marquee><h1><p style="color:#fe9126;">WelCome To Our Super Market</p></h1></marquee>
			
			
		
	
	</div>
<!-- //header -->
<!-- navigation -->
	<div class="navigation-agileits">
		<div class="container">
			<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header nav_2">
								<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div> 
							<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
								<ul class="nav navbar-nav">
									<li class="active"><a href="home.php" class="act">Home</a></li>	
									<!-- Mega Menu -->
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Groceries<b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="multi-gd-img">
													<ul class="multi-column-dropdown">
														<h6>All Groceries</h6>
														<li><a href="">Dals & Pulses</a></li>
														<li><a href="">Dry Fruit</a></li>
														<li><a href="">Rice & Rice Products</a></li>
														<?php 
																$sql = "SELECT * FROM tbl_category";
																$result = $conn->query($sql);
																if ($result->num_rows > 0) {
																	while($row = $result->fetch_assoc()) 
																	{		
															?>
															<li><a href=""><?php echo $row['category_name'] ?></a></li>
														<?php
								
																}
															}
														?>
													
													</ul>
												</div>	
												
											</div>
										</ul>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Household<b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="multi-gd-img">
													<ul class="multi-column-dropdown">
														<h6>All Household</h6>
														<li><a href="">Cookware</a></li>
														<li><a href="">Dust Pans</a></li>
														<li><a href="">Kitchenware</a></li>
														<?php 
																$sql = "SELECT * FROM tbl_category";
																$result = $conn->query($sql);
																if ($result->num_rows > 0) {
																	while($row = $result->fetch_assoc()) 
																	{		
															?>
															<li><a href=""><?php echo $row['house_item'] ?></a></li>
														<?php
								
																}
															}
														?>
														
													</ul>
												</div>
												
												
											</div>
										</ul>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Personal Care<b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="multi-gd-img">
													<ul class="multi-column-dropdown">
														<h6>Baby Care</h6>
														<li><a href="">Baby Oil & Shampoos</a></li>
														<li><a href="">Baby Creams & Lotion</a></li>
														<li><a href="">Diapers & Wipes</a></li>
														<?php 
																$sql = "SELECT * FROM tbl_category";
																$result = $conn->query($sql);
																if ($result->num_rows > 0) {
																	while($row = $result->fetch_assoc()) 
																	{		
															?>
															<li><a href=""><?php echo $row['personal_item'] ?></a></li>
														<?php
								
																}
															}
														?>
														
													</ul>
												</div>
												
											</div>
										</ul>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Packaged Foods<b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="multi-gd-img">
													<ul class="multi-column-dropdown">
														<h6>All Accessories</h6>
														<li><a href="">Baby Food</a></li>
														<li><a href="">Biscuits ,Chocolates & Sweets</a></li>
														<li><a href="">Breakfast Cereals</a></li>
														<?php 
																$sql = "SELECT * FROM tbl_category";
																$result = $conn->query($sql);
																if ($result->num_rows > 0) {
																	while($row = $result->fetch_assoc()) 
																	{		
															?>
															<li><a href=""><?php echo $row['pack_item'] ?></a></li>
														<?php
								
																}
															}
														?>
														
													</ul>
												</div>
												
											
											</div>
										</ul>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Beverages<b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="multi-gd-img">
													<ul class="multi-column-dropdown">
														<h6>Tea,Coeffee & Drinks</h6>
														<li><a href="">Tea & Tea Bags</a></li>
														<li><a href="">Coffee</a><li>
														<li><a href="">Drinks</a></li>
														<?php 
																$sql = "SELECT * FROM tbl_category";
																$result = $conn->query($sql);
																if ($result->num_rows > 0) {
																	while($row = $result->fetch_assoc()) 
																	{		
															?>
															<li><a href=""><?php echo $row['beve_item'] ?></a></li>
														<?php
								
																}
															}
														?>
													
													</ul>
												</div>
							
											</div>
										</ul>
									</li>
									<li class="dropdown">
									<?php 
																$sql = "SELECT * FROM add_category";
																$result = $conn->query($sql);
																if ($result->num_rows > 0) {
																	while($row = $result->fetch_assoc()) 
																	{		
															?>
										<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $row['category_name'] ?><b class="caret"></b></a>
										<?php
								
																}
															}
														?>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="multi-gd-img">
													<ul class="multi-column-dropdown">
														
														<?php 
																$sql = "SELECT * FROM tbl_category";
																$result = $conn->query($sql);
																if ($result->num_rows > 0) {
																	while($row = $result->fetch_assoc()) 
																	{		
															?>
															<li><a href=""><?php echo $row['beve_item'] ?></a></li>
														<?php
								
																}
															}
														?>
													
													</ul>
												</div>
							
											</div>
										</ul>
									</li>
									<li><a href="">Offers</a></li>
									<li><a href="">Contact</a></li>
									
								</ul>
							</div>
							</nav>
			</div>
		</div>
		
<!-- //navigation -->
	<!-- main-slider -->
		<ul id="demo1">
			<li>
				<img src="al/images/11.jpg" alt="" />
				<!--Slider Description example-->
				<div class="al/slide-desc">
					<h3>Whole Spices Products Are Now On Line With Us</h3>
				</div>
			</li>
			<li>
				<img src="al/images/22.jpg" alt="" />
				  <div class="slide-desc">
					<h3>Whole Spices Products Are Now On Line With Us</h3>
				</div>
			</li>
			
			<li>
				<img src="al/images/44.jpg" alt="" />
				<div class="slide-desc">
					<h3>Whole Spices Products Are Now On Line With Us</h3>
				</div>
			</li>
		</ul>
	<!-- //main-slider -->
	
 <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
         <a href="beverages.php"> <img class="first-slide" src="al/images/b1.jpg" alt="First slide"></a>
       
        </div>
        <div class="item">
         <a href="personalcare.php"> <img class="second-slide " src="al/images/b3.jpg" alt="Second slide"></a>
         
        </div>
        <div class="item">
          <a href="household.php"><img class="third-slide " src="al/images/b1.jpg" alt="Third slide"></a>
          
        </div>
      </div>
    
    </div><!-- /.carousel -->	
<!--banner-bottom-->
				<div class="ban-bottom-w3l">
					<div class="container">
					<div class="col-md-6 ban-bottom3">
							<div class="ban-top">
								<img src="al/images/p2.jpg" class="img-responsive" alt=""/>
								
							</div>
							<div class="ban-img">
								<div class=" ban-bottom1">
									<div class="ban-top">
										<img src="al/images/p3.jpg" class="img-responsive" alt=""/>
										
									</div>
								</div>
								<div class="ban-bottom2">
									<div class="ban-top">
										<img src="al/images/p4.jpg" class="img-responsive" alt=""/>
										
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="col-md-6 ban-bottom">
							<div class="ban-top">
								<img src="al/images/111.jpg" class="img-responsive" alt=""/>
								
								
							</div>
						</div>
						
						<div class="clearfix"></div>
					</div>
				</div>
		<!-- //Image Thumbanil -->
							
		<div class="container">
		  <h2>New Product</h2>
		  <div class="row">
			<div class="col-md-4">
			  <div class="thumbnail">
				<?php 
					$sql = "SELECT * FROM tbl_product";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) 
						{		
				?>
				<p><?php echo $row['description'] ?></p>
				  <img src="<?php echo $row['product_image'] ?>" alt="" style="width:100%">
					
					<p><?php echo $row['product_name'] ?></p>
					<p><?php echo $row['price'] ?>-$</p><br>
						<?php
								
							}
						}
					?>
					<p></p>
				  
			
			  </div>
			</div>
			
			
		  </div>
		</div>             
										   
							
		   <!-- //Image Thumbanil -->       
<!--banner-bottom-->
<!--brands-->
	
	<div class="footer-botm">
			<div class="container">
				<div class="w3layouts-foot">
					<ul>
						<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="payment-w3ls">	
					<img src="al/images/card.png" alt=" " class="img-responsive">
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
<!-- //footer -->	
<!-- Bootstrap Core JavaScript -->
<script src="al/js/bootstrap.min.js"></script>

<!-- top-header and slider -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script src="js/minicart.min.js"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>
<!-- main slider-banner -->
<script src="al/js/skdslider.min.js"></script>
<link href="al/css/skdslider.css" rel="stylesheet">
<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});
						
			jQuery('#responsive').change(function(){
			  $('#responsive_wrapper').width(jQuery(this).val());
			});
			
		});
</script>	
<!-- //main slider-banner --> 
</body>
</html>