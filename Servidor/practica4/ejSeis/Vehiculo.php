<?php

abstract class Vehiculo {
    public $color;
    public $peso;
    protected static $numero_cambio_color = 0; 
    const SALTO_DE_LINEA = '<br />'; 

    public function __construct($color, $peso) {
        $this->color = $color;
        $this->peso = $peso;
    }

    public function __toString() {
        return "Peso y color: {$this->peso} {$this->color}";
    }

    public function circula() {
        return "El vehículo circula";
    }

 
    abstract public function anadir_persona($peso_persona);

   
    public function setColor($color) {
        $this->color = $color;
        self::$numero_cambio_color++;
    }

    
    public function setPeso($peso) {
        if ($peso > 2100) {
            $this->peso = 2100;
        } else {
            $this->peso = $peso;
        }
    }

    
    public static function ver_atributo($objeto) {
        echo "Color: " . $objeto->color . self::SALTO_DE_LINEA;
        echo "Peso: " . $objeto->peso . self::SALTO_DE_LINEA;
        if (isset($objeto->numero_puertas)) {
            echo "Número de puertas: " . $objeto->numero_puertas . self::SALTO_DE_LINEA;
        }
        if (isset($objeto->cilindrada)) {
            echo "Cilindrada: " . $objeto->cilindrada . self::SALTO_DE_LINEA;
        }
        if (isset($objeto->longitud)) {
            echo "Longitud: " . $objeto->longitud . self::SALTO_DE_LINEA;
        }
        if (isset($objeto->numero_cadenas_nieve)) {
            echo "Número de cadenas para la nieve: " . $objeto->numero_cadenas_nieve . self::SALTO_DE_LINEA;
        }
        echo "El color se ha cambiado " . self::$numero_cambio_color . " vez." . self::SALTO_DE_LINEA;
    }
}

?>
