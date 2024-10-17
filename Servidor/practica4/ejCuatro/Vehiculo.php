<?php

class Vehiculo{

    public $color;
    public $peso;
    public $numero_cadenas_nieve;
    public $longitud;

    public function __construct($color, $peso, $numero_cadenas_nieve = 0){
        $this->color = $color;
        $this->peso = $peso;
        $this->numero_cadenas_nieve = $numero_cadenas_nieve;
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

    public function repintar($color){
        $this->color = $color;
    }


    public function poner_gasolina($litros){
        $this->peso += $litros;
    }

    public function anadir_cadenas_nieve(){
      $this->$numero_cadenas_nieve++;
        

    }


    public function quitar_cadenas_nieve(){
        $this->$numero_cadenas_nieve--;
        
    }

    public function anadir_remolque($longitud_remolque){
        $longitud += $longitud_remolque;
        
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

  
    public function getNumero_cadenas_nieve()
    {
        return $this->numero_cadenas_nieve;
    }

  
    public function setNumero_cadenas_nieve($numero_cadenas_nieve)
    {
        $this->numero_cadenas_nieve = $numero_cadenas_nieve;

        return $this;
    }
}



?>