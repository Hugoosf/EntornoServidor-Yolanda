<?php


include_once 'Vehiculo.php';

class Cuatro_ruedas extends Vehiculo {
    public $numero_puertas;

    
    public function anadir_persona($peso_persona) {
        $this->peso += $peso_persona;
    }
}

?>