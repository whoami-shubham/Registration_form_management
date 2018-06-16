<?php
session_start();

if( !isset($_POST['insert'])){
  header('location:index.php');

}



$name    =  htmlspecialchars($_POST['name']);
$collage =  htmlspecialchars($_POST['collage']);
$branch  =  htmlspecialchars($_POST['branch']);
$year    =  htmlspecialchars($_POST['year']);
$address =  htmlspecialchars($_POST['address']);
$phno    =  htmlspecialchars($_POST['phno']);
$email   =  htmlspecialchars($_POST['email']);
$fname   =  htmlspecialchars($_POST['fname']);
$fno     =  htmlspecialchars($_POST['fno']);
$toi     =  htmlspecialchars($_POST['toi']);
$duration=  htmlspecialchars($_POST['duration']);
$doc     =  htmlspecialchars($_POST['doc']);
$skills  =  htmlspecialchars($_POST['skills']);
$ion     =  htmlspecialchars($_POST['ion']);
$batch   =  htmlspecialchars($_POST['batch']);


$con = mysqli_connect("localhost","root","","regform");

$query = "SELECT count(*) FROM form WHERE batch='$batch'";
$result = mysqli_query($con,$query);
$count = mysqli_fetch_array($result);


#echo $count[0];
#echo '<br>';
 $total = $count[0] + 1;
 $id = $batch.$total.date('M').date("y");
 echo $id; 

$query = "INSERT INTO form(name,collage,branch,year,address,phno,email,fname,fno,toi,duration,doc,skills,ion,id,batch)   VALUES('$name','$collage','$branch','$year','$address','$phno','$email','$fname','$fno','$toi','$duration','$doc','$skills','$ion','$id','$batch')";



$result = mysqli_query($con,$query);


 
?>

<html  style="background-image: url('b1.jpg'); background-size: 100%" >

<?php

if($result){
  echo '<h3 style="color:green;text-align:center;font-size:16px">Sucessfully registered </h3>';
  echo ' <a href="index.php" style="text-decoration:none;text-align:center;color:white;font-size:20px;font-weight:400;float:right;padding:15px">Back</a>';
	
}

else{
	echo '<h3 style="color:red;text-align:center;font-size:16px">Some Error Occured :( <br>   or You have entered that email already taken . </h3>';
	echo ' <a href="index.php" style="text-decoration:none;text-align:center;color:white;font-size:20px;font-weight:400;float:right;padding:15px">Back</a>';
       
}

?>
</html>

