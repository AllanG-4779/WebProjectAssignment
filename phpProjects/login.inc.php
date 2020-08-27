<?php
if(isset($_POST["login-submit"])){
    require 'dbh.class.php';
    $usrname = $_POST["loguser"];
    $passWd = $_POST["logpass"];
     
$sql = "select * from signup where username = ? or email = ?";
$stmt = $conn ->prepare($sql);

$stmt ->bind_param("ss", $usrname,$usrname); 
$stmt ->execute();
$result = $stmt->get_result();

if($row = $result->fetch_assoc()){
    $passcheck = password_verify($passWd, $row["email_pass"]);
  if($passcheck == false){
      header("Location: index.php?wrong=pass");
      exit();
  }else if($passcheck == true){

session_start();
      $_SESSION["userId"] = $row['username'];
      $_SESSION["userName"] = $row['First_Name'];
      $_SESSION["userSName"] = $row['last_Name'];

      header("Location: index.php?login=success");


  }else{
      header("Location: index.php?wrong=pass");
      exit();
  }
}else
{
    header("Location : index.php?error=nouser");
    exit();
}
}
else{
    header("Location: index.php");
   exit();
}