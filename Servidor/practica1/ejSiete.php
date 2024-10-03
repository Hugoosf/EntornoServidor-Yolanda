<?php
$divisores = 0;
for($num = 2; $num <= 50; $num++){

    for ($i = 2; $i <= $num; $i++) {
        if ($num % $i == 0) {
            $divisores++;
            

        }
    }
    if($divisores == 1){
        echo "El número $num es primo<br>";
    }
    $divisores = 0;

}





?>
