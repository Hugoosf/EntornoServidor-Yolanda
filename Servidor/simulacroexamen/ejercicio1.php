<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

if(isset($_POST['calcular'])){
       
    for($i=0; $i<3; $i++){

        for($j=0; $j<2; $j++){
            $key = "{$i}_{$j}";
        if (isset($_POST[$key])) {
            echo $_POST[$key] . " = " . decbin($_POST[$key]);
            echo  "<br>";
            echo "<br>";
        } 
        }

      
    }

}else{

echo '<form action="#" method="post">';
    for($i=0; $i<3; $i++){

        for($j=0; $j<2; $j++){
            echo  "<label for='{$i}_{$j}'>E.$i.$j</label>";
            echo  "<input type='text' name='{$i}_{$j}' id='{$i}_{$j}'>";
        }

      echo  "<br>";
    }
    echo "<input type='submit' name= 'calcular' value='Calcular'>";
    echo '</form>';
} 

    


    ?>
</body>
</html>