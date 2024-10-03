<?php

$mascotas = array('perro' => array('Mastín'=>"Yunito",'Fuet'=>"Salchcicha",'Sarnoso'=>"Chiguagua"),
                    'gato' => array('Persa'=>"Otis",'Común'=>"Garfield",'Princesa'=>"Siames"));
                    foreach ($mascotas as $tipo => $razas) {
                        echo "Tipo de mascota: $tipo<br>";
                        foreach ($razas as $raza => $nombre) {
                            echo "  Raza: $raza, Nombre: $nombre<br>";
                        }
                    }

?>