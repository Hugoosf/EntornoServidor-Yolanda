<?php

$alumnos = array('Básico' => array("Inglés"=>1, "Francés"=>14, "Alemán"=>8, "Ruso"=>3),
                'Medio' => array("Inglés"=>6, "Francés"=>19, "Alemán"=>7, "Ruso"=>2),
                'Perfeccionamiento' => array("Inglés"=>3, "Francés"=>13, "Alemán"=>4, "Ruso"=>1));

                foreach($alumnos as $tipo => $asignatura){
                    echo $tipo.": <br>";
                    foreach($asignatura as $materia => $num ){
                    echo $materia.": ".$num."<br>";
                }
                echo "<br>";
                }




?>