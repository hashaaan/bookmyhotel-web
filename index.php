
<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
     
      <title>Book My Hotel</title>
      

      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/responsive.css">
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
       
       
       
   </head>
 
   <body class="main-layout">
   
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>

      <header>
        
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                               <a href="index.php">BookMyHotel</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item">
                                 <a class="nav-link" href="index.php">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="categories.php">Categories</a>
                              </li>
                                <li class="nav-item">
                                 <a class="nav-link" href="discount.php">Discounts</a>
                              </li>
                           </ul>
                           <?php
                           if (isset($_SESSION["firstName"])) {
                              echo ('<div class="sign_btn"><a href ="includes/profile.inc.php?header=true">Profile</a></div>');
                              echo ('<div class="sign_btn"><a href="includes/logout.inc.php">Logout</a></div>');
                           } else {
                              echo ('<div class="sign_btn"><a href="signup.php">Sign in</a></div>');
                              echo ('<div class="sign_btn"><a href="login.php">Login</a></div>');
                           }
                           ?>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="text-bg">
                     <div class="padding_lert">
                        <h1>WELCOME TO BOOK MY HOTEL </h1>
                        
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
                  <form class="form_book">
                     <div class="row">
                        <div class="col-md-3">
                           <label class="date">ARRIVAL DATE</label>
                           <input class="book_n"  type="date" >
                        </div>
                        <div class="col-md-3">
                           <label class="date">DEPARTURE DATE</label>
                           <input class="book_n"  type="date" >
                        </div>
                        <div class="col-md-3">
                           <label class="date">PERSON</label>
                           <input class="book_n" placeholder="2" type="type" name="2">
                        </div>
                        <div class="col-md-3">
                           <button class="book_btn">Book Now</button>
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
           <p><a href="afterSearch.php"><img src="images/pic1.jpg"
    width="300" height="300"
                                                                          alt="Eiffel tower"></a></p>
           <h2><b>City View</b></h2>
          
           <p><b>9,385 Hotel</b></p>
</div>
       
         <div class=figure>
  <p><a href="afterSearch.php"><img src="images/pic2.jpg"
    width="300" height="300"
    alt="Eiffel tower">
             </a></p>
             <h2><b>Beach Side</b></h2>
             <p><b>12,345 Hotel</b></p>
</div>
       
              <div class=figure>
  <p><a href="afterSearch.php"><img src="images/pic3.jpg"
   width="300" height="300"
          alt="Eiffel tower"></a></p>
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
   
        
        <div class="polaroid" style="position: absolute; left: 500px;">
            <a href="hotelPage.php?hotelName=Hotel%20Sangrila"> <img src="images/san.jpg" alt="5 Terre" > </a>
  <div class="container">
  <h2 class="dishotels">Hotel Sangrila</h2>
      <img src="images/star.png" alt="5 Terre" width="100px" >
      <hr>
      <h3 class="dishotels">AU$210</h3>
  </div>
</div>
       
           <div class="polaroid" style="position: absolute; left: 950px;">
               <a href="hotelPage.php?hotelName=Hotel%20Pokhara"><img src="images/poke.JPG" alt="5 Terre" ></a>
  <div class="container">
  <h2 class="dishotels">Hotel Pokhara</h2>
      <img src="images/star.png" alt="5 Terre" width="100px" >
      <hr>
      <h3 class="dishotels">AU$190</h3>
  </div>
</div>
        
        
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
       
      <div class="explore">
          
<h1><b>Explore</b></h1>
          
          
           <br>
   
        
        <div class="polaroid" style="position: absolute; left: 500px;">
            <a href="afterSearch.php"> <img src="images/sydney.JPG" alt="5 Terre" > </a>
  <div class="container">
  <h2 class="dishotels">Sydney</h2>
      <hr>
      <h3 class="dishotels">380 Hotels</h3>
  </div>
</div>
       
           <div class="polaroid" style="position: absolute; left: 950px;">
               <a href="afterSearch.php"><img src="images/goldcoast.JPG" alt="5 Terre" ></a>
  <div class="container">
  <h2 class="dishotels">Gold COast</h2>
    
      <hr>
      <h3 class="dishotels">189 Hotels</h3>
  </div>
</div>
        
        
           <div class="polaroid">
  <a href="afterSearch.php"> <img src="images/canberra.JPG" alt="5 Terre" ></a>
  <div class="container">
  <h2 class="dishotels">Canberra</h2>
      <hr>
      <h3 class="dishotels">109 Hotels</h3>
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
                     <form id="request" class="main_form">
                        <div class="row">
                           <div class="col-md-12 ">
                              <input class="contactus" placeholder="Full Name" type="type" name="Full Name"> 
                           </div>
                           <div class="col-md-12">
                              <input class="contactus" placeholder="Email" type="type" name="Email"> 
                           </div>
                           <div class="col-md-12">
                              <input class="contactus" placeholder="Phone Number" type="type" name="Phone Number">                          
                           </div>
                           <div class="col-md-12">
                              <textarea class="textarea" placeholder="Message" type="type" Message="Name">Message </textarea>
                           </div>
                           <div class="col-sm-12">
                              <button class="send_btn">Send</button>
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
                
                    
                  <ul type="none" style="text-align: left; position: absolute; left:200px; top:3825px;">
                    
                    <li></li>
                        <li><h2><a href="#">About Us</a></h2></li>
                         <li><h2><a href="#"> Contact Us</a> </h2></li>
                        <li><h2>  <a href="#"> FAQ</a></h2></li>
                        <li><h2> <a href="#">  Privacy Policy</a></h2></li>
                    </ul>
                
                </div>
                
                <a href="index.php">    <img src="images/logo2.png" width="400px;"  style="position: absolute; right:50px; top:3850px;"> </a>
                
            <hr>
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>Copyright © 2021 BookMyHotel. Designed by Group 4 </p>
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

