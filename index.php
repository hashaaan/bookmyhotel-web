
      <?php include_once 'headerMain.php'; ?>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="text-bg">
                     <div class="padding_lert">
                        <h1>WELCOME TO BOOK MY HOTEL</h1>
                        
                        <p></p>
                        <a href="addhotel.php">Add Your Hotels</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end banner -->
      <!-- form_lebal -->
      <section>
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <form class="form_book" action="includes/search.inc.php" method="POST">
                     <div class="row">
                        <div class="col-md-3">
                           <label class="date">Suburb</label>
                           <input class="book_n" name="location" id="location" placeholder="Enter Suburb" type="text" />
                        </div>
                        <div class="col-md-3">
                           <label class="date">CHECKIN</label>
                           <input class="book_n" name="checkInDate" id="checkin"  type="date" />
                        </div>
                        <div class="col-md-3">
                           <label class="date">CHECKOUT</label>
                           <input class="book_n" name="checkOutDate" id="checkout" type="date" />
                        </div>
                        <div class="col-md-1">
                           <label class="date">GUESTS</label>
                           <input class="book_n" name="numberOfGuests" id="guests" placeholder="0" type="text" />
                        </div>
                        <div class="col-md-2">
                           <button class="book_btn" type="submit" name ="submit_index">Search</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </section>
 
       
       <br>
       
      <center>
      <div class=figure>
         <a href="includes/categories.inc.php?category=City View">
         <p>            
            <img src="images/pic1.jpg" width="300" height="300" alt="Eiffel tower" />
         </p>
         <h2><b>City View</b></h2>
         <p><b>9,385 Hotel</b></p>
         </a>
      </div>
       
      <div class=figure>
         <p>
            <a href="includes/categories.inc.php?category=Beachside">
               <img src="images/pic2.jpg" width="300" height="300" alt="Eiffel tower">
             </a>
         </p>
         <h2><b>Beach Side</b></h2>
         <p><b>12,345 Hotel</b></p>
      </div>
       
      <div class=figure>
         <p>
            <a href="includes/categories.inc.php?category=Cottage">
               <img src="images/pic3.jpg" width="300" height="300" alt="Eiffel tower">
            </a>
         </p>
         <h2><b>Cottage</b></h2>
         <p><b>11,678 Hotel</b></p>
      </div>
           
       </center>
       
      
      <div id="about"  class="about">
         <div class="container-fluid">
            <div class="row d_flex">
               <div class="col-md-6">
                  <div class="about_text">
                     <div class="titlepage">
                        <h2>About Us</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="about_img">
                     <figure><img src="images/img4.jpg" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->
       
   <div class="discounts">
       
      <h1><b>Discounts</b></h1>
      
      <br>
      
      <div class="container-fluid">
         <div class="row">
               <div class="col-md-4">
               <div class="polaroid">
                  <a href="hotelPage.php?hotelName=Hotel%20Sangrila"> <img src="images/san.jpg" alt="5 Terre" > </a>
                  <div class="container">
                  <h2 class="dishotels">Hotel Sangrila</h2>
                     <img src="images/star.png" alt="5 Terre" width="100px" >
                     <hr>
                     <h3 class="dishotels">AU$210</h3>
                  </div>
               </div>
               </div>
               <div class="col-md-4">
               <div class="polaroid" >
                  <a href="hotelPage.php?hotelName=Hotel%20Pokhara"><img src="images/poke.JPG" alt="5 Terre" ></a>
                  <div class="container">
                  <h2 class="dishotels">Hotel Pokhara</h2>
                     <img src="images/star.png" alt="5 Terre" width="100px" >
                     <hr>
                     <h3 class="dishotels">AU$190</h3>
                  </div>
               </div>
               </div>
               <div class="col-md-4">
               <div class="polaroid">
                  <a href="hotelPage.php?hotelName=Hotel%20Tepu"> <img src="images/tepu.JPG" alt="5 Terre" ></a>
                  <div class="container">
                  <h2 class="dishotels">Hotel Tepu</h2>
                     <img src="images/star.png" alt="5 Terre" width="100px" >
                     <hr>
                     <h3 class="dishotels">AU$240</h3>
                  </div>
               </div>
               </div>
         </div>
      </div>
      
   </div>
       
   <div class="explore">
          
      <h1><b>Explore</b></h1>
          
      <br>

      <div class="container-fluid">
         <div class="row">
               <div class="col-md-4">
                  <div class="polaroid">
                     <a href="includes/explore.inc.php?city=Sydney">
                     <img src="images/sydney.JPG" alt="5 Terre" > 
                        <div class="container">
                           <h2 class="dishotels">Sydney</h2>
                           <hr>
                           <h3 class="dishotels">380 Hotels</h3>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="polaroid" >
                     <a href="includes/explore.inc.php?city=Gold Coast">
                        <img src="images/goldcoast.JPG" alt="5 Terre" >
                        <div class="container">
                           <h2 class="dishotels">Gold COast</h2>   
                           <hr>
                           <h3 class="dishotels">189 Hotels</h3>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="polaroid">
                     <a href="includes/explore.inc.php?city=Canberra">
                        <img src="images/canberra.JPG" alt="5 Terre" >
                        <div class="container">
                           <h2 class="dishotels">Canberra</h2>
                           <hr>
                           <h3 class="dishotels">109 Hotels</h3>
                        </div>
                     </a>
                  </div>
               </div>
         </div>
      </div>
          
   </div>
       
    
       
      <!--  footer -->
      <footer id="contact">
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-6">
                     <div class="titlepage">
                        <h2>Contact Us</h2>
                     </div>
                     <div class="cont">
                        <h3>Feel Free To Contact Us Anytime </h3>
                    
                     </div>
                  </div>
                  <div class="col-md-6">
                     <form class="main_form" action="includes/contactBox.inc.php" method="POST">
                        <div class="row">
                           <div class="col-md-12 ">
                              <input class="contactus" id="name" placeholder="Full Name" type="type" name="name" /> 
                           </div>
                           <div class="col-md-12">
                              <input class="contactus" id="subject" placeholder="Subject" type="type" name="subject" /> 
                           </div>
                           <div class="col-md-12">
                              <input class="contactus" id="email" placeholder="Email" type="type" name="email">                          
                           </div>
                           <div class="col-md-12">
                              <textarea class="textarea" placeholder="Message" type="type" name="message"></textarea>
                           </div>
                           <div class="col-sm-12">
                              <button class="send_btn" type="submit" name="submit">Send</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
            <div class="copyright">
               
                
                
                
                <div class="explore2">
                    
                    <ul type="none" style="text-align: left;">
                    
                    <li></li>
                        <li><h2><a href="#"> Home </a></h2></li>
                         <li><h2><a href="#">Categories  </a> </h2></li>
                        <li><h2> <a href="#"> Discounts </a></h2></li>
                        <li><h2><a href="#"> Explore </a> </h2></li>
                    </ul>
                
                    
                  <ul type="none" style="text-align: left; position: absolute; left:200px; top:3950px;">
                        <li><h2><a href="#">About Us</a></h2></li>
                         <li><h2><a href="#"> Contact Us</a> </h2></li>
                        <li><h2>  <a href="#"> FAQ</a></h2></li>
                        <li><h2> <a href="#">  Privacy Policy</a></h2></li>
                  </ul>
                
                </div>
                
                <a href="index.php">
                   <img src="images/logo2.png" width="400px;"  style="position: absolute; right:50px; top:3950px;">
               </a>
                
            <hr>
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>Copyright ?? 2021 BookMyHotel. Designed by Group 4 </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>

