<?php
$num = rand(1, 10);
$divisores = 0;
for ($i = 1; $i <= $num; $i++) {
    if ($num % $i == 0) {
        $divisores++;
        

    }
}
if($divisores == 2){
    echo "El número $num es primo";
}else{
    echo "El número $num no es primo";
}




?>