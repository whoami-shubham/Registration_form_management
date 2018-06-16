<?php
session_start();

if (!($_SESSION['sucess']==true)){
   header('location:index.php');
}

?>
<!DOCTYPE html>
<html>
<head>
     <title>dashboard</title>
     <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <?php 
          if (isset($_SESSION['e1']) and $_SESSION['e1']==1){ ?>
        <p style="color: red;text-align: center;">You must have to enter one field </p>
                  <?php  }
              ?>
    <div>
       <div class="container">
            <div class="row">
                   <a href="logout.php"> <button class="button" style="width: 100px;float:right;border-radius: 5px; margin: 2%" name="logout" type="button">Logout
                                      </button>
                   </a>
            </div>
            <div class="row">
              <div class="col-3 cent" >
                   <table class="t">
                    <form action="get.php" method="post">
                     <tr>
                       <td style="color: white"> Email</td>
                       <td><input class="e" type="email" name="email" style="width:240px"></td>
                     </tr>
                     <tr>
                       <td></td>
                       <td style="color: white" >Or</td>
                     </tr>
                     <tr>
                       <td style="color: white">&nbsp;&nbsp;ID&nbsp;&nbsp;</td>
                       <td><input class="d" type="text" name="id" style="width: 240px"></td>
                     </tr>
                     <tr >

                      <td >
                     <br> &nbsp;&nbsp;&nbsp;<input type="submit" class="button" style="width: 100px;border-radius: 5px;" name="check" value="View" ></form>
                     </td>
                     <td >
                       <form action="all.php" method="post"><br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="button" style="width: 100px;border-radius: 5px;" name="all"  type="submit"value="View All"></form>
                       <pre></pre>
                     </td>
                     </tr>
                   </table> 
              </div>
            </div>
       </div>
    </div>

</body>
</html>

