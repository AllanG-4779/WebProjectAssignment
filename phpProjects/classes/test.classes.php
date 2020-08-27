<?php
include "dbh.class.php";
class test extends dbh {

  public function getUsers(){
   
    $sql = "SELECT * FROM student";

    $result =  $this->connect()->query($sql) or die($this->connect()->error);

        while ($rows = $result->fetch_assoc()){
              $collected[] = $rows;
        }
       return $collected;

    


  }
  public function getUsersStmt($id){
     $sql = "SELECT * from users where Name = ?";
     $stmt = $this->connect()->prepare($sql) or die($this->connect()->error);
     $stmt->bind_param("s",$id);
     $stmt->execute();
     $names = $stmt->get_result();
     while($row = $names->fetch_assoc()){
      print_r($row);
     }
    
     

  }



}