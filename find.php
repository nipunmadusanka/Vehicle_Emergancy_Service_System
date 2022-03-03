<?php 
// DB credentials.
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','dbms');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">

    <title>Vehicle Emergancy Service System</title>
  <link rel="stylesheet" href="css/find.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
 <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background: rgba(40,30,10,0.9);">
  <div class="container-top">
   <div class="navbar-f">
          <div class="navbar-brand-f"><img id="img1" src="img/breakdowntruck.png" alt="Logo"></div>
        
        <div class="navbar-collapse-f">
          <ul class="navbar-nav-f list-inline-f ">
            <ul class="list-inline-f info-f ">
                         <li><a href="tel:1231231234"><span class="fa fa-phone"></span> 123-123-1234</a></li>
                        <li><span class="fa fa-envelope"></span> support@vess.com</li>
                        <li><span class="fa fa-clock-o"></span> 24X7 Open</li>
                        
           <ul class="list-inline-f float-right-f">
              <li><a href="index.php"><span class="fa fa-home"> </span> Home |</a></li>
               
            <li><a href="form.php"><span class="fa fa-user"></span> Register |</a></li>
            <li><a href="contact.php"><span class="fa fa-headphones"></span> Contact |</a></li>
            <li><a href="about.php"><span class="fa fa-info"></span> About </a></li>
          </ul>
          </ul>
        </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <!-- Page Content -->
 
 <!-- Page Heading/Breadcrumbs -->
 <div class="container-f">
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3" style="color: #fdefdb;font-family: 'Dr Sugiyama', cursive;">Search <small>Services</small></h1>

       
        <form name="donar" method="post" >
<div class="row">



<div class="col-lg-4 mb-4">
<div class="font-italic" style="color: #fdefdb;">city<span style="color:red">*</span> </div>
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
<div class="font-italic" style="color: #fdefdb;">service<span style="color:red">*</span> </div>
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
$sql = "SELECT * from table1 where (city=:city) and  (service=:service)";
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
                    
                  
      <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($result->image).'" height="300" width="348"/>';?>
           
   
                    <div class="card-block">

        
                        <h4 class="card-title"><a href="#"><?php echo htmlentities($result->name);?></a></h4>
                        <p class="card-text"><b>Service :</b> <?php echo htmlentities($result->service);?></p>
                        <p class="card-text"><b>City :</b> <?php echo htmlentities($result->city);?></p>
<p class="card-text"><b>Address :</b>                  
<?php if($result->address=="")
{
echo htmlentities('NA');
} else {
echo htmlentities($result->address);
}
?></p>
                        <p class="card-text"><b>Mobile Number :</b> <?php echo htmlentities($result->telephone);?>
                        <p class="card-text"><b>Email :</b> <?php if($result->email=="")
                        {
                        echo htmlentities(NA);
                        } else {
echo htmlentities($result->email);
}
?></p> 
                        
                             </p>
<p class="card-text"><b>Website :</b> <a href="<?php($result->url)?>"><?php echo htmlentities($result->url);?></a></p>

     <p class="card-text"><b>Location :</b><a href="{$result['location']}"> <?php echo htmlentities($result->location);?></a></p>

                    </div>
                </div>
            </div>

            <?php }}
else
{

echo '<script>alert("No Record Found");</script>';


}


            } ?>          
 



        </div>
        </div>
    </div>


<div class="container-f"  style="transition: all 0.7s;">
      <div class="container-f" style="background-color:#ffcb0f;border-color:#080808;border-radius: 8px;">
        <div class="row-f">
          <div class="col-sm-12-f text-center-f">
            <p><small>Copyright &copy; <i>nipunmadusanka</i>. All rights reserved.</small></p>
          </div>
        </div>
      </div>
      </div>
    
</body>

</html>
