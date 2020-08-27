<?php
   include "dbh.class.php";


        if(isset($_POST['onsubmit'])) {

            $Fname = $_POST['FName'];
            $Lname = $_POST['Lname'];
            $gen = $_POST["gender"];
            $Username = $_POST["usr"];
            $date = $_POST['date'];
            $email = $_POST['email'];
            $Password = $_POST["pass"];

            $pshashed = password_hash($Password, PASSWORD_DEFAULT);


            $sqlInsert7 = "insert into signup(`First_Name`, `last_Name`, `gender`, `username`, `date_reg`, `email`, `email_pass`) values (?,?,?,?,?,?,?)";
            if (!$stmtS = $conn->prepare($sqlInsert7)){

                echo '<div class = "alert alert-danger">Error when contacting the database</div>';




            }else{

                $stmtS->bind_param("sssssss", $Fname, $Lname, $gen, $Username, $date, $email, $pshashed);
                 $stmtS->execute();
                 header("Location: index.php?signup=successful");
                }
        }else{



            header("Location: index.php");
            echo " <script>alert('Access Denied....You must be logged in ')</script>";
            exit();
}
