
<!DOCTYPE html>
<html>
<?php include 'html-index/head.php';?>
<body>

	<!-- banner -->
	<div class="banner">
			<!--header-->
				<div class="header">
		<div class="container">
			<div class="header-grids">
				<div class="logo">
					<a href="index.php"></a><img src="images/logo.png" alt="" class="img-responsive" style="height:100px" /></a>
				</div>
				<!--navbar-header-->
				<div class="header-dropdown">
					<div class="emergency-grid">
					
						<div class="d-apps hidden-phone">
							<ul>
								<li><a href="https://play.google.com/store/apps/details?id=com.MerryTrips.MerryTrips.MerryTrips"><img src="images/app1.png" alt="" /></a></li>
							</ul>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="nav-top">
				<div class="top-nav">
					<span class="menu"><img src="images/menu.png" alt="" /></span>
					<ul class="nav1">
						<li class="active"><a href="index.php">Find & Share</a></li>
						<li><a href="index.php#how">How Merrytrips Works? </a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="#contact">Contact</a></li>
						<li><a href="blog.php">Blog</a></li>						
					</ul>
					<div class="clearfix"> </div>
					<!-- script-for-menu -->
							 <script> 
							   $( "span.menu" ).click(function() {
								 $( "ul.nav1" ).slideToggle( 300, function() {
								 // Animation complete.
								  });
								 });
							
							</script>
						<!-- /script-for-menu -->
				</div>
				<div class="dropdown-grids">
						<div id="loginContainer" style="background-color:#46629E">
							<a href="#" id="loginButton" ><span><i class="fa fa-facebook"></i> Login With Facebook</span></a>
						</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>

	<!--//header-->
		<!-- container -->
		<div class="container">
			<div class="col-md-4 hidden-phone banner-left">
				<section class="slider2">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="slider-info">
									<img src="images/1.jpg" alt="">
								</div>
							</li>
							<li>
								<div class="slider-info">
									<img src="images/2.jpg" alt="">
								</div>
							</li>
							<li>	
								<div class="slider-info">
									<img src="images/3.jpg" alt="">
								</div>
							</li>
							<li>	
								<div class="slider-info">
									<img src="images/4.jpg" alt="">
								</div>
							</li>
							<li>	
								<div class="slider-info">
									<img src="images/1.jpg" alt="">
								</div>
							</li>
						</ul>
					</div>
				</section>
				<!--FlexSlider-->
			</div>
		<!--//Find Rides from start here  -->
		<div class="col-md-8 banner-right">
		 <form method="post"  action="<?php echo $_SERVER["PHP_SELF"];?>">
			
				<div class="sap_tabs">	
					<div class="booking-info">
						<h2>Share & Find Your Ride</h2>
					</div>
					 <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						  <ul class="resp-tabs-list">
							  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"> <span class="glyphicon glyphicon-search" aria-hidden="true"> </span> <span> Find Rides</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Share Rides</span></li>
							  <div class="clearfix"></div>
						  </ul>		
						  <!---->		  	 
						 <div class="resp-tabs-container">
							<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
								<?php  include_once 'html-index/find.php';?>
							</div>	
						</form>
					<!--//Find Rides from end here  -->
							<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">

								<?php  include_once 'html-index/poolandshare.php';?>

							</div> 			        					            	      
						  </div>	
					  </div>	
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!-- //container -->
	</div>
	<!-- //banner -->
	
		
	
	</div>
	<div class="banner-bottom">

			<div class="bannertop">
					<div class="container">
						<div class="full-nav-social-top">
							<div class="full-nav-social">
								<h1>Why Chose Us!</h1>
								<ul>
								<li><a href="#">RECURRING RIDES</a></li>
								<li><a href="#">ECO-FRIENDLY, REDUCE POLUTION</a></li>
								<li><a href="#">GOALS</a></li>
								<li><a href="#">SECURITY</a></li>
								<li><a href="#">Contact</a></li>
								</ul>
							</div>
							
							
					<div class="clearfix"> </div>	
					</div>
				</div>
			</div>			

		
	</div>
	<!-- //banner-bottom -->
<!-- Second Banner -->	
<div class="banner-bottom">
	<div class="bannertop1">
		<div class="container">	
			<center>		
				<hr>
				<h2 style="color:#fff;">How MerryTrips Works</h2>	
				<hr>
			</center>
			<br>
			<div class="col-md-2 col-xm-0"></div>
			<div class="col-md-8 col-xm-12">
				<!-- 4:3 aspect ratio -->
				<div class="embed-responsive embed-responsive-4by3">
					<iframe class="embed-responsive-item" width="854" height="480" src="https://www.youtube.com/embed/oxfuMsmvqhw" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
			<div class="col-md-2 col-xm-0"></div>
		</div>
	</div>			
</div>
		<!-- popular-grids -->
	<div class="popular-grids">
<!--test-->
		<div class="content-bottom">
			<div class="container">
				<h3>Reviews</h3>
					<div class="col-md-6 name-in">
						<div class=" bottom-in">
							<p class="para-in">"An excellent co-traveller. We chatted on various topics, on time, no hassles!"</p>
						    <i class="dolor"> </i>
							<div class="men-grid">
								<a href="#" class="men-top"><img class="img-responsive men-top" src="images/user3.jpg" alt=""></a>
								<div class="men">
								<span>Urmil Bhatt</span>
								<p>CEO - Blablacar</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
						<div class=" bottom-in">
							<p class="para-in">"A perfect gentleman! Kind of person I will be in touch. Highly recommended!"</p>
							<i class="dolor"> </i>
							<div class="men-grid">
								<a href="#" class="men-top"><img class="img-responsive " src="images/user2.jpg" alt=""></a>
								<div class="men">
									<span>Aditya Gour</span>
									<p>Car</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
					<div class="col-md-6  name-on">
						<div class="bottom-in ">
							<p class="para-in">"An excellent company. Couldn't have asked for a better co-traveller!"</p>
							<i class="dolor"> </i>
							<div class="men-grid">
								<a href="#" class="men-top"><img class="img-responsive " src="images/user1.jpg" alt=""></a>
								<div class="men">
									<span>Som Banerjee</span>
									<p>Project Manager</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
			</div>
		</div>		
<!--//test-->	
</div>
	<!-- popular-grids -->
	<div class="popular-grids">
		
			<!--Featured-->
			<div class="content-bottom1">
			
					<div class="container">
						<h3>Featured In</h3>
					<ul>
						<li><a href="http://merrytrips.in/#"><img class="img-responsive" src="images/lg.png" alt="" width="45%"></a></li>
						<li><a href="#"><img class="img-responsive" src="images/lg1.png" alt="" width="95%"></a></li>
						<li><a href="#"><img class="img-responsive" src="images/lg2.png" alt="" width="75%"></a></li>
						<li><a href="http://tamil.yourstory.com/read/e9fa35bcfd/traveling-to-share-fees-merritrips-processor"><img class="img-responsive" src="images/lg3.png" alt="" ></a></li>
						
					<div class="clearfix"> </div>
					</ul>
					
				</div>
			</div>
			<!--//Featured-->
		
	</div>


<?php include 'html-index/footer.php';?>
	<script defer src="js/jquery.flexslider.js"></script>
	<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script src="js/jquery-ui.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript">
		$(function(){
			SyntaxHighlighter.all();
			});
			$(window).load(function(){
			$('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			$('body').removeClass('loading');
			}
			});
		});
	</script>		
</body>
</html>