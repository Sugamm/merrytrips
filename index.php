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
						<!-- <span><h1><a  href="index.html"><span>Merry</span>Trips</a></h1></span> -->
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
							<li><a href="#how">How Merrytrips Works? </a></li>
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
					<!-- If Login session not occer then Facebook Button -->
					<!--
					<div id="loginContainer" style="background-color:#46629E">
						<a href="#" id="loginButton" ><span><i class="fa fa-facebook"></i> Login With Facebook</span></a>
					</div> -->
					<div id="loginContainer"><a href="#" id="loginButton"><span><i class="glyphicon glyphicon-user"></i> Sugam</span></a>
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
																		<a href="myrides.php">
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
																<h5 style="margin:0 0 20px 0;"> No Request  </h5>
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
	<!-- container -->
	<div class="container">
		<div class="col-md-4 col-sm-4 hidden-phone banner-left">
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
	<div class="col-md-4 col-sm-4 banner-right">
		<div class="sap_tabs">	
			<div class="booking-info">
				<h2>Share & Find Your Ride</h2>
			</div>
			 <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
				  <ul class="resp-tabs-list">
					  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"> <span class="glyphicon glyphicon-search" aria-hidden="true"> </span> <span> Find Rides</span></li>
					  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span><i class="fa fa-taxi"></i> Create Rides</span></li>
					  <div class="clearfix"></div>
				  </ul>		
				  <!---->		  	 
				 <div class="resp-tabs-container">
					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
						
						<div class="facts">
							<div class="booking-form">
								<!---strat-date-piker---->
								<script>
									$(function() {
										$( "#datepicker,#datepicker1" ).datepicker();
									});
								</script>
								<!---/End-date-piker---->
								<!-- Set here the key for your domain in order to hide the watermark on the web server -->
								<!-- Find Rides -->
								<div class="online_reservation">
										<div class="b_room">
											<div class="booking_room">
												<form method="" action="search.php">
												<div class="reservation">
													<ul>		
														<li  class="span1_of_1 desti"  style="margin-left:0px; width:100%">
															 <h5>Starting Point</h5>
															 <div class="book_date">
																
																	<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
																	<input type="text" placeholder="Type Departure City" class="typeahead1 input-md form-control tt-input" required="">
																 
															 </div>					
														 </li>
														 <li  class="span1_of_1 left desti" style="margin-left:0px; width:100%">
															 <h5>Destination</h5>
															 <div class="book_date">
															
																<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
																<input type="text" placeholder="Type Destination City" class="typeahead1 input-md form-control tt-input" required="">
															 
															 </div>		
														 </li>
														 <div class="clearfix"></div>
													</ul>
												</div>
												<div class="reservation">
													<ul>	
														 <li  class="span1_of_1">
															 <h5>Departure</h5>
															 <div class="book_date">
															 
																<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
																<input type="date" value="Select date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Select date';}">
															 
															 </div>		
														 </li>
														  <li class="span1_of_1 left adult">
															 <h5>Seats</h5>
															 <div class="section_room">
																  <select id="country" onchange="change_country(this.value)" class="frm-field required">
																		<option value="null">1</option>
																		<option value="null">2</option>         
																		<option value="AX">3</option>
																		<option value="AX">4</option>
																		<option value="AX">5</option>
																		<option value="AX">6</option>
																  </select>
															 </div>	
														</li>
														<br>
														<div class="clearfix"></div>
													</ul>
												</div>
												<div class="reservation">
													<ul>	
														 <li class="span1_of_3">
																<div class="date_btn">
																	<input type="submit" value="Search" />
																</div>
														 </li>
														 <div class="clearfix"></div>
													</ul>
												</div>
											</form>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<!-- //Find Rides -->
							</div>	
						</div>
					</div>	
			
			<!--//Find Rides from end here  -->
					<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
						<div class="facts">
					  		<div class="booking-form">
					  			<link rel="stylesheet" href="css/jquery-ui.css" />
						  		<script src="js/jquery-ui.js"></script>
						        <script>
						            $(function() {
						            $( "#datepicker,#datepicker1" ).datepicker();
						            });
						        </script>


								  <div class="online_reservation">
								      <div class="b_room">
								        <div class="booking_room">
								         	<ul class="nav nav-tabs " style="border-bottom: 0px; ">
									           	<li class="active"><a data-toggle="tab" href="#pool" style="border-radius: 0 0;border:1px solid #FF9304;color: #FF9304">Pool your car</a></li>
									            <li><a data-toggle="tab" href="#share" style="border-radius: 0 0;border:1px solid #FF9304; color: #FF9304">Share a Cab</a></li>
											</ul>
								        	<div class="tab-content">
								            <!-- Pool your car Tab -->
								            <div id="pool" class="tab-pane fade in active">
								              <form  method="get" action="search.php">
								                 <div class="reservation">
								                        <ul>    
								                          <li  class="span1_of_1 desti" style="margin-left:0px; width:100%">
								                             <h5>Start from</h5>
								                             <div class="book_date">
								                               
								                                <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
								                                <input type="text" placeholder="Type Departure City" class="typeahead1 input-md form-control tt-input" required="">
								                               
								                             </div>         
								                           </li>
								                           <li  class="span1_of_1 left desti" style="margin-left:0px; width:100%">
								                             <h5>Destination</h5>
								                             <div class="book_date">
								                            
								                              <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
								                              <input type="text" placeholder="Type Destination City" class="typeahead1 input-md form-control tt-input" required="">
								                             
								                             </div>   
								                           </li>
								                           <div class="clearfix"></div>
								                        </ul>
								                      </div>
								                      <div class="reservation">
								                        <ul>  
								                           <li  class="span1_of_1">
									                            <h5>Departure</h5>
									                            <div class="book_date">
									                             	<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
									                            	<input type="date" value="Select date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Select date';}">
									                            </div>   
								                            </li>
								                            <li class="span1_of_1 left">
								                             <h5>Seats</h5>
								                             <div class="section_room">
								                                <select id="country" onchange="change_country(this.value)" class="frm-field required">
								                                  <option value="null">1</option>
								                                  <option value="null">2</option>         
								                                  <option value="AX">3</option>
								                                  <option value="AX">4</option>
								                                  <option value="AX">5</option>
								                                  <option value="AX">6</option>
								                                </select>
								                             </div> 
								                            </li>
								                          <div class="clearfix"></div>
								                        </ul>
								                      </div>
								                      	<div class="reservation">
								                            <div class="btn-group btn-group-justified" role="group" aria-label="...">
								                              <div class="btn-group" role="group">
								                                <button type="button" class="btn btn-default" >Distance</button>
								                              </div>
								                              <div class="btn-group" role="group">
								                                <Input type="text" class="btn btn-default" placeholder="Estimate Fare" />
								                              </div>
								                            </div>
								                           	<div class="clearfix"></div>
								                        </div>
								                      	<div class="reservation">
									                        <ul>  
									                           <li class="span1_of_3">
									                              <div class="date_btn">
									                                <input type="submit" value="Search" />
									                              </div>
									                           </li>
									                           <div class="clearfix"></div>
									                        </ul>
								                        </div>
								                </form>
								            </div>
								            <!-- Pool your car Tab -->
								          <!-- Share a Cab -->
								          <div id="share" class="tab-pane fade">
								            <form method="get" action="search.php">
								                  <div class="reservation">
								                      <ul>    
								                        <li  class="span1_of_1 desti" style="margin-left:0px; width:100%">
								                           <h5>Start from</h5>
								                           <div class="book_date">
								                             
								                              <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
								                              <input type="text" placeholder="Type Departure City" class="typeahead1 input-md form-control tt-input" required="">
								                             
								                           </div>         
								                         </li>
								                         <li  class="span1_of_1 left desti" style="margin-left:0px; width:100%">
								                           <h5>Destination</h5>
								                           <div class="book_date">
								                          
								                            <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
								                            <input type="text" placeholder="Type Destination City" class="typeahead1 input-md form-control tt-input" required="">
								                           
								                           </div>   
								                         </li>
								                         <div class="clearfix"></div>
								                      </ul>
								                    </div>
								                    <div class="reservation">
								                      <ul>  
								                         <li  class="span1_of_1">
								                           <h5>Departure</h5>
								                           <div class="book_date">
								                           
								                            <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
								                            <input type="date" value="Select date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Select date';}">
								                          
								                           </div>   
								                         </li>
								                         <li class="span1_of_1 left">
								                           <h5>Seats</h5>
								                           
								                           <div class="section_room">
								                              <select id="country" onchange="change_country(this.value)" class="frm-field required">
								                                <option value="null">1</option>
								                                <option value="null">2</option>         
								                                <option value="AX">3</option>
								                                <option value="AX">4</option>
								                                <option value="AX">5</option>
								                                <option value="AX">6</option>
								                              </select>
								                           </div> 
								                        </li>
								                        <div class="clearfix"></div>
								                      </ul>
								                    </div>
								                    <div class="reservation">
								                        <div class="btn-group btn-group-justified" role="group" aria-label="...">
								                            <div class="btn-group" role="group">
								                              <button type="button" class="btn btn-default" >Distance</button>
								                            </div>
								                        </div>
								                        <div class="clearfix"></div>
								                    </div>
								                    <div class="reservation">
								                      <ul>  
								                         <li class="span1_of_3">
								                            <div class="date_btn">
								                            	<input type="submit" value="Search" />
								                            </div>
								                         </li>
								                         <div class="clearfix"></div>
								                      </ul>
								                    </div>
								              </form>
								          </div>
								          <!-- //Share a Cab -->
								        </div>
									</div>
								    <div class="clearfix"></div>
								</div>
							</div>
						</div>  
					</div>
				</div> 			        					            	      
			</div>	
			</div>	
		</div>
	</div>
	<div class="col-md-4 col-sm-4 banner-bottom-grid hidden-phone hidden-tablet" >
			<div class="news-grids" style="margin:0;">
				<div class="news-grids-info" style="background:#FF9304;padding:2em 10px;">
					<h4 style="color:#fff;"><b>Latest Rides</b></h4>
				</div>
				<div class="news-grids-bottom" style="background:rgba(0, 0, 0, 0.57);margin:0px">
					<div id="design" class="date" style="min-height:200px">
						<div id="cycler" >   
							
							<div class="date-text">
								<a href="#">Sugam Malviya</a>
								<p style="color:#fff;font-size:20px;">Indore to Pune.<button type="button" class="btn btn-success btm-sm">Join Now</button></p>										
							</div>
							<div class="date-text">
								<a href="#">Suhail Ameen</a>
								<p style="color:#fff;font-size:20px;">Chennai to Agra. <button type="button" class="btn btn-success btm-sm">Join Now</button></p>
							</div>
							<div class="date-text">
								<a href="#">Subhankar Raj</a>
								<p style="color:#fff;font-size:20px;">Mumbai to Goa. <button type="button" class="btn btn-success btm-sm">Join Now</button></p>
							</div>
							<div class="date-text">
								<a href"#l">Arvind Bhaiya</a>
								<p style="color:#fff;font-size:20px;">Ahemdabad to Goa. <button type="button" class="btn btn-success btm-sm">Join Now</button></p>
							</div>
						</div>
						<script>
							function cycle($item, $cycler){
								setTimeout(cycle, 2000, $item.next(), $cycler);
								
								$item.slideUp(1000,function(){
									$item.appendTo($cycler).show();        
								});
				
								}
							cycle($('#cycler div:first'),  $('#cycler'));
						</script>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!-- //container -->
</div>
<!-- //banner -->
<!-- First Banner -->
<div class="banner-bottom">
	<div class="bannertop">
		<div class="container">
			<div class="full-nav-social-top">
				<div class="full-nav-social">
					<h1>Why Chose Us!</h1>
					<ul>
					<li><a href="#">We bring forth the next generation of travelling</a></li>
					<li><a href="#">Uncomplicated</a></li>
					<li><a href="#">Safety</a></li>
					<li><a href="#">Doing our bit to save the planet</a></li>
					<li><a href="#">Spontaneity</a></li>
					<li><a href="#">Breaking barriers</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>	
			</div>
		</div>
	</div>			
</div>
<!-- //First Banner -->
	
<!-- Second Banner -->	
<div class="banner-bottom">
	<div class="bannertop1" id="how">
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
	<!--Reviews-->
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
	<!--//Reviews-->	
</div>
<!--// popular-grids -->
<!-- popular-grids Featured in -->
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
<!-- //popular-grids Featured in -->
<!-- footer -->
<?php include 'html-index/footer.php';?>
<!--//Footer -->

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