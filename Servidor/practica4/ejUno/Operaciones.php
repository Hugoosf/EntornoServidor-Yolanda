<?php

class Operaciones{
public $num;
public $nume;

public function __construct($num, $nume) {
    $this->numerouno = $num;
    $this->numerodos = $nume;
    }
    public function __toString() {
        return "Número 1: {$this->num}, Número 2: {$this->nume}";
    }
    public function suma(){
        return $this->numerouno + $this->numerodos;
        }


    public function resta(){
        return $this->numerouno - $this->numerodos;
        }    

    public function multiplicacion(){
        return $this->numerouno * $this->numerodos;
        }
        
    public function division (){
        return $this->numerouno / $this->numerodos;
        }    

}





?>