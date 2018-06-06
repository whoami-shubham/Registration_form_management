<?php
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
$con = mysqli_connect("localhost","root","","regform");

$query = "INSERT  INTO form (name,collage,branch,year,address,phno,email,fname,fno,toi,duration,doc,skills,ion) VALUES ('$name','$collage','$branch','$year','$address','$phno','$email','$fname','$fno','$toi','$duration','$doc','$skills','$ion')";
#echo "$query";
$result = mysqli_query($con,$query);
?>
<html style="background-image: url('b1.jpg'); background-size: 100%">
<?php
if($result){
  echo '<h3 style="color:green;text-align:center;font-size:16px">Sucessfully registered </h3>';
  echo '<pre style="text-align:center;color:#4885ed;font-size:16px">to go back to the Registration page  click <a href="form2.html">here</a></pre>';
}

else{
	echo '<h3 style="color:red;text-align:center;font-size:16px">Some Error Occured :( </h3>';
	echo '<pre style="text-align:center;color:#4885ed;font-size:16px">to go back to the Registration page  click <a href="form2.html">here</a></pre>';
       
}

?>
</html>