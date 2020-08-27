<?php

include "application.inc.php";

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
<body>
<div class = "container-fluid">

<nav class = "navbar navbar-expand-lg navbar-dark  bg-primary">
    <img src="images/badge.jpg" alt="" class = "img-fluid" width="40px"height="auto">
    <a href= "#" class = "navbar-brand">Boro Secondary School</a>
    <button class = "navbar-toggler"  data-toggle="collapse"data-target="#navbarMenu">
    <span class = "navbar-toggler-icon "></span>
    </button>
    <div class= "collapse navbar-collapse " id = "navbarMenu">
    <ul class= "navbar-nav ml-auto">
        <li class = "nav-item">
           <a class = "nav-link" href= "index.php">Home</a>
        </li>
       
         <li class = "nav-item">
            <a class = "nav-link" href= "application.php">Applications</a>
         </li>
         
         <li class = "nav-item">
            <a class = "nav-link" href= "contactUs.php">Contact Us</a>
         </li>
        <?php
        if(isset($_SESSION['admin'])) {
            echo '
      
         <li class = "nav-item">
            <a class = "nav-link" href= "Current
            Students.php" data-toggle = "modal" data-target="Admin">Prospective Students</a>
         </li>
         ';
        }
         ?>
        
       
           </ul>
       </div>
    </nav>
   </div>
   
  
</div>
<div class = "container">
    <h3 class = "text-warning">Fill in the form as Required</h3>
    <form action = "application.inc.php" method = "POST">
<div class = "row">
   <div class = "col">
    <div class = "form-group">
        <label > First Name </label>
        <?php

        echo'
        <input class = "form-control" type = "text" name = "usrFName" id = "appfname" value = " '.$Fname.' " disabled>
        ';
?>
   </div>
   <div class = "form-group">
       <label > Middle Name</label>
       <input class = "form-control" type = "text" name = "usrMname" required>
       
  </div>
  <div class = "form-group">
    <label > Last Name </label>
      <?php

      echo'
        <input class = "form-control" type = "text" name = "usrLname"  value = " '.$Sname.'" required disabled>
        ';
      ?>

    
</div>
<div class = "form-group">
    
    <label >Gender </label>
    <select class = "form-control" name = "Gender" required >
        <option>Female</option>
        <option>Male</option>
        <option>Other</option>

    </select>
    
</div>
<div class = "form-group">
    <label >Class Applying For </label>
    <select class = "form-control" name = "course" required>
        <option value = "Form One">Form One</option>
        <option value ="Form Two">Form Two</option>
        <option value = "Form Three">Form Three</option>
        <option value = "Form Four">Form Four</option>

    </select>
    
</div>
<div class = "form-group">
    <label >Email Address</label>
    <?php


    echo'
        <input class = "form-control" type = "email" name = "usremail" value = " '.$colmail.'" required >
        ';
    ?>

    
</div>
   </div>
   <div class = "col">
    <div class = "form-group">
        <label>Date Applied</label>
        <input class = "form-control" type = "date"  required name ="dateapplied">

   </div>
   <label> Address</label>
   <div class = "row">
       <div class = "col">
   <div class = "form-group">
       <label >Box Number</label>
       <input class = "form-control" type = "text" name = "Ad_number" required>
    </div>
   </div>
   <div class = "col">
    <div class = "form-group">
        <label > Postal Code </label>
        <input class = "form-control" type = "text" name = "Ad_code" required>
     </div>
    </div>
    <div class = "col">
        <div class = "form-group">
            <label >City </label>
            <input class = "form-control" type = "text" name = "Ad_city" required>
         </div>
        </div>
  </div>
  <div class = "form-group">
    <label >Mobile Number </label>
    <input class = "form-control" type = "text" name = "tel" required >
    
</div>
<div class = "form-group">
    <label > Mobile Number 2 </label>
    <input class = "form-control" type = "text" name = "tel2">
    
</div>
<div class = "form-group">
    <label>Any Disability </label>
    <div class = "form-check">
    <input class = "form-check-input" type = "radio" name = "yes" id = "yes">
    <label class = "form-check-label" for = "yes">Yes</label>&nbsp;&nbsp;&nbsp;&nbsp;
    <input class = "form-check-input" type = "radio" name = "yes" id = "No">
    <label class = "form-check-label" for = "No">No</label>
</div>
      <label  for ="desc">If Yes, Which One</label>
   <input class = "form-control" type = "text"  id = "desc">
</div>
     
   </div>
   <div class = "col">
    <div class = "form-group">
        <label >Club & Societies</label>
        <input class = "form-control" type = "text" name = "user">

   </div>
   <div class = "form-group">
       <label > County of Origin</label>
       <input class = "form-control" type = "text" name = "pass">
       
  </div>
  <div class = "form-group">
    <label for ="pname" >Parent/Guardian Name </label>
    <input class = "form-control" type = "text" name = "pname" id = "pname" required>
    
</div>
<div class = "form-group">
    <label >Parent/Guardian Phone Number  </label>
    <input class = "form-control" type = "text" name = "pnum" required>
    
</div>
<div class = "form-group">
    <label >Next of Kin </label>
    <input class = "form-control" type = "text" name = "kin" required>
    
</div>
<div class = "form-group">
    <label > Statement of Oath </label>
    <div class = "form-check">
    
    <input class = "form-check-input" type = "checkbox" name = "confirm" id = "oath">
    <label for = "oath" class = "form-check-label" disabled>I affirm that all the informtion i have provided are true to the best of my Knowledge</label>
</div>
</div>
   </div>
</div>
<input  type = "submit" class = "btn btn-success" id = "application-sub" name = "submit-app">
</form>
</div>
<div class = "modal fade" id = "Admin">
    <div class = "modal-dialog">
        <div class = "modal-content">
            <div class = "modal-header">
             <h3 class = "text-warning">Confirm that You are an Admin</h3>
                <button class= "close" data-dismiss="modal" >&times;</button>
                </div>
                <div class = "modal-body">
                    <form>
                        <div class = "form-group">
                            <label  for= "AdminName">Username</label>
                            <input type = "text" class = "form-control" id = "AdminName">
                            
                        </div>
                        <div class ="form-group">
                         <label  for= "AdminPass">Username</label>
                         <input type = "text" class = "form-control" id="AdminPass">
                        </div>
                        <input type= "submit" class="btn btn-warning">
                    </form>
                </div>
                <div class="modal-footer">
                    <button class = " ml-auto close" data-dismiss= "modal">Exit</button>

                </div>
                

            </div>
        </div>
    </div>



 

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
