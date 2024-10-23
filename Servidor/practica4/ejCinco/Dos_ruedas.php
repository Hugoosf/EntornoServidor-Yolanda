<?php


include_once 'Vehiculo.php';

class Dos_ruedas extends Vehiculo {
    public $cilindrada;

    
    public function anadir_persona($peso_persona) {
        $this->peso += $peso_persona + 2; 
    }

    public function poner_gasolina($litros) {
        $this->peso += $litros; 
    }
}

?>
