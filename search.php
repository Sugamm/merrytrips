<!DOCTYPE html>
<html>
<?php include 'html-index/head.php';?>
<body>
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
																			<li class="active">
																				<a href="#">
																				<i class="glyphicon glyphicon-home"></i>
																				Dashboard </a>
																			</li>
																			<li>
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
<!-- banner -->
	<div class="banner holidays-banner" style="background:#ccc;">
		<!-- container -->
		<div class="container">
			<div class="deals-info">
				<h2  style="color:black;">Search Rides</h2>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //banner -->
	<!-- banner-bottom -->
	<div class="banner-bottom">
		<!-- container -->
		<div class="container">
			<div class="faqs-top-grids">
				<div class="product-grids">
					<div class="col-md-9 product-right">
						<!-- search result row -->
						<div class="product-right-grids">
							<div class="product-right-top">
								<div class="p-left">
									<div class="profile-userpic" style="margin:10px 0;">
										<img src="images/pc3.jpg"  class="img-responsive" alt="">
									</div>
								</div>
								<div class="p-right">
									<div class="col-md-6 p-right-left">
										<a href="#">Sugam Malviya</a>
										<div class="p-right-price">
											<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
											<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
											<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
											<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
										</div>
										<h4>Indore to Pune</h4>
										<p class="p-call">Jan 17, 2016 1:40PM</p>
									</div>
									<div class="col-md-6 p-right-right">
										<button type="button" class="btn btn-success">Join Now</button>
										<p>Smoking: Strictly Prohibited</p>
										<p>Pet: I love Pet</p>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="clearfix"> </div>
							</div>	
						</div>
						<!-- //search result row -->

						<!-- search result row -->
						<div class="product-right-grids">
							<div class="product-right-top">
								<div class="p-left">
									<div class="profile-userpic" style="margin:10px 0;">
										<img src="images/pc1.jpg"  class="img-responsive" alt="">
									</div>
								</div>
								<div class="p-right">
									<div class="col-md-6 p-right-left">
										<a href="#">Sohial Ameen</a>
										<div class="p-right-price">
											<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
											<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
											
										</div>
										<h4>Chennai to Bangalore</h4>
										<p class="p-call">Jan 17, 2016 1:40PM</p>
									</div>
									<div class="col-md-6 p-right-right">
										<button type="button" class="btn btn-success">Join Now</button>
										<p>Smoking: Strictly Prohibited</p>
										<p>Pet: I love Pet</p>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="clearfix"> </div>
							</div>	
						</div>
						<!-- //search result row -->

						<!-- search result row -->
						<div class="product-right-grids">
							<div class="product-right-top">
								<div class="p-left">
									<div class="profile-userpic" style="margin:10px 0;">
										<img src="images/pc2.jpg"  class="img-responsive" alt="">
									</div>
								</div>
								<div class="p-right">
									<div class="col-md-6 p-right-left">
										<a href="#">Arvind Bhaiya</a>
										<div class="p-right-price">
											<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
											<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
											<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
											<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
											<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
										</div>
										<h4>Ahemdabad to Mumbai</h4>
										<p class="p-call">Jan 17, 2016 1:40PM</p>
									</div>
									<div class="col-md-6 p-right-right">
										<button type="button" class="btn btn-success">Join Now</button>
										<p>Smoking: Strictly Prohibited</p>
										<p>Pet: I love Pet</p>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="clearfix"> </div>
							</div>	
						</div>
						<!-- //search result row -->



					</div>

					<div class="col-md-3 product-left">
						<div class="h-class">
							<h5>Ride Class</h5>
							<div class="hotel-price">
								<label class="check">
									<input type="checkbox">
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="starTextLabel">5 Stars (18)</span>
								</label>
							</div>
							<div class="hotel-price">
								<label class="check">
									<input type="checkbox" checked="checked" data-track="HOT:SR:StarRating:5Star">
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="starTextLabel">4 Stars (30)</span>
								</label>
							</div>
							<div class="hotel-price">
								<label class="check">
									<input type="checkbox">
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="starTextLabel">3 Stars (106)</span>
								</label>
							</div>
							<div class="hotel-price">
								<label class="check">
									<input type="checkbox">
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="starTextLabel">2 Stars (78)</span>
								</label>
							</div>
							<div class="hotel-price">
								<label class="check">
									<input type="checkbox">
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="starTextLabel">1 Stars (10)</span>
								</label>
							</div>
						</div>
						<div class="h-class p-day">
							<h5>Price per Ride</h5>
							<div class="hotel-price">
								<label class="check">
									<input type="checkbox" checked="checked" data-track="HOT:SR:StarRating:5Star">
									<span class="p-day-grid">Less than $100 (76)</span>
								</label>
							</div>
							<div class="hotel-price">
								<label class="check">
									<input type="checkbox">
									<span class="p-day-grid">$100 to $200 (132)</span>
								</label>
							</div>
							<div class="hotel-price">
								<label class="check">
									<input type="checkbox">
									<span class="p-day-grid">$300 to $300 (223)</span>
								</label>
							</div>
							<div class="hotel-price">
								<label class="check">
									<input type="checkbox">
									<span class="p-day-grid">$300 to $400 (84)</span>
								</label>
							</div>
							<div class="hotel-price">
								<label class="check">
									<input type="checkbox">
									<span class="p-day-grid">$500 to $600 (23)</span>
								</label>
							</div>
						</div>
						<div class="h-class">
							<h5>Popular Area</h5>
							<div class="hotel-price">
								<label class="check">
									<input type="radio" name="hideRegionId" checked="checked" data-track="HOT:SR:Area">
									<span class="p-day-grid">Mumbai</span>
								</label>
							</div>
							<div class="hotel-price">
								<label class="check">
									<input type="radio" name="hideRegionId"  data-track="HOT:SR:Area">
									<span class="p-day-grid">Dehli</span>
								</label>
							</div>
							<div class="hotel-price">
								<label class="check">
									<input type="radio" name="hideRegionId"  data-track="HOT:SR:Area">
									<span class="p-day-grid">Chennai</span>
								</label>
							</div>
							<div class="hotel-price">
								<label class="check">
									<input type="radio" name="hideRegionId"  data-track="HOT:SR:Area">
									<span class="p-day-grid">Ahemdabad</span>
								</label>
							</div>
							<div class="hotel-price">
								<label class="check">
									<input type="radio" name="hideRegionId"  data-track="HOT:SR:Area">
									<span class="p-day-grid">Bangalore</span>
								</label>
							</div>
							<div class="hotel-price">
								<label class="check">
									<input type="radio" name="hideRegionId"  data-track="HOT:SR:Area">
									<span class="p-day-grid">Agra</span>
								</label>
							</div>
							<div class="hotel-price">
								<label class="check">
									<input type="radio" name="hideRegionId"  data-track="HOT:SR:Area">
									<span class="p-day-grid">Indore</span>
								</label>
							</div>
							<div class="hotel-price">
								<label class="check">
									<input type="radio" name="hideRegionId"  data-track="HOT:SR:Area">
									<span class="p-day-grid">Kolkata</span>
								</label>
							</div>
							
						</div>
					</div>
					<div class="clearfix"> </div>
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