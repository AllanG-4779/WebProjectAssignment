<?php
include 'dbh.class.php';

    session_start();


    $Fname = $Sname = $colmail = "";

    $username = $_SESSION['userId'];
    $sql = "select * from signup where username =? ";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($row = $result->fetch_assoc()) {
        $Fname = $row['First_Name'];
        $Sname = $row['last_Name'];
        $colmail = $row ['email'];

    }
if(isset($_POST['submit-app'])) {
    $appRef = "STUD";
    $appID = 999;
    $MName = $_POST['usrMname'];
    $class = $_POST['course'];
    $BoxNo = $_POST['Ad_number'];
    $code = $_POST['Ad_code'];
    $city = $_POST['Ad_city'];
    $mobile = $_POST['tel'];
    $PName = $_POST['pname'];
    $PNo = $_POST['pnum'];
    $NextKin = $_POST['kin'];
    $date = $_POST['dateapplied'];
    $applicationID = $appRef.rand();





    $sql2 = "INSERT INTO `applications` (`ApplicationId`, `First_Name`, `last_Name`, `middle_Name`, `classEnrolled`, `email`, `BoxNumber`, `Code`, `city`, `mobile`, `Parent_Name`, `Parent_Mob`, `Next_Kin`, `Date_Applied`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";

    $stmt = $conn->prepare($sql2);
    $stmt->bind_param("ssssssiissssss", $applicationID, $Fname, $Sname, $MName, $class, $colmail, $BoxNo, $code, $city, $mobile, $PName, $PNo, $NextKin, $date);

   $check = $stmt->execute();

   if(!$check) {
       header("Location: index.php?insertion failed");

  exit();
   }else {
       header("Location: index.php?inserted successfully");
       exit();
   }

}

else{


}



