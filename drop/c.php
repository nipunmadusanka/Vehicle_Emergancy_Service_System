<?php
$con=mysqli_connect("localhost","root","","nmm") or die("not connect");
echo "connect";
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>

</head>
<body>
	  <?php
      $super_list='';
      $query="SELECT * FROM tt2 ORDER BY name LIMIT 5,8";
      $users=mysqli_query($con,$query);
      if ($users) {
        while ($user = mysqli_fetch_assoc($users)) {
        	
        		$super_list.="<tr>";
          $super_list.="<td>{$user['name']}</td>";
          $super_list.="<td>{$user['telephone']}</td>";
          $super_list.="<td>{$user['email']}</td>";
          $super_list.="<td>{$user['location']}</td>";
          $super_list.="</tr>";
        	
          
        }
        # code...
      }
      else{
        echo "notttt ";
      }
      ?>

      <!--  -->
<table>
<!--   <h1>user</h1> -->
<tr>
  <th>name</th>
  <th>telephone</th>
  <th>mail</th>
  <th>location</th>
</tr>
<?php 
echo $super_list; 
?>

</table>
<!--  -->
    <!--/.body------------------>
    <section class="header" style="background-image: url('img/banner-home-fluid.jpg');">
<div class="container">  
  <div id="contact">
   <center><h3>Registration Form</h3> 
    <h4>fill in th all rows</h4></center>
  
    <p class="copyright">Designed by <i>nipunmadusanka</i></p>
  </div>
</div>
</section>
</body>
</html>
<?php
if(isset($_POST['submit']))
  {
$fullname=$_POST['name'];
$mobile=$_POST['telephone'];
$address=$_POST['address'];
$email=$_POST['email'];
$location=$_POST['location'];
$city=$_POST['city'];
$service=$_POST['service'];
$url=$_POST['url'];
$status=1;
$sql="INSERT INTO  tblblooddonars(FullName,MobileNumber,Address,Email,Location,Service,Url,status) VALUES(:fullname,:mobile,:address,:email,:location,:city,:service,:url,:status)";
$query = $dbh->prepare($sql);
$query->bindParam(':fullname',$fullname,PDO::PARAM_STR);
$query->bindParam(':mobile',$mobile,PDO::PARAM_STR);
$query->bindParam(':address',$address,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':location',$location,PDO::PARAM_STR);
$query->bindParam(':city',$city,PDO::PARAM_STR);
$query->bindParam(':service',$service,PDO::PARAM_STR);
$query->bindParam(':url',$url,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Your info submitted successfully";
}
else 
{
$error="Something went wrong. Please try again";
}

}
?>
