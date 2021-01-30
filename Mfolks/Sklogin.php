<?php
require 'connect.php';
session_start();
if(isset($_POST['submit'])){
$number=$_POST['number'];
$password=$_POST['password'];
$sql="SELECT *FROM registratio WHERE number='$number'";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
if($count>0){
$row=mysqli_fetch_array($result);
    $passw=$row['password'];
     $pass=base64_decode($passw);
    if($password==$pass){
                                                        
// storeing number in the session for the future use
        $_SESSION['number'] =$row['number']; // Once the user is logged in store its email id in the session variable for the future use
        $_SESSION['id'] =$row['id'];         // store users id in the session for future use

            header('Location:item.php');
}

    else{
      echo '<script>alert("Invalid password")</script>';
      ?>
      <script>
          location.replace("index.php")
          </script>
          <?php
    }
  }
  else{
  echo '<script>alert("Invalid Number")</script>';
 ?>
  <script>
      location.replace("index.php")
      </script>
      <?php
  }
}
?>
