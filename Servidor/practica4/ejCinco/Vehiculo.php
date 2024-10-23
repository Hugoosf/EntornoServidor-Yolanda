<?php


abstract class Vehiculo {
    public $color;
    public $peso;

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

    public function repintar($color) {
        $this->color = $color;
    }

   
    public static function ver_atributo($objeto) {
        echo "Color: " . $objeto->color . "<br>";
        echo "Peso: " . $objeto->peso . "<br>";
        if (isset($objeto->numero_puertas)) {
            echo "Número de puertas: " . $objeto->numero_puertas . "<br>";
        }
        if (isset($objeto->cilindrada)) {
            echo "Cilindrada: " . $objeto->cilindrada . "<br>";
        }
        if (isset($objeto->longitud)) {
            echo "Longitud: " . $objeto->longitud . "<br>";
        }
        if (isset($objeto->numero_cadenas_nieve)) {
            echo "Número de cadenas para la nieve: " . $objeto->numero_cadenas_nieve . "<br>";
        }
    }
}

?>