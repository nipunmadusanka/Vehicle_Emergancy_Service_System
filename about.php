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
     <?php
     
     

    $msg = '';

    $query="SELECT * FROM feedback WHERE feedback LIKE '%best%'";
    $user= mysqli_query($con,$query);
    if ($user) {
      while ($users=mysqli_fetch_assoc($user)) {
    $msg .= "   ";    
    $msg .= "|    {$users['feedback']}    |";
       $msg .= "   ";
        
      }

      }
      else{
        echo "faild";
     }
     ?>
  
 <!-- Navbar end -->
    <section class="header" style="background-image: url('img/hero__tire-service.jpg');background-repeat: no-repeat;">
  <div class="container">
<div class="row">
  <div class="block">
    
        <h3>user feedback</h3>
      
     
<title>Marque Tags</title> </head> <body> <div style="border:1px solid #EEE; margin:5px 0px; padding:30px 0px;"> <h3><marquee><?php echo $msg; ?></marquee></h3></div></body>
  
 
  </div>
</div>
  </div>
      </section>
 <!--Start Header-->
   

      <div class="container" style="background-color:#ffcb0f;border-color:#080808;border-radius: 8px;">
        <div class="row">
          <div class="col-sm-12 text-center">
            <p><small>Copyright &copy; <i>nipunmadusanka</i>. All rights reserved.</small></p>
          </div>
        </div>
      </div>

    </body>
</html>