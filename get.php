<?php

$email = $_POST['email'];

$con = mysqli_connect('localhost','root','','regform');

$query = "SELECT * FROM form WHERE email='$email'";

$result = mysqli_query($con,$query);

$num = mysqli_num_rows($result);
?>
<html style="background-image: url('b1.jpg'); background-size: 100%">
<?php
if($num == 1){
	$array=mysqli_fetch_array($result);
	?>
	<h2 align="center" style="color:#4885ed">Here you go</h2>
	<table  align="center"  style="background-color: #272727;border-radius: 5px;opacity: 0.8;color: white; font-size: 18px">
	<tr>
	   <td style="padding: 5px">Name</td>
	   <td style="padding: 5px"><?php echo $array[0]; ?></td>
    </tr>
    <tr>
	   <td style="padding: 5px">Collage</td>
	   <td style="padding: 5px"><?php echo $array[1]; ?></td>
	</tr>
	<tr>
		<td style="padding: 5px">Branch</td>
		<td style="padding: 5px"><?php echo $array[2]; ?></td>
	</tr>
	<tr>
		<td style="padding: 5px">Year</td>
		<td style="padding: 5px"><?php echo $array[3]; ?></td>
	</tr>
	<tr>
		<td style="padding: 5px">Address</td>
		<td style="padding: 5px"><?php echo $array[4]; ?></td>
	</tr>
	<tr>
		<td style="padding: 5px" >Phone Number</td>
		<td style="padding: 5px"><?php echo $array[5]; ?></td>
	</tr>
	<tr>
		<td style="padding: 5px">Email Address</td>
		<td style="padding: 5px"><?php echo $array[6]; ?></td>
	</tr>
	<tr>
		<td style="padding: 5px">Father's Name</td>
		<td style="padding: 5px"><?php echo $array[7]; ?></td>
	</tr>
	<tr>
		<td style="padding: 5px">Father's Contact Number</td>
		<td style="padding: 5px"><?php echo $array[8]; ?></td>
	</tr>
	<tr>
		<td style="padding: 5px">Type Of Internship</td>
		<td style="padding: 5px"><?php echo $array[9]; ?></td>
	</tr>
	<tr>
		<td style="padding: 5px">Duration</td>
		<td style="padding: 5px"><?php echo $array[10]; ?></td>
	</tr>
	<tr>
		<td style="padding: 5px">Date of Commence</td>
		<td style="padding: 5px"><?php echo $array[11]; ?></td>
	</tr>
	<tr>
		<td style="padding: 5px">Technical Skills</td>
		<td style="padding: 5px"><?php echo $array[12]; ?></td>
	</tr>
	<tr>
		<td style="padding: 5px">Internship On</td>
		<td style="padding: 5px"><?php echo $array[13]; ?></td>
	</tr>

		
	</table>
	<?php 
	echo '<pre style="text-align:center;color:#f4c20d;font-size:16px">to go back to the Registration page  click <a href="form2.html">here</a></pre>';
	?>
<?php
}
else{
	echo '<p style="text-align:center;color:red; font-size:20px"> invalid  email </p><br>';
	echo '<pre style="text-align:center;color:#4885ed;font-size:16px">Try <a href="form2.html">Again</a></pre>';
}
?>
</html>



