<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        echo "El vector tiene 9 elementos<br>";
        $suma=0;
        for($j=0; $j<9; $j++){
            echo "$j = " . $_POST[$j]."<br>";
            $suma += $_POST[$j];
        }
        
        echo "La suma es $suma";
    }
    
    echo '<form action="#" method="post">';
    for($i=0; $i<9; $i++){
      echo  "<label for='$i'>$i:</label>";
      echo  "<input type='text' name='$i' id='$i'><br>";
    }
    echo "<input type='submit' value='enviar'>";
    echo '</form>';
      
    ?>

    
</body>
</html>