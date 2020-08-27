<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
 <meta name = "viewport" content = "width=device-width, initial-scale = 1.0">
    <title>Kenyatta University</title>

    <link type = "text/css" rel="stylesheet" href="model.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
     integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>
<body>

<nav class = "navbar navbar-expand-lg navbar-dark  bg-primary">
    <img src="images/badge.jpg" alt="" class = "img-fluid" width="40px"height="auto">
    <a href= "#" class = "navbar-brand">Boro Secondary School</a>
    <button class = "navbar-toggler bg-"  data-toggle="collapse"data-target="#navbarMenu">
    <span class = "navbar-toggler-icon"></span>
    </button>
    <div class= "collapse navbar-collapse" id = "navbarMenu">


        <?php

        if(isset($_SESSION['userId'])){
            echo '
 <ul class= "navbar-nav ml-auto">
<li class = "nav-item text-success">
           <a class = "nav-link" href= "#">Home</a>
        </li>
             <li class = "nav-item">
            <a class = "nav-link" href= "application.php" name = "Linkapplication">Application</a>
         </li>
        
         <li class = "nav-item">
            <a class = "nav-link" href="contactUs.php">Contact Us</a>
         </li>
       
       
        
       
  
    
            ';
        }
        else{
            if(isset($_SESSION['userName'])) {
                echo '
   <ul class= "navbar-nav ml-auto">
              <li class = "nav-item">
            <a class = "nav-link "href= "Registration.php">Registration</a>
         </li>
         <li class = "nav-item">
            <a class = "nav-link" href= "CurrentStudents.php"  data-target="Admin">Prospective Students</a>
         </li>
        </ul>
      
       ';
            }
        }
        ?>

     
</div>
</nav>


