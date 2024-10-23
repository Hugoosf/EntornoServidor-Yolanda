<?php

include_once 'Cuatro_ruedas.php';

class Coche extends Cuatro_ruedas {
    public $numero_cadenas_nieve = 0;

   
    public function anadir_persona($peso_persona) {
        
        parent::anadir_persona($peso_persona);

       
        if ($this->peso >= 1500 && $this->numero_cadenas_nieve <= 2) {
            echo "Atención, ponga 4 cadenas para la nieve." . self::SALTO_DE_LINEA;
        }
    }

   
    public function anadir_cadenas_nieve($num) {
        $this->numero_cadenas_nieve += $num;
    }

    
    public function quitar_cadenas_nieve($num) {
        $this->numero_cadenas_nieve -= $num;
    }
}

?>
