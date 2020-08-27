<?php
require 'loginAdmin.php';
include 'dbh.class.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

 <meta name = "viewport" content = "width=device-width, initial-scale = 1.0">
    <title>Kenyatta University</title>
    <script type = "javascript" src="jquery.js"></script>
    <link type = "text/css" rel="stylesheet" href="model.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
     integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     
    </head>
<body >

<nav class = "navbar navbar-expand-lg navbar-dark  bg-primary">
    <img src="images/badge.jpg" alt="" class = "img-fluid" width="40px"height="auto">
    <a href= "#" class = "navbar-brand">Boro Secondary School</a>
    <button class = "navbar-toggler bg-"  data-toggle="collapse"data-target="#navbarMenu">
    <span class = "navbar-toggler-icon"></span>
    </button>
    <div class= "collapse navbar-collapse" id = "navbarMenu">
    <ul class= "navbar-nav ml-auto">
        <li class = "nav-item text-success">
           <a class = "nav-link" href= "index.php">Home</a>
        </li>
       <li class = "nav-item">
            <a class = "nav-link" href= "CurrentStudents.php">Prospective Students</a>
         </li>

        
       
    </ul>
</div>
</nav>
<div style = "padding-left: 0px; padding-right: 0px;" class = "container-fluid ">

    <p class = "display-4 text-dark bg-success p-1">Student Registration Panel</p>
            <?php

                $sql = 'SELECT * FROM applications';
                $stmt = $conn->query($sql);
                echo '
                      <div class = "container-fluid">
        <p class = "text-success  text-center" ><h4 align= "center" class = "text-success">Current Applications</h4></p>
        <div class = "row" >
            <div class = "col-12" style = "padding-left: 10px; padding-right: 65px; margin-left: 17px;">
                <table class = "table table-striped table-bordered table-hover table-responsive" >
                    <thead class = "thead-light">
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Class Applied</th>
                            <th>Email Address</th>
                            <th>Date</th>
                            <th>Postal Address</th>
                            <th>Parent Name</th>
                            <th>Parent Contacts</th>
                            <th>action</th>
                            
                        </tr>
                    </thead>
                     <tbody>
            ';
                while ($row = $stmt->fetch_assoc()) {

                    echo '
      
                   
                        <tr>
                         <form action = "approve.php" method = "POST">
                        <td>' . $row["ApplicationId"] . '</td>
                        <td>' . $row["First_Name"] . '</td>
                        <td>' . $row["last_Name"] . '</td>
                        <td>' . $row["classEnrolled"] . '</td>
                        <td>' . $row["email"] . '</td>
                        <td>' . $row["Date_Applied"] . '</td>
                        <td> P.O BOX ' . $row["BoxNumber"] . '  ' . $row["Code"] . '  ' . $row["city"] . '</td>
                        <td>' . $row["Parent_Name"] . '</td>
                         <td>' . $row["Parent_Mob"] . '</td>
                        <td>
                        
                          <input type = "hidden" name = "showing" value = "' . $row["email"] . '" >
                        <button type = "submit" style="display: block;"class = "btn  btn-success btn text-light" name= "appr" onclick="appDis()">Approve</button><br>
                           <button   type = "submit" style="display: block;"class = "btn btn-danger btn-sm" id = "disapproval" name = "disappr" >Disapprove</button>
                          
                          </td>
                           </form>
                    </tr> 
                    
            

             
            ';


                }
                echo "
       </tbody>
                        
                </table>
            </div>
        </div>
    </div>
";

            ?>

     </div>







<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
