<?php

session_start();
require 'connect.php';
if(isset($_POST['submit'])){
$username= $_POST['username'];
$number= $_POST['number'];
$password=$_POST['password'];
$password=base64_encode($password);
$sql="SELECT *from registratio WHERE username='$username'";
$result=mysqli_query($con,$sql);
$usernamecount=mysqli_num_rows($result);
if($usernamecount>0){
	echo'<script>alert("username already exist")</script>';
	?>
	<script>
	location.replace("index.php")
	</script>
	<?php
}
else{
	$ins="INSERT INTO registratio(username,number,password)VALUES('$username','$number','$password')";
	$iquery=mysqli_query($con,$ins);
	if($iquery){
		echo'<script>alert("Sign_Up Successfully")</script>';
		
		$fetch="SELECT *from registratio WHERE username='$username'";
		$result_user=mysqli_query($con,$fetch);
		$data=mysqli_fetch_array($result_user);
		$_SESSION['username']=$data['username'];                         // storeing user name in the session for the future use
		$_SESSION['number']= $data['number'];
?>
<script>
location.replace("index.php")

</script>
<?php
	}else{
		echo'<script>alert("Not loggedd in")</script>';
	}
}
}
?>