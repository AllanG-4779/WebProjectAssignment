<?php
include 'test.classes.php';
class show extends test{
  
  public function showUsers(){
    $returnedData = $this->getUsers("Allan");

       echo 'ID'.'Name <br>';
      foreach((array)$returnedData as $item){

      echo $item['ID']." ".$item['Name']."<br>";
    
  }
}}