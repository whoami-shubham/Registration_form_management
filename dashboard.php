<!DOCTYPE html>
<html>
<head>
     <title>dashboard</title>
     <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
<div class="row">
<div class="col-6 ">
                    <div class = "Left" style="margin-right: 30%; margin-top: 30%">
                    <form action="get.php" method="post">
                         <h2>View Informations</h2>
                         <br>
                       <table >
                        
                             <tr>
                                  <td> Email</td>
                                 <td>
                                       <input type="email" name="email" required style="width:100%;" >
                                 </td>  
                              </tr>
                           <tr>
                              <td></td>
                              <td >
                                   <br>
                                   <input class="button" type="submit" name="check" value="check" style="width: 100px">
                                   <a href="all.php"><button class="button" style="width: 100px;border-radius: 5px" name="button" value="OK" type="button">view All</button></a>
                              </td>
                         </tr>
               </table>
                </form>
               
           </div>
      </div>
 </div>
     </div>
     <pre style="text-align:center;color:#db3236;font-size:16px;padding-top: 30%">to go back   click <a href="form2.html">here</a></pre> 
</body>
</html>


