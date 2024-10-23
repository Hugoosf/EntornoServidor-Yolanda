<?php


include_once 'Cuatro_ruedas.php';

class Coche extends Cuatro_ruedas {
    public $numero_cadenas_nieve;

    public function anadir_cadenas_nieve($num) {
        $this->numero_cadenas_nieve += $num;
    }

    public function quitar_cadenas_nieve($num) {
        $this->numero_cadenas_nieve -= $num;
    }
}

?>