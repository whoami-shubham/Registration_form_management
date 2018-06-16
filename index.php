<?php
if (isset($_POST['login']) ) {  # if login button is clicked then proceed

$con = mysqli_connect("localhost","root","","regform");   # connect to db

 $username = htmlspecialchars($_POST['username']); 

 $password = htmlspecialchars($_POST['password']); 

 $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
 #echo $query;
$result = mysqli_query($con,$query);
$num = mysqli_num_rows($result);
#echo $num;
if($num==1){                  # if username and password match from db start session
session_start();          # and assign 'sucess' to some value. we have done this
$_SESSION['sucess']= true;  #  because if any other page should be opened after this
if(isset($_POST['remember'])) # login page then we will have something that can  
{                             # help us to determine whether user is logged in
setcookie('username',$username,time()+60*5); # or not if user is not logged
setcookie('password',$password,time()+60*5); # in then don't show  them
                                   
                                   # other pages that needs some authorization
}                                  # to access.
	
	header('location:dashboard.php'); # redirect to dashboard.php
}
else{
	$error = 1;               # set error some value to show error in login fields
}

}
?>

<?php
if (isset($_COOKIE['username']) && isset($_COOKIE['password']) ) { 
	$u = $_COOKIE['username'];
	$p = $_COOKIE['password'];
	#echo $u;

}
else{
	if(isset($_POST['username'])){   #   if user filled  fields and submit form  
		$u=$_POST['username'];    #   and some fields filled wrong then 
	}                             #   he wouldn't want to fill 
	if(isset($_POST['password'])){   #   all fields
		$p=$_POST['password'];    #
	}                             #
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	        <link rel="shortcut icon" href="logo.png" />
	        <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body >
  <div class="container">
        <div class="row">
                     <div class="col-12"> <div style="background-image: url('banner.png');clear: both;"><img src="logo.png" width="12%"></div>
                     </div>
         </div>
         <div class="row">
         	<div class="col-6 ">
         	  <div class="Left">
         		<br>
         	  	   <h2>Registration Form</h2>
         	  	 <br>
         		<form action="form.php" method="post">
         			 <table style="font-size: 18px;">
         			 	<br>
	         			<tr>
	         			    <td >Applicant's Name</td>
	         			    <td>
	         			    	<input type="text" name="name">
	         			    </td>	
	         			</tr>
	         			<tr>
	         			     <td>Collage Name</td>
	         			     <td>
	         			     	<input type="text" name="collage">
	         			     </td>	
	         			</tr>
	         			<tr>
	         			      <td>Branch</td>
	         			      <td>
	         			      	<input type="text" name="branch">
	         			      </td>	
	         			</tr>
	         			<tr>
	         			       <td>Year</td>
	         			       <td>
	         			       	<input type="number" name="year">
	         			       </td>	
	         			</tr>
	         			<tr>
	         			        <td>Address</td>
	         			        <td>
	         			        	<input type="text" name="address">
	         			        </td>	
	         			</tr>
	         			<tr>
	         			         <td>Phone Number</td>
	         			         <td>
	         			         	<input type="number" name="phno" required >
	         			         </td>	
	         			</tr>
	         			<tr>
	         			    <td>Email Address</td>
	         			    <td>
	         			    	<input type="email" name="email" required >
	         			    </td>	
	         			</tr>
	         			<tr>
	         			    <td>Father's Name</td>
	         			    <td>
	         				   <input type="text" name="fname">
	         			    </td>	
	         			</tr>
	         			<tr>
	         			    <td>Father's Contact Number</td>
	         			    <td>
	         			    	<input type="number" name="fno">
	         			    </td>	
	         			</tr>
	         			<tr>
	         			   <td>Type of Internship</td>
	         			   <td><select name="toi" class="d">
	         				       <option value="paid">Paid</option>
                                   <option value="unpaid" selected="selected" >Unpaid</option>
                               </select>
                            </td>	
	         			</tr>
	         			<tr>
	         			     <td>Duration</td>
	         			     <td>
	         			     	<input type="text" name="duration">
	         			     </td>	
	         			</tr>
	         			<tr>
	         			      <td>Date of Commence</td>
	         			      <td>
	         			      	<input type="date" name="doc">
	         			      </td>	
	         			</tr>
	         			<tr>
	         			      <td>Batch</td>
	         			      <td><select name="batch" class="d">
	         				       <option value="Andr">Android</option>
                                   <option value="java"  >java</option>
                                   <option value="web"  >web development</option>
                                   <option value="js"  >javaScript</option>
                               </select>
                            </td>	
	         			</tr>
	         			<tr>
	         			      <td>Technical Skills</td>
	         			      <td>
	         			      	 <input type="text" name="skills">
	         			      </td>	
	         			</tr>
	         			<tr>
	         			      <td>Internship On</td>
	         			      <td>
	         			      	<input type="text" name="ion">
	         			      </td>	
	         			</tr>
	         			<tr>
	         				<td>
	                           <input type="checkbox" name="tc" required style="width: 15px;margin-left: 85%">
	                       </td>
	                       <td>
	         				   <p>I agree to the Terms and Conditions</p>
	         				</td>
	         			</tr>
	         			<tr>
	         				<td></td>
	         				<td >
	         					<input class="button" type="submit" name="insert" value="submit" >
	         				</td>
	         			</tr>
         		     </table>
         		</form>
         	   </div>
         	</div>
         	<div class="col-6 ">
               	<div class = "Left right">
               	<form action="index.php" method="post">
               		<h2>Log In</h2>
               		<br>
               	   <table style="font-size: 18px;">
               	    
               	         <tr>
               	       	    <td> Username</td>
								<td>
								    <input type="text" name="username" value="<?php if(isset($u)) echo $u; ?>" required style="width:100%;" >
								</td>  
								               	          </tr>
               	          <tr>
               	          	<td>Password</td>
               	          	<td>
               	   	      	    <input type="text" name="password" value="<?php if(isset($p)) echo $p; ?>" required style="width:100%;" >
               	   	        </td>
               	          </tr>
               	          <tr>
               	          	<td colspan="2">
	         					remember me &nbsp;&nbsp;&nbsp;<input type="checkbox" name="remember" style="width:15px">
	         				</td>
               	          </tr>
               	       
               	       <tr>
	         				<td></td>
	         				<td >
	         					<br>
	         					<input class="button" type="submit" name="login" value="Log in" style="width: 100px">
	         				</td>
	         			</tr>
	         			<tr>
	         				<td colspan="2">
	         					 <?php 
                    if (isset($error)){ 
                    ?>
        <p style="color: red;text-align: center;">Incorrect Username or Password</p>
                  <?php  
              }
              ?>
	         				</td>
	         			</tr>
               </table>
                </form>
                
           </div>
         	</div>
         	
         </div>
  </div>
</body>
</html>

