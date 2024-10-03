<?php

$a=1;
$b=2;
$c=-3;
$signo = ($b * 2 - $a * $c);
if($signo < 0){
    echo "No tiene solución";
}else if($signo == 0){
    echo (-$b/2*$a);
}else{
    echo ((-$b+sqrt($b*2-4*$a*$c))/(2*$a))."<br>";
    echo ((-$b-sqrt($b*2-4*$a*$c))/(2*$a));
}




?>