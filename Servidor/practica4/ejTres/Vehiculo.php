<?php

class Vehiculo{

    public $color;
    public $peso;

    public function __construct($color, $peso){
        $this->color = $color;
        $this->peso = $peso;
    }

    public function circula(){

    }

    public function anadir_persona($peso_persona){

    }




    
    public function getColor()
    {
        return $this->color;
    }

    
    
     
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    
    public function getPeso()
    {
        return $this->peso;
    }

    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }
}



?>