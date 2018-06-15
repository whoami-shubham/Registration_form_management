<?php

$con = mysqli_connect("localhost","root","","regform");

 $username = htmlspecialchars($_POST['username']);

 $password = htmlspecialchars($_REQUEST['password']); 

 $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
  echo $query;
$result = mysqli_query($con,$query);
$num = mysqli_num_rows($result);
echo $num;
if($num==1){
	echo "sucessfully logged in";
	header('location:dashboard.php');
}
else{
 header('location:form2.html');
} 


?>
