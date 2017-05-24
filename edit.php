<html>
<?php include 'html-index/head.php';?>
<body>
	<!-- header -->
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
																<img src="images/pc3.jpg"  class="img-responsive" style="height:160px;" alt="">
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
																				<a href="index.php">
																				<i class="glyphicon glyphicon-home"></i>
																				Dashboard </a>
																			</li>
																			<li>
																				<a href="myrides.php">
																				<i class="fa fa-taxi"></i>
																				My Rides </a>
																			</li>
																			<li class="active">
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
	<!-- //header -->
<div class="container">
<div class="col-lg-12 col-sm-12">
    <div class="card hovercard">
        <div class="card-background">
            <img class="card-bkimg" alt="" src="images/banner.jpg">
            <!-- http://lorempixel.com/850/280/people/9/ -->
        </div>
        <div class="useravatar">
            <img alt="" src="images/pc3.jpg">
        </div>
        <div class="card-info"> <span class="card-title" style="color:#fff;padding:10px; font-size:2em">Sugam Malviya</span>

        </div>
    </div>
    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><i class="fa fa-user" aria-hidden="true" ></i>
                <div class="hidden-xs">Your Profile</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab"><i class="fa fa-pencil-square-o" aria-hidden="true" ></i>
                <div class="hidden-xs">Vehicle Detail</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab"><i class="fa fa-car" aria-hidden="true"	></i>
                <div class="hidden-xs">Ride Prefrences</div>
            </button>
        </div>
    </div>

        <div class="well">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="tab1">
          <h2>Hello, I'm Sugam Malviya Blahh Blahhhh<h2>
          <p>Software Developer </p>
        </div>
        <div class="tab-pane fade in" id="tab2">
          <form class="form-horizontal">
			  <div class="form-group">
			    <label for="vehiclenumber" class="col-sm-2 control-label">Vehicle Number</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="vehiclenumber" placeholder="Enter Your vehicle Number">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="licencenumber" class="col-sm-2 control-label">Licence Number</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="licencenumber" placeholder="Enter Your Licence Number">
			    </div>
			  </div>
			  <div class="form-group">
		          
		          	<label for="color" class="col-sm-2 control-label">Select Color of Vehicle</label>
		          	<div class="col-md-10">
		          	<select class="form-control" id="color">
					  <option>White</option>
					  <option>Blue</option>
					  <option>Red</option>
					  <option>Black</option>
					  <option>Brown</option>
					  <option>Pink</option>
					  
					</select>
		          </div>
		      </div>
		      <div class="form-group">
			    <label for="modelnumber" class="col-sm-2 control-label">Model Number</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="modelnumber" placeholder="Enter Your car's Model Number">
			    </div>
			  </div>
			  
			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-default">Add Vehicle</button>
			    </div>
			  </div>
			</form>
        </div>
        <div class="tab-pane fade in" id="tab3">
        <div style="container">
        <form method="get" action="#" class="form-horizontal">
        <div class="form-group">
          <div class="col-md-4">
          	<label>Smoking</label>
          	<select class="form-control">
			  <option>Smoking Prefrences</option>
			  <option>Strictly Prohibited</option>
			  <option>Lenient Usage</option>
			  <option>Complete Permission</option>
			  
			</select>
          </div>
          <div class="col-md-4">
          	<label>Pet</label>
          	<select class="form-control">
			  <option>Pet Prefrences</option>
			  <option>No Pet Please</option>
			  <option>Certain Pets Are Excused</option>
			  <option>I Love Pets</option>
			</select>
          </div>
          <div class="col-md-4">
          	<label>Music</label>
          	<select class="form-control">
			  <option>Music Prefrences</option>
			  <option>Silence Please</option>
			  <option>At Time</option>
			  <option>All The Time</option>
			</select>
          </div>
      </div>
      <div class="form-group">
          <div class="col-md-12" style="padding-top:20px;">
          	<label>Any Special Prefrences</label>
          	<textarea class="form-control" rows="3" placeholder="Any Other Prefrences"></textarea>
          </div>
      </div>
          
           <button type="submit" class="btn btn-success">Save</button>
      </form>
      </div>
        </div>
      </div>
    </div>
    
    </div>
    </div>
    <script type="text/javascript">
    $(document).ready(function() {
	$(".btn-pref .btn").click(function () {
	    $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
	    // $(".tab").addClass("active"); // instead of this do the below 
	    $(this).removeClass("btn-default").addClass("btn-primary");   
	});
	});
    </script> 
    <?php include 'html-index/footer.php';?>
	<script defer src="js/jquery.flexslider.js"></script>
	<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script src="js/jquery-ui.js"></script>
	<script type="text/javascript" src="js/script.js"></script>	       
</body>
</html>