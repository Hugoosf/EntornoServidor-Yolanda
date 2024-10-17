<?php

class Vehiculo{

    public $color;
    public $peso;

    public function __construct($color, $peso){
        $this->color = $color;
        $this->peso = $peso;
    }


    public function __toString() {
        return "Peso y color: {$this->peso} {$this->color}";
    }

    public function circula(){
        return "El vehículo circula";

    }

    public function anadir_persona($peso_persona){
        $this->peso += $peso_persona;
        return "Se sube una persona";
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