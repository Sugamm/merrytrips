<!DOCTYPE html>
<html>
<?php include 'html-index/head.php';?>
<body>
	<!--header-->
		<div class="header" style="background:#ccc;">
		<div class="container" >
			<div class="header-grids" style="margin:10px 0;">
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
						<!-- <div id="loginContainer" style="background-color:#46629E">
							<a href="#" id="loginButton" ><span><i class="fa fa-facebook"></i> Login With Facebook</span></a>
						</div> -->
						<div id="loginContainer"><a href="#" id="loginButton"><span><i class="fa fa-user"></i> Sugam</span></a>
							<div id="loginBox">                
								<form id="loginForm">
									<div class="login-grids">
										<div class="login-grid-left">
											<div class="social-sits" style="margin:0px;">
											    <div class="profile" style="margin:0px;">
													
														<div class="profile-sidebar">
															<!-- SIDEBAR USERPIC -->
															<div class="profile-userpic">
																<img src="images/pc3.jpg"  class="img-responsive" alt="">
															</div>
															<!-- END SIDEBAR USERPIC -->
															<!-- SIDEBAR USER TITLE -->
															<div class="profile-usertitle">
																<div class="profile-usertitle-name">
																	Sugam Malviya
																</div>
																<div class="profile-usertitle-job">
																	Developer
																</div>
															</div>
															<!-- END SIDEBAR USER TITLE -->
															<!-- SIDEBAR BUTTONS -->
															<div class="profile-userbuttons nav nav-tabs" >
																<button type="button" class="btn btn-success btn-sm"> <a data-toggle="tab" href="#view" style="color:#fff;">View Profile</a></button>
																<button type="button" class="btn btn-danger btn-sm"><a data-toggle="tab" href="#request" style="color:#fff;">Requests</a></button>
															</div>
															<div class="tab-content">
															    <div id="view" class="tab-pane fade in active">
																	<!-- END SIDEBAR BUTTONS -->
																	<!-- SIDEBAR MENU -->
																	<div class="profile-usermenu">
																		<ul class="nav">
																			<li >
																				<a href="#">
																				<i class="glyphicon glyphicon-home"></i>
																				Dashboard </a>
																			</li>
																			<li class="active">
																				<a href="#">
																				<i class="fa fa-taxi"></i>
																				My Rides </a>
																			</li>
																			<li>
																				<a href="edit.php">
																				<i class="glyphicon glyphicon-user"></i>
																				Edit Profile </a>
																			</li>
																			<li>
																				<a href="logout.php">
																				<i class="glyphicon glyphicon-flag"></i>
																				Logout </a>
																			</li>
																		</ul>
																	</div>
															<!-- END MENU -->
															    </div>
															    <div id="request" class="tab-pane fade">
															      <!-- no-request -->
																	<center>
																		<p style="margin:20px 0; font-size:20px;"><b>All Requests</b></p>
																		<h1>&#128542;</h1>
																		<h5 style="margin:0 0 20px 0;"> No Request </h5>
																	</center>
																	
															    </div>
															  </div>
															</div>
													</div>
											</div>
										</div>

									</div>
								</form>
							</div>
						</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//header-->
	<!-- banner -->
	<div class="banner holidays-banner" style="background:#ccc;">
		<!-- container -->
		<div class="container">
			<div class="deals-info">
				<h2  style="color:black;">MerryTrips All Rides</h2>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //banner -->
	
	<!-- banner-bottom -->
	<div class="banner-bottom">
		<!-- container -->
		<div class="banner-bottom-info"  style="color:#fff;" >
			
				<div class="nav nav-tabs" style="border:0px;">
					<div class="col-md-6 active" style="background: #FF9304; padding: 10px 0;">
						<center>
							<a data-toggle="tab" href="#ownrides"><h3 style="color:#fff;">Own Rides</h3>
								<p style="color:#fff">Click this to see Own Rides</p>
							</a>
						</center>
						
					</div>
					<div class="col-md-6" style="background:#945A0C; padding: 10px 0;">
						<center>
							<a data-toggle="tab" href="#otherrides"><h3 style="color:#fff;">Other Rides</h3>
							<p style="color:#fff">Click this to see Other Rides</p>
							</a>
						</center>
					</div>
				</div>
			
		</div>
		<div class="container" >
			 <div class="tab-content">
			    <div id="ownrides" class="tab-pane fade in active">
			    	
			      	<div class="col-md-9" style="margin:10px 0;">

					<!-- Own ride result row -->
						<div class="product-right-grids">
							<div class="product-right-top">
								<div class="p-left">
									<div class="profile-userpic" style="margin:10px 0;">
										<img src="images/pc3.jpg"  class="img-responsive" alt="">
									</div>
								</div>
								<div class="p-right">
									<div class="col-md-6 p-right-left">
										<h3>Ahemdabad to Mumbai</h3>										
										<h4>Audi- TN 08 R 6491</h4>
										<p class="p-call">Jan 17, 2016 1:40PM</p>
									</div>
									<div class="col-md-6 p-right-right">
										<h6>Cancelled</h6>
										<span class="p-offer"><i class="fa fa-inr"></i> 500 / Seat</span>
										<p>2 Seats Available</p>
										<p style="color:#FF9304"><i class="fa fa-taxi"></i></p>
										
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="clearfix"> </div>
							</div>	
						</div>
						<!-- //Own ride result row -->
						<!-- Own ride result row -->
						<div class="product-right-grids">
							<div class="product-right-top">
								<div class="p-left">
									<div class="profile-userpic" style="margin:10px 0;">
										<img src="images/pc3.jpg"  class="img-responsive" alt="">
									</div>
								</div>
								<div class="p-right">
									<div class="col-md-6 p-right-left">
										<h3>Ahemdabad to Mumbai</h3>										
										<h4>Audi- TN 08 R 6491</h4>
										<p class="p-call">Jan 17, 2016 1:40PM</p>
									</div>
									<div class="col-md-6 p-right-right">
										<h6>Available</h6>
										<span class="p-offer"><i class="fa fa-inr"></i> 500 / Seat</span>
										<p>2 Seats Available</p>
										<p style="color:red"><i class="fa fa-car"></i></p>
										
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="clearfix"> </div>
							</div>	
						</div>
						<!-- //Own ride result row -->		
			      	</div>

			      	<div class="col-md-3">

			      	</div>
			      
	
			    </div>
			    <div id="otherrides" class="tab-pane fade">
								      	<div class="col-md-9" style="margin:10px 0;">

					<!-- Own ride result row -->
						<div class="product-right-grids">
							<div class="product-right-top">
								<div class="p-left">
									<div class="profile-userpic" style="margin:10px 0;">
										<img src="images/pc2.jpg"  class="img-responsive" alt="">
									</div>
								</div>
								<div class="p-right">
									<div class="col-md-6 p-right-left">
										<h3>Ahemdabad to Mumbai</h3>										
										<h4>Audi- TN 08 R 6491</h4>
										<p class="p-call">Jan 17, 2016 1:40PM</p>
									</div>
									<div class="col-md-6 p-right-right">
										<h6>Cancelled</h6>
										<span class="p-offer"><i class="fa fa-inr"></i> 500 / Seat</span>
										<p>2 Seats Available</p>
										<p style="color:#FF9304"><i class="fa fa-taxi"></i></p>
										
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="clearfix"> </div>
							</div>	
						</div>
						<!-- //Own ride result row -->
						<!-- Own ride result row -->
						<div class="product-right-grids">
							<div class="product-right-top">
								<div class="p-left">
									<div class="profile-userpic" style="margin:10px 0;">
										<img src="images/pc1.jpg"  class="img-responsive" alt="">
									</div>
								</div>
								<div class="p-right">
									<div class="col-md-6 p-right-left">
										<h3>Ahemdabad to Mumbai</h3>										
										<h4>Audi- TN 08 R 6491</h4>
										<p class="p-call">Jan 17, 2016 1:40PM</p>
									</div>
									<div class="col-md-6 p-right-right">
										<h6>Available</h6>
										<span class="p-offer"><i class="fa fa-inr"></i> 500 / Seat</span>
										<p>2 Seats Available</p>
										<p style="color:red"><i class="fa fa-car"></i></p>
										
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="clearfix"> </div>
							</div>	
						</div>
						<!-- //Own ride result row -->		
			      	</div>

			      	<div class="col-md-3">

			      	</div>
			    </div>
			  </div>



		<!-- //container -->
	</div>
	<!-- //banner-bottom -->
	<?php include 'html-index/footer.php';?>

	<script defer src="js/jquery.flexslider.js"></script>
	<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script src="js/jquery-ui.js"></script>
	<script type="text/javascript" src="js/script.js"></script>	
</body>
</html>