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
                        <li><span class="fa fa-phone"></span> 123-123-1234</li>
                        <li><span class="fa fa-envelope"></span> support@vess.com</li>
                        <li><span class="fa fa-clock-o"></span> 24X7 Open</li>
                        
           <ul class="list-inline float-right">
              <li><a href="index.html"><span class="fa fa-home"> Home |</span></a></li>
            <li><a href="form.html"><span class="fa fa-user"></span> Register |</a></li>
            <li><a href="contact.html"><span class="fa fa-headphones"> Contact |</a></li>
            <li><a href="about.html"><span class="fa fa-info"> About </a></li>
          </ul>
          </ul>
        </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
 <!-- Navbar end -->

 <!--Start Header-->
 <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Search <small>Services</small></h1>

       
        <form name="donar" method="post">
<div class="row">



<div class="col-lg-4 mb-4">
<div class="font-italic">city<span style="color:red">*</span> </div>
<div><select name="city" class="form-control" required>
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
</div>
</div>

<div class="col-lg-4 mb-4">
<div class="font-italic">city<span style="color:red">*</span> </div>
<div><select name="service" class="form-control">
        <option value="1">Select Your Service</option>
        <option value="Garage">Garage</option>
        <option value="Tire_shop">Tire shop</option>
        <option value="Breackdown_service">Breackdown service</option>
        <option value="Emergency">Emergency(fire..etc)</option>
        <option value="Ambulance">Ambulance</option>
      </select>
</div>
</div>


</div>

<div class="row">
<div class="col-lg-4 mb-4">
<div><input type="submit" name="submit" class="btn btn-primary" value="FIND" style="cursor:pointer"></div>
</div>
</div>
       <!-- /.row -->
</form>   

        <div class="row">
                   <?php 
if(isset($_POST['submit']))
{

$city=$_POST['city'];
$service=$_POST['service'];
$sql = "SELECT * from table1 where (city=:city) ||  (service=:service)";
$query = $dbh -> prepare($sql);

$query->bindParam(':city',$city,PDO::PARAM_STR);
$query->bindParam(':service',$service,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>

            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top img-fluid" src="images/blood-donor.jpg" alt="" ></a>
                    <div class="card-block">
                        <h4 class="card-title"><a href="#"><?php echo htmlentities($result->name);?></a></h4>
                        <p class="card-text"><b>Mobile No. / Email Id :</b> <?php echo htmlentities($result->telephone);?> 
                        <?php if($result->email=="")
                        {
                        echo htmlentities(NA);
                        } else {
echo htmlentities($result->email);
}
?>
                             </p>
<p class="card-text"><b>  service :</b> <?php echo htmlentities($result->service);?></p>
<p class="card-text"><b> url:</b> <a href="#"><?php echo htmlentities($result->url);?></a></p>
<p class="card-text"><b>city :</b> <?php echo htmlentities($result->city);?></p>
<p class="card-text"><b>Address :</b>                  
<?php if($result->address=="")
{
echo htmlentities('NA');
} else {
echo htmlentities($result->address);
}
?></p>
     <p class="card-text"><b>url :</b><a href="#"> <?php echo htmlentities($result->url);?></a></p>

                    </div>
                </div>
            </div>

            <?php }}
else
{
echo htmlentities("No Record Found");

}


            } ?>
          
 



        </div>



</div>
   

      <div class="container" style="background-color:#ffcb0f;border-color:#080808;border-radius: 8px;">
        <div class="row">
          <div class="col-sm-12 text-center">
            <p><small>Copyright &copy; <i>nipunmadusanka</i>. All rights reserved.</small></p>
          </div>
        </div>
      </div>

    </body>
</html>