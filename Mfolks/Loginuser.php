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
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
    <div class ="container">
    <img src="unnamed.jpg" width=100%>
    <div class="text-block">
    <img src="download.png"  class="image" width=50%>
    <h4>Hello! let's get started</h4>
    <p>Sign in to continue.</p>
    <form method="POST" action="login.php"> 
    <input type="text" placeholder="Enter username" name="username">
    <br>
    <br>
    <input type="password" placeholder="Enter Password" name="password">
    <br>
    <br>
    <input type="submit" value="sumbit" name="submit">
    <br>
    <br>
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px">
      Keep me signed in
    </label>
    <label>
    <a href="#">Forget Password</label>
    <h4>Don't have an account?<a href="#">Create</a></h4>
    </form>
    </div>
    </div>