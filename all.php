<?php
$con = mysqli_connect('localhost','root','','regform');

$query = "SELECT * FROM form ";

$result = mysqli_query($con,$query);

$array = mysqli_fetch_array($result);

?>

<html style="background-image: url('b1.jpg'); background-size: 100%">
<table  align="center"  style="background-color: #272727;border-radius: 5px;opacity: 0.8;color: white; font-size: 18px">
<th> S.no </th>
<th> Name </th>
<th> email</th>

<?php
$i = 1;
do{
 echo '<tr>';
 echo '<td style="padding: 5px">'.$i.'</td>';
 echo '<td style="padding: 5px">'.$array[0].'</td>';
 echo '<td style="padding: 5px">'.$array[6].'</td>';
 echo '</td>';
 $i=$i+1;
}while($array = mysqli_fetch_array($result));
echo '<pre style="text-align:center;color:#f4c20d;font-size:16px">to go back to the Registration page  click <a href="form2.html">here</a></pre>';
	?>
?>
</table>
</html>
