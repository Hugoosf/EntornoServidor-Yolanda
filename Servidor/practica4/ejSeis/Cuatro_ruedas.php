<?php

include_once 'Vehiculo.php';

class Cuatro_ruedas extends Vehiculo {
    public $numero_puertas;

    
    public function __construct($color, $peso, $numero_puertas) {
        parent::__construct($color, $peso);
        $this->numero_puertas = $numero_puertas;
    }

    
    public function anadir_persona($peso_persona) {
        $this->peso += $peso_persona;
        $this->setPeso($this->peso); 
    }
}

?>
