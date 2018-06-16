<?php
session_start();

if( !isset($_POST['login'])){
  header('location:index.php');

}
if($_POST['username']=='' or $_POST['password']==''){
	header('location:index.php');
}

$con = mysqli_connect("localhost","root","","regform");

 $username = htmlspecialchars($_POST['username']);

 $password = htmlspecialchars($_REQUEST['password']); 

 $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
  echo $query;
$result = mysqli_query($con,$query);
$num = mysqli_num_rows($result);
echo $num;
if($num==1){
	$_SESSION['sucess']= true;
	if(isset($_POST['remember']))
	{
		setcookie('username',$username,time()+60*5);
	    setcookie('password',$password,time()+60*5);

	}

	
	header('location:dashboard.php');
}
else{
if($_POST['login']==true){
$_SESSION['pass']=false;
}
 header('location:index.php');
} 


?>
