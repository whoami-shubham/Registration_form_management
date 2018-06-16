<?php
session_start();     # session start

if( !isset($_POST['all'])  && !isset($_SESSION['sucess'])){  # if admin is logged in 
  header('location:index.php');                      # then 'sucess' will have
                                                     # some value given in index.php 
}                                                    # and also make sure user is
if(!isset($_POST['all']) ){                          # clicked 'View All' button
                                                     # in dashboard
	header('location:dashboard.php');
}

$con = mysqli_connect('localhost','root','','regform');  # connect to db
                                                       
$query = "SELECT * FROM form ";                          # Query

$result = mysqli_query($con,$query);                   

$array = mysqli_fetch_array($result);

?>

<html style="background-image: url('b1.jpg'); background-size: 100%">
<table  align="center"  style="background-color: #272727;border-radius: 5px;opacity: 0.8;color: white; font-size: 18px">
<th> ID </th>
<th> Name </th>
<th> email</th>

<?php

do{
 echo '<tr>';
 echo '<td style="padding: 5px">'.$array[14].'</td>';
 echo '<td style="padding: 5px">'.$array[0].'</td>';
 echo '<td style="padding: 5px">'.$array[6].'</td>';
 echo '</td>';
 
}while($array = mysqli_fetch_array($result));
echo ' <a href="dashboard.php" style="text-decoration:none;text-align:center;color:white;font-size:20px;font-weight:400;float:right;padding:15px">Back</a>';
	?>
?>
</table>
</html>
