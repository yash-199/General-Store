<?php
require 'connect.php';
session_start();
if(isset($_GET['submit'])){
    $itemnumber=$_GET['itemnumber'];
    $title=$_GET['title'];
    $description=$_GET['description'];
    $price=$_GET['price'];
    if($itemnumber=="" || $title=="" || $description==""  || $price==" "){
        echo'<script>alert("Please fill Your form!")</script>'; 
        ?>
      <script>
      location.replace("item.php")
      </script>
      <?php
    }else{
    $ins="INSERT INTO item(itemnumber,title,description,price)VALUES('$itemnumber','$title','$description','$price')";
	$iquery=mysqli_query($con,$ins);
	if($iquery){
        echo'<script>alert("Item inserted Successfully")</script>';
        echo 'Your Product details is ' . $title .' ' . $price;

}else {
    echo'<script>alert("Error")</script>';
}
}
}
exit;
?>
 <script>
      location.replace("item.php")
      </script>