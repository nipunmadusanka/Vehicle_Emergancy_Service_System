<?php
$con=mysqli_connect("localhost","root","","dbms") or die("Database not connected");
  ?>
<!DOCTYPE html>
<html>
<head>
  
  <title>Vehicle Emergancy Service System</title>
  <!-- Styles -->


 <link rel="stylesheet" href="css/form.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
 
 
</head>
<body>
   <div class="navbar-f">
      <div class="container-f">
       
          <div class="navbar-brand-f"><img id="img1" src="img/breakdowntruck.png" alt="Logo"></div>
        
        <div class="navbar-collapse-f">
          <ul class="navbar-nav-f list-inline-f ">
            <ul class="list-inline-f info-f ">
                         <li><a href="tel:1231231234"><span class="fa fa-phone"></span> 123-123-1234</a></li>
                        <li><span class="fa fa-envelope"></span> support@vess.com</li>
                        <li><span class="fa fa-clock-o"></span> 24X7 Open</li>
                        
           <ul class="list-inline-f float-right-f">
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
    <!--/.body------------------>


    <section class="header" style="background-image: url('img/banner-home-fluid.jpg');">
      <div class="container-left">

<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15830.172806549397!2d81.8656321!3d7.2926974!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd1fa90a4f7382b0d!2sFaculty%20of%20Technology%20SEUSL!5e0!3m2!1sen!2slk!4v1573037226830!5m2!1sen!2slk" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</div> 
<div class="container"> 

  <form id="contact" action="form.php" method="POST" enctype="multipart/form-data">
   <center><h3>Registration Form</h3> 
    <h4>fill in th all rows</h4></center>
    
   <fieldset>
      <input placeholder="Your name" type="text" name="name" tabindex="1" required autofocus>
     
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number (optional)" type="tel" name="telephone" tabindex="2" >
    </fieldset>
    <fieldset>
      <input placeholder="Your address" type="text" name="address" tabindex="1" required autofocus>
      </textarea>
    </fieldset>
        <fieldset>
      <input placeholder="Your Email Address" type="email" name="email" tabindex="4" required>
    </fieldset>
        <fieldset>
      <input placeholder="Your Location Link (use for google map)(optional)" type="text" name="location" tabindex="5" >
    </fieldset>
    <fieldset>
      <select name="city">
        <option value="0">Select City</option>
        <option value="Ampara">Ampara</option>
        <option value="Oluvil">Oluvil</option>
        <option value="Akkaraipattu">Akkaraipattu</option>
        <option value="Kalmunei">Kalmunei</option>
        <option value="Batticaloa">Batticaloa</option>
        <option value="Mahiyanganaya">Mahiyanganaya</option>
        <option value="Polonnaruwa">Polonnaruwa</option>
        <option value="Monaragala">Monaragala</option>
        
      </select>
    </fieldset>
        <fieldset>
      <select name="service">
        <option value="1">Select Your Service</option>
        <option value="Garage">Garage</option>
        <option value="Tire_shop">Tire shop</option>
        <option value="Breackdown_service">Breackdown service</option>
        <option value="Emergency(fire..etc)">Emergency(fire..etc)</option>
        <option value="Ambulance">Ambulance</option>
      </select>
    </fieldset>
      <fieldset>
      <input placeholder="Your Webesite (example:https://www.example.com)(optional)"  type="url" name="url" tabindex="6" >
    </fieldset>
<fieldset>
      <label>Select Image File:</label>
    <input type="file" name="image">
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
 
    <p class="copyright">Designed by <i>nipunmadusanka</i></p>
  </form>
</div>
</section>

    <div class="container-f" style="background-color:#ffcb0f;border-color:#080808;border-radius: 8px;">
        <div class="row-f">
          <div class="col-sm-12-f text-center-f">
            <p><small>Copyright &copy; <i>nipunmadusanka</i>. All rights reserved.</small></p>
          </div>
        </div>
      </div>
    
</body>
</html>
<?php
if(isset($_POST['submit'])){
  
  $name=$_POST['name'];
  $telephone=$_POST['telephone'];
  $address=$_POST['address'];
  $email=$_POST['email'];
  $location=$_POST['location'];
  $city=$_POST['city'];
  $service1=$_POST['service'];
  $url=$_POST['url'];
  if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 

  $sql="INSERT INTO table1(name,telephone,address,email,location,city,service,url,image)VALUES('$name','$telephone','$address','$email','$location','$city','$service1','$url','$imgContent')";
  $query=mysqli_query($con,$sql);
  if ($query) {
    // $print="Successful Registration";
    echo '<script>alert("Successful Your Registration:::::Thankyou");</script>';
  }
  else{
    echo '<script>alert("Something Wrong:::::Try Again");</script>';
  }
}
}
}
?>
