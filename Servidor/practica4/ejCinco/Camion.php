<?php


include_once 'Cuatro_ruedas.php';

class Camion extends Cuatro_ruedas {
    public $longitud;

    public function anadir_remolque($longitud_remolque) {
        $this->longitud += $longitud_remolque;
    }
}

?>
