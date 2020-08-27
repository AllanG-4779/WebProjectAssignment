<?php
require 'dbh.class.php';
  if(isset($_POST['AdminSub'])){
    $user = $_POST['AdminName'];
    $passAdmin = $_POST['AdminPass'];
$sql = "Select * from signup where username = ? and admin = 1";
$stmt  = $conn ->prepare($sql);
$stmt->bind_param('s',$user);
$stmt ->execute();
$result = $stmt->get_result();
if($row = $result->fetch_assoc()){
    $passCheck = password_verify($passAdmin, $row['email_pass']);
   if ( $passCheck == true){
    session_start();
    $_SESSION['userName'] = $row['username'];
    header("Location: index.php?welcome admin ".$row['username']);
    }
    else{
    header ("Location: index.php?error occured");
     }


}else{
    header("Location: index.php?Login failed");
}

}
