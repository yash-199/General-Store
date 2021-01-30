<?php
require 'connect.php';
session_start();
if(isset($_POST['submit'])){
$username=$_POST['username'];
$password=$_POST['password'];
$sql="SELECT *FROM registratio WHERE username='$username'";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
if($count>0){
$row=mysqli_fetch_array($result);
    $passw=$row['password'];
     $pass=base64_decode($passw);
    if($password==$pass){
                                                        
      $_SESSION['username']=$row['username'];                         // storeing user name in the session for the future use
                                                                     // Once the user is logged in store its email id in the session variable for the future use
      $_SESSION['id'] =$row['id'];  
      $_SESSION['number'] =$row['number'];
      echo '<script>alert("Login Success")</script>';                                                               // store users id in the session for future use
      header('Location: welcome.php');
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
  echo '<script>alert("Invalid Username")</script>';
 ?>
  <script>
      location.replace("index.php")
      </script>
      <?php
  }
}
?>
