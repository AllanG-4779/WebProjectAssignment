<?php
 class Person {
     private $age;
    private $FName;
     private $SName;
   public  static $drinkingAge=900;


     public function __construct($age, $FName,$SName){
          $this->age = $age ;
          $this->FName = $FName ;
          $this->SName = $SName ;

     }

     public function setName($name){
         $this->age= $name;
     }
     public function getName(){
            return $this->SName;

     }
     public static function setDrinkingAge($name){
       self::$drinkingAge = $name;
     }
 

 }

?>

