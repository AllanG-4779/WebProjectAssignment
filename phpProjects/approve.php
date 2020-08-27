<?php
include 'dbh.class.php';

if (isset($_POST['appr']) ){

        $name = $_POST['showing'];
        $adm = rand(10, 60000000);
        //fetching all the result from the database
        $sqlAppr = "Select * from applications where email = ?";
        $stmt1 = $conn->prepare($sqlAppr);
        $stmt1->bind_param("s", $name);
        $stmt1->execute();
        $result = $stmt1->get_result();
        if ($row = $result->fetch_assoc()) {

            $query = "Insert into approved values (?,?,?,?,?,?,?)";
            $fullAdm = "BRS" . $adm;

            $stmt5 = $conn->prepare($query);
            $stmt5->bind_param("sssssss", $row['ApplicationId'], $row['First_Name'], $row['last_Name'], $row['classEnrolled'], $row['Parent_Mob'], $row['email'], $fullAdm);
            $stmt5->execute();
            $stmt5->close();


    }

        $sql4 = "delete from applications where email = ?";
        $stmt = $conn->prepare($sql4);
        $stmt->bind_param("s", $name);

        $ros = $stmt->execute();

        $stmt->close();
        header("Location: Registration.php");


}else if (isset($_POST['disappr'])) {
    $name = $_POST['showing'];

    //fetching all the result from the database
    $sqlAppr = "Select * from applications where email = ?";
    $stmt1 = $conn->prepare($sqlAppr);
    $stmt1->bind_param("s", $name);
    $stmt1->execute();
    $result = $stmt1->get_result();
    if ($row = $result->fetch_assoc()) {

        $query6 = "Insert into disapproved values (?,?,?,?,?,?)";


        $stmt5 = $conn->prepare($query6);
        $stmt5->bind_param("ssssss", $row['ApplicationId'], $row['First_Name'], $row['last_Name'], $row['Parent_Mob'], $row['email']);
        $stmt5->execute();
        $stmt5->close();


    }

        $sql4 = "delete from applications where email = ?";
        $stmt = $conn->prepare($sql4);
        $stmt->bind_param("s", $name);

        $ros = $stmt->execute();

        $stmt->close();
        header("Location: Registration.php");

}