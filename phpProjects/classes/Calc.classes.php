<?php
class Calc{

    public $operator;
    public $num1;
    public $num2;
    
    public function __construct(string $operator,int $First,int $Second){
        $this->operator = $operator;
        $this->num1 = $First;
        $this->num2 = $Second; 
    }
    public function calculator(){
        switch($this->operator){
            case 'add':
                $result = $this->num1 + $this ->num2;
             return $result;
            break;
            
            case 'div':
                $result = $this->num1 / $this ->num2;
            return $result;
            break;

            case 'mul':
                $result = $this->num1 * $this ->num2;
            return $result;
            break;

            case 'sub':
                $result = $this->num1 - $this ->num2;
            return $result;
            break;

            default:
            echo 'No operation chosen';

        }
    }
}