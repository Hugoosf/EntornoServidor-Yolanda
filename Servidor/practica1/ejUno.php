<?php
$pri = 15;
$sec = 15;


if($pri == $sec){
    $res = $pri*$sec;
    echo "La multiplicación ";
}else if($pri > $sec){
    $res = $pri - $sec;
    echo "La resta es ";
}else{
    $res = $pri + $sec;
    echo "La suma es ";
}

echo $res;




?>