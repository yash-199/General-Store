<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
   <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <title>Mfolks</title>
        <link rel="stylesheet" href="style.css">
    </head>
    </head>
    <body>
    <nav class="navbar navbar-expand-sm fixed-top border navbar-dark" style="background-color:red;height:70px;">
            <a class="navbar-brand logo" href="index.php" style="padding-left:30px; color:#020024"><img src="download.png" class="img-fluid" style="height:45px;margin-top:-12px;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" style="width:20px;margin-left:10%;">
                <span class="navbar-toggler-icon"style="width:20px;margin-left:-10px;"></span>
              </button>
              <div class="collapse navbar-collapse" id="collapsibleNavbar"style="width:20px;">
            <ul class="navbar-nav ml-auto list">
			<br>

                <div class="dropdown">
  <button class="dropbtn">User</button>
  <div class="dropdown-content">
    <a href="Loginuser.php"><i class="fa fa-sign-in"><b>&nbspLogin</i></a>
    <a href="index.php"><i class="fa fa-user"><b>&nbsp;Registration</i></a>
  </div>
</div>
                   <div class="dropdown">
  <button class="dropbtn">Shopkeeper</button>
  <div class="dropdown-content">
    <a href="Shopkeeperlogin.php"><i class="fa fa-sign-in" ><b>&nbspLogin</i></a>
    <a href="index.php"><i class="fa fa-user"><b>&nbsp;Registration</i></a>
  </div>
</div>
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
</ul>
              </div>
        </nav>
     <br>
<br>
<br>     

<div class="container">
<div class="content">
<h1 class="heading1">Registration</h1>
<form method="POST" action="registration.php" style="border:1px solid #000">
  <div class="container2">
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label for="email"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username">

    <label for="number"><b>Moblie No.</b></label>
    <input type="text" placeholder="Enter Moblie No" name="number">

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Password" name="password">
    
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="submit" name="submit" class="signupbtn">SignUp</button>
    </div>
  </div>
</form>
</div>
</div>

</body>
</html>






