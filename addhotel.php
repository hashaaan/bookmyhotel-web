
<!DOCTYPE html>
<html lang="en">
   <head>
      
       
       <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
    text-align: left;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container2 {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
       
       
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
                              
                           </ul>
                           <div class="sign_btn"><a href="signup.php">Sign in</a></div>
                            <div class="sign_btn"><a href="login.php">Log in</a></div>
                             
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
                        <h1>Add Your Hotel To Our Website </h1>
                        <p>Let's connect with us adding your hotel with us, and get more customers.</p>
                        <p></p>
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end banner -->
      <!-- form_lebal -->
      
       
       <br> <br>
       
       
       <center><h1><b> Add Your Hotel With US</b></h1></center>
       <div class="container">
  <form action="hotelconn.php" method= "post">
    <p style="text-align:left;">First Name</p>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

     <p style="text-align:left;">Last Name</p>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
      
        <p style="text-align:left;">Your Hotel Name</p>
    <input type="text" id="lname" name="hotelname" placeholder="Your Hotel Name..">

      
        <p style="text-align:left;">Your Hotel Address</p>
    <input type="text" id="lname" name="address" placeholder="Your Hotel Address..">
      
        <p style="text-align:left;">Telephone Number</p>
    <input type="text" id="lname" name="telephone" placeholder="Telephone Number..">
      

      <p style="text-align:left;">Details About Your Hotel</p>
<!--    <textarea id="subject" name="subject" placeholder="Write your hotel details.." style="height:200px"></textarea>-->
      
       <input type="text" id="subject" name="subject" placeholder="More Details..">
      
      

      <center><p style="text-align:left;">Add some of your hotel images</p></center>
      <input type="file" name"image">

      
      <br><br><br>
<input type="submit" value="Submit">
       <br>
  </form>
</div>
           
      
       
    
       <footer id="contact">
         <div class="footer">
     
            <div class="copyright">
               
                
                
                
                <div class="explore2">
                    
                    <ul type="none" style="text-align: left;">
                    
                    <li></li>
                        <li><h2><a href="#"> Home </a></h2></li>
                         <li><h2><a href="#">Categories  </a> </h2></li>
                        <li><h2> <a href="#"> Discounts </a></h2></li>
                        <li><h2><a href="#"> Explore </a> </h2></li>
                    </ul>
                
                    
                  <ul type="none" style="text-align: left; position: absolute; left:200px; top:2187px">
                    
                    <li></li>
                        <li><h2><a href="#">About Us</a></h2></li>
                         <li><h2><a href="#"> Contact Us</a> </h2></li>
                        <li><h2>  <a href="#"> FAQ</a></h2></li>
                        <li><h2> <a href="#">  Privacy Policy</a></h2></li>
                    </ul>
                
                </div>
                
                <a href="index.php">    <img src="images/logo2.png" width="400px;"  style="position: absolute; right:50px; top:2187px"> </a>
                
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

