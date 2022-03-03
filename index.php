<?php
$con=mysqli_connect("localhost","root","","dbms") or die("Database not connected");
  ?>

<!DOCTYPE html>
<html>
<head>
  
  <title>Welcome To Vehicle Emergancy Service System</title>
  <!-- Styles -->


 <link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
 
</head>

<body>
    <?php
    $mess = '';
if (isset($_POST['submit'])) {
  $Feedback=$_POST['feedback'];
  $sql="INSERT INTO feedback (feedback) VALUES ('$Feedback')";
  $query=mysqli_query($con,$sql);
  if ($query) {
  $mess .= "<b class=\"dark-gray\">your feedback send</b>";
    # code...
  }else{

  }
  # code...
}
?>
<!--start navbar-->
    <div class="navbar">
      <div class="container">
       
          <div class="navbar-brand"><img id="img1" src="img/breakdowntruck.png" alt="Logo"></div>
        
        <div class="navbar-collapse">
          <ul class="navbar-nav list-inline ">
            <ul class="list-inline info ">
                        <li><a href="tel:1231231234"><span class="fa fa-phone"></span> 123-123-1234</a></li>
                        <li><span class="fa fa-envelope"></span> support@vess.com</li>
                        <li><span class="fa fa-clock-o"></span> 24X7 Open</li>
                        
           <ul class="list-inline float-right">
           	  <li><a href="index.php"><span class="fa fa-home"></span> Home |</a></li>
            <li><a href="form.php"><span class="fa fa-user"></span> Register |</a></li>
            <li><a href="contact.php"><span class="fa fa-headphones"></span> Contact |</a></li>
            <li><a href="about.php"><span class="fa fa-info"></span> About </a></li>
          </ul>
          </ul>
        </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
 <!-- Navbar end -->

 <!--Start Header-->
   
    <section id="header" style="background-image: url('img/back.jpg');">
      <div class="overlay bg-image" >
        <div class="head">
   
          <div class="container1">    
               <img class="header-img" src="img/header.png" alt="Header Image">   

              <div class="service-item ">
               <a href="find.php"><img class="header-img-am" src="img/service1.jpg" alt="Header Image"></a>
              </div>

              <div class="service-item">
               <a href="findambulance.php">	<img class="header-img-am" src="img/ambulance1.jpg" alt="Header Image"></a>
             </div>
        </div>
      </div>
    </div>
   </section>

    <!--Main 1-->
    <section id="main1">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 margin-30">
            <h2>A Long Winded Header</h2><br />
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p><br />
            <blockquote>
              commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </blockquote>
            <br />
          
          <div class="col-sm-6 fadeInUpBig">
            <img class="main1-img img-responsive pull-right" src="img/retro-car-repair-garage1.jpg" alt="Main1 Image">
          </div>
        </div>
      </div>
    </section>
    
    <!--Main 2-->
    <section id="main2">
      <div class="container">
        <div class="row">

          <div class="col-sm-6 margin-30">
            <h2>Another Header Section</h2><br />
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p><br />
          </div>

          <div class="col-sm-6 fadeInUpBig">
            <img class="main2-img pull-left" src="img/Recovery-Service.jpg" alt="Main2 Image">
          </div>
        

        </div>
      </div>
    </section>
    
    <!--feedback-->
    <section id="message">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <form action="" method="POST">
            <h2 class="white">Your Feedback</h2>
                  <?php
                 echo $mess;
                 ?>   </br> </br>  
                     <textarea placeholder="Type your Feedback here...." tabindex="5" name="feedback" required></textarea>
            <br><br>
            <button class="btn btn-primary btn-lg" name="submit">send  .<i class="fa fa-twitter"></i></button>
          </form>
          </div>
        </div>
      </div>
    </section>
    
    
    <!--Bottom-->
    <section id="bottom">
      <div class="container">
        
        <div class="row margin-40">
          <div class="col-sm-12 text-center">
          
            <ul class="list-inline social">
                        <li><a href="index.php"><span class="fa fa-facebook"></span></a></li>
                        <li><a href="index.php"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="index.php"><span class="fa fa-dribbble"></span></a></li>
                        <li><a href="index.php"><span class="fa fa-linkedin"></span></a></li>
                        <li><a href="index.php"><span class="fa fa-youtube"></span></a></li>
                    
            </ul>
        
          </div>
        </div>
        
      </div>
    </section>
    

      <div class="container" style="background-color:#ffcb0f;border-color:#080808;border-radius: 8px;">
        <div class="row">
          <div class="col-sm-12 text-center">
            <p><small>Copyright &copy; <i>nipunmadusanka</i>. All rights reserved.</small></p>
          </div>
        </div>
      </div>

    </body>
</html>
