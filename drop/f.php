
<?php
$con=mysqli_connect("localhost","root","","nmm1") or die("not connect");
echo "connect";
?>
<!DOCTYPE html>
<html>
<head>
	<title>jh</title>
</head>
<body>
<form action="f.php" method="POST">
      <input placeholder="Your name" type="text" name="name1"><br>

      <input type="tel" name="telephone"><br>
            <input type="text" name="email" value="mail">
            <input type="text" name="location">
            <!-- < name=""> -->
            <select name="select1">
              <option>test1</option>
              <option>test2</option>
            </select>
           <!--  <select name="drop1">
              <option value="1">nnnnn</option>
              <option value="2">jhhjhj</option>
            </select> -->
  
      <input type="submit" name="save" value="save"><br>

</form>

</body>
</html>

<?php
      if (isset($_POST['save'])) {
        $name=$_POST['name1'];
        $telephone=$_POST['telephone'];
        $email=$_POST['email'];
          $location=$_POST['location'];
          // $select1=$_POST['select1']
          // $drop=$_POST('drop1')

        $sql=("INSERT INTO tt22 (name,telephone,email,location,) VALUES ('$name','$telephone','$email','$location','')");
        $Query=mysqli_query($con,$sql);
        if ($Query) {
          echo "set";
          # code...
        }else{
          echo "not";
        }
        # code...
      }
      ?>


      
