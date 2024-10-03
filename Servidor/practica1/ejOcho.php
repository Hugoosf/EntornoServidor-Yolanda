<?php
$num = rand(1,1000);
$divisores = 0;
for($i = 1; $i<$num; $i++){

    if($num % $i == 0){
        $divisores += $i;
    }

}

if($divisores == $num){
    echo "El número $num es perfecto";
}else{
    echo "El número no es perfecto";
}




?>