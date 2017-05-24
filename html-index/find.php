
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
