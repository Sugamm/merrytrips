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

