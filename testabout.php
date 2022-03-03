<?php
$con=mysqli_connect("localhost","root","","dbms") or die("Database not connected");
  ?>
  <!DOCTYPE html>
  <html>
  <head>
  	<title></title>
  </head>
  <body>
  	<form action="testabout.php" name="donar" method="post" >
  		<div><input type="submit" name="submit" class="btn btn-primary" value="FIND" style="cursor:pointer"></div>
</div>
</div>
       <!-- /.row -->
</form> 
  	 <?php
  	 
  	 

    $msg = '';

    $query="SELECT * FROM feedback WHERE feedback LIKE '%best%' or '%BEST'";
    $user= mysqli_query($con,$query);
    if ($user) {
      while ($users=mysqli_fetch_assoc($user)) {
    $msg .= "   ";  	
    $msg .= "|___{$users['feedback']}___|";
       $msg .= "   ";
        
      }

      }
      else{
        echo "faild";
     }

  
    ?>
   <table>
      <tr>
        <th>user feedback</th>
      </tr>
      
                  
    </table>
    <?php echo $msg; ?>  
  </body>
  </html>
  