<div class = "container-fluid">
     <div class= "row " >
         <div class = "col-sm border border-primary border-top-0 bg-success ">
            <h3 class = "text-light"> Welcome to Boro Mixed Secondary School</h3>
            <h1 class= "text-dark " style= " font-style:italic; font-family: Arial, Helvetica, sans-serif; font-size:23px;">Quality Education for future generation
                <?php
                if(isset($_SESSION['userId'])){
                    echo '
                   <span style = "font-style:initial;margin-left:600px;"class = "text-light pl-5"> Welcome '.$_SESSION['userId'].'</span>';

                }
                else if(isset($_SESSION['userName'])){
                    echo '
                   <span style = "font-style:initial;margin-left:550px;"class = "text-light pl-5"> Welcome Admin <span class = "text-warning">' .$_SESSION['userName'].'</span></span>';

                }

                ?>
            </h1>

            <div>
            <p id = "cometime" style = "margin-left: 0px;" class = "text-light text-left ">Time comes Here</p>
         </div>
        </div>
        
    </div>
    <div class = "container-fluid">
           <div class = "row mt-30 ">
               <div class = "col-sm-4 style"style ="font-family:san-serif; font-stretched:condensed;">
                   Boro Secondary School is  mixed day and boarding school
                   established in 1945. It is located in Londiani Constituency in Nakuru County.
                   The School is currently headed by the Principle Mr John Okeke who is a Nigerian National.
                   The school has a capacity of four thousand student boarding while seven thoudsand students day schooling
                   <a class = "btn btn-success" href="history.html">Learn more about Our School</a>
                    
                  <h3 class = "text-warning"> How to join Boro Centre of Excellence</h3>
                  <p>In order to join our school, you must have done the National Primary Examination as required by the Kenyan
                      Constitution for Secondary Education.
                      Or, if you are willing to transfer from your current school then you can do so by applying for a transfer letter from your nearest Ministry of Education
                      so that you can be given a new NAMIS number authorizing your transfer. Please 
                      note that on successful application of the letter then you can proceed to our website and register with us
                      after which you will be able to log in so that to make your application for proceessing.
                      <h1 class = "text-danger">Note:</h1>
                      <h3 class ="text-info">You will be required to sit for a written interview to determine whether you are qualified for the 
                          class you are applying for and if you fail, you will be low-levelled to the next lower class.
                      </h3>
                      <p> Having read the warning...Kindly register with us and apply today for quality of education.</p>


               </div>
               <div class = "col-sm-4">
                   <div class= "card">
                       <div class = "card-header">
                           <p style="font-style: italic;">Disclaimer: The image is for academic purposes only</p>
                       </div>
                       <div class = "card-content">
                       <img src="images/magoha.png" width= "100%">

                    </div>
                    <div class = "card-footer">
                         <p style="font-style: italic;"> Mr. John Okeke principal of Boro Mixed HighSchool</p>
                    </div>
                </div>
                <div class= "card">
                    <div class = "card-header">
                        <p style="font-style: italic;">Disclaimer: The image is for academic purposes only</p>
                    </div>
                    <div class = "card-content">
                    <img src="images/boro.jpg" width= "100%">

                 </div>
                 <div class = "card-footer">
                      <p style="font-style: italic;">Beutiful Classes avalilable for conducive learning Environment</p>
                 </div>
             </div>

               </div>
               <div class = "col-sm-4">
                   <?php
                   if(!isset($_SESSION['userId'])) {
                       if(!isset($_SESSION['userName'])){
                       echo '

                       <a class = " btn btn-info size-large text-light m-2 display-6" onclick="showLogform()" > Login </span></a > OR
                       <a class = " text-primary "><button  class= "btn  btn-info" data-toggle = "modal" data-target = "#myRegistration" > Sign Up </button> <br><br>Admin?<br><br>
                       <a class = " text-warning "><button  class= "btn  btn-info" data-toggle = "modal" data-target = "#Admin" >Login Here </button>
                   <form action = "login.inc.php" method = "POST" onsubmit = "return validateLog()" id = "login-form" >

                     <div class = "form-group" >
                         <label > Username </label >
                         <input class = "form-control" type = "text" name = "loguser" id = "logUser" >


                    </div>
                    <div class = "form-group" >
                        <label > Password </label >
                        <input class = "form-control" type = "password" name = "logpass"  id = "logPass" >

                   </div >

                   <input  class = "btn  btn-primary" type = "submit" name = "login-submit" >
                     </form >
                     
                     
                    ';
                     }else{
                           echo '
                      <div class = "bg-light  "> 
                      <form action = "logout.inc.php" method = "Post">
                       <button style = "margin-left:363px;" class ="btn btn-danger " type = "submit" name = "logout-sub">Logout</button>
                       </form>
                       
                      </div>
                      <div>
                       <p class = ""></p>
                       
                       </div>
                      
                     
                    
                       
                       
                       
                       
                       
                       
                       ';
                       }
                   }

                   else{

                       echo '
                      <div class = "bg-light  "> 
                      <form action = "logout.inc.php" method = "Post">
                       <button style = "margin-left:363px;" class ="btn btn-danger " type = "submit" name = "logout-sub">Logout</button>
                       </form>
                       
                      </div>
                      <div>
                       <p class = ""></p>
                       
                       </div>
                      
                     
                    
                       
                       
                       
                       
                       
                       
                       ';

                   }
                     ?>

               
           </div>
           <div id = "myRegistration"class = "modal fade">
               <div class ="modal-dialog">
                   <div class = "modal-content">
                       <div class = "modal-header bg-dark ">
                        <h3 class = " text-success">Register</h3> 
                           <button type = "button" class = "close" data-dismiss = "modal">&times;</button>
                        </div>
                        <div class= "modal-body">
                            <div class="container">
                                <form action = " Reg.inc.php" method= "POST" onsubmit="return ValReg()">
                                    <div class = "row">
                                        <div class = "col">
                                    <div class = "form-group">
                                        <label>First Name</label>
                                         <input type = "text"class = " input form-control" name = "FName" required>

                                    </div>
                                        </div>
                                  <div class = "col">     
                                    <div class = "form-group">
                                        <label>Date of Birth</label>
                                        <input type = "date"class = "input form-control" name = "date"required>

                                    </div>
                                    </div> 
                                </div>
                                <div class = "row">
                                    <div class = "col">
                                <div class = "form-group">
                                    <label>Last Name</label>
                                    <input type = "text"class = " input form-control" required name = "Lname">

                                </div>
                                    </div>
                              <div class = "col">     
                                <div class = "form-group">
                                    <label>Email Address</label>
                                    <input type = "email"class = " input form-control"required name = "email">

                                </div>
                                </div> 
                            </div>
                            <div class = "row">
                                <div class = "col">
                            <div class = "form-group  ">
                                <label>Gender</label>
                              <select class = " input form-control" name = "gender" required>
                                  <option value = " Male">Male</option>
                                  <option value = "Female">Female</option>
                                  <option value=" Other">Other</option>

                              </select>
                                 
                            </div>
                                </div>
                          <div class = "col">     
                            <div class = "form-group">
                                <label>Password</label>
                                <input type = "password"class = " input form-control" id = "ConPass" required name ="pass">

                            </div>
                            </div> 
                        </div>
                        <div class = "row">
                            <div class = "col">
                        <div class = "form-group">
                            <label>Username</label>
                            <input type = "text"class = "input form-control" required name= "usr">

                        </div>
                            </div>
                      <div class = "col">     
                        <div class = "form-group">
                            <label>Confirm Password</label>
                            <input type = "password" class = "input form-control" id ="confPass" required name = "confPass">

                        </div>
                        </div> 
                    </div>
                       <div align = "center">
                               <input type = "submit" class = " input btn btn-secondary"name = "onsubmit">
                            </div>
                                </form>

                            </div>
                        </div>
                        <div class = "modal-footer bg-success">
                            <a class= "btn btn-primary close" data-dismiss="modal">Close</a>
                            
                        </div>

                   </div>
               </div>

            </div>
           <div>
               <div class = "modal fade" id = "Admin">
                   <div class = "modal-dialog">
                       <div class = "modal-content">
                           <div class = "modal-header bg-success">
                            <h3 class = "text-light">Confirm that You are an Admin</h3>
                               <button class= "close" data-dismiss="modal" >&times;</button>
                               </div>
                               <div class = "modal-body bg-light" >
                                   <form action = "loginAdmin.php" method = "POST">
                                       <div class = "form-group">
                                           <label  for= "AdminName">Username</label>
                                           <input type = "text" class = "form-control" id = "AdminName" name = "AdminName">

                                           
                                       </div>
                                       <div class ="form-group">
                                        <label  for= "AdminPass">Password</label>
                                        <input type = "password" class = "form-control" id="AdminPass" name = "AdminPass" required>
                                       </div>
                                       <input type= "submit" class="btn btn-primary" name = "AdminSub">
                                   </form>
                               </div>
                               <div class="modal-footer bg-success">
                                   <button class = " ml-auto close" data-dismiss= "modal">Exit</button>

                               </div>
                               

                           </div>
                       </div>
                   </div>

               </div>
               
                <footer class = "page-footer font-small indigo">
                    <div class = "row">
                          <div class = col-sm-4>
                                Quick Nav
                          </div>
                          <div class = col-sm-4>
                            Quick Nav
                      </div>
                      <div class = col-sm-4>
                        Quick Nav
                  </div>

                    </div>

                </footer>
            </div>
    </div>
</div>
 <script>

 </script>
<script src =  "valid.js" ></script>"
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
