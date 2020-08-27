<?php

include 'approve.php';

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
<body class = "bg-">

<nav class = "navbar navbar-expand-lg navbar-dark bg-primary">
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
    

        
       
    </ul>
</div>
</nav>

    <div class = "row">
        <div class = "col-12">
    <p class = "display-4 text-dark bg-success p-1">List of Approved Applications</p>
    
     </div>   
    </div>

<?php
    $sql = "select * from approved ";
    $stmt2 = $conn->query($sql);




?>
    <div class = "container-fluid">
       
        <div class = "row">
            <div class = "col">
                <table class = "table table-striped">
                    <thead class = "thead-light">
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Gender</th>
                            <th>Class</th>
                            <th>Email</th>
                            <th>Admission Number</th>
                            
                          </tr>
                    </thead>
                    <tbody>

                        <?php
                        while($row = $stmt2->fetch_assoc()) {
                            echo '
 <tr>
                           <td>'.$row["Id"].'</td>
                        <td>'.$row["Fname"].'</td>
                        <td>'.$row["LName"].'</td>
                        <td>'.$row["classApplied"].'</td>
                        <td>'.$row["ParentContact"].'</td>
                        <td>'.$row["Email"].'</td>
                        <td>'.$row["ADM"].'</td>
                        </tr>
                        
                        ';
                        }
                        ?>





                    </tbody>
                        
                </table>
            </div>
        </div>
    </div>





<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
