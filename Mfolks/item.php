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
    <h4>Fill your item's details..</h4>
    <form method="GET" action="items.php"> 
    <input type="text" placeholder="Enter item no" name="itemnumber">
    <br>
    <br>
    <input type="text" placeholder="Enter Title" name="title">
    <br>
    <br>
    <textarea rows="4" cols="22" type="text" placeholder="Describe your item..." name="description"></textarea> 
    <br>
    <br>
    <input type="text" placeholder="Enter Price" name="price">
    <br>
    <br>
    <input type="submit" class="button" value="sumbit" name="submit">
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <button><a href="logout.php">Log Out</a></button>
    <br>
    
    </form>
    </div>
    </div>