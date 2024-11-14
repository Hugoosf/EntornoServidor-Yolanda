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
    if(isset($_POST['enviar'])){
        
        if(decbin($_POST['numerin']) == $_POST['numero']){
            echo "Respuesta acertada el número es ". $_POST['numerin'] . "<br><br>";
        }else{
            echo "Has fallado, vuelve a jugar<br><br>";
        }
       echo  '<a href="ejercicio2.php">VOLVER A JUGAR</a>';
    }else{
    $numeros = [rand(0,1), rand(0,1), rand(0,1), rand(0,1)];
    echo "<h1>Adivina el número en decimal</h1>";
    $num = $numeros[0] . $numeros[1] . $numeros[2] . $numeros[3];
    echo "<h2>El número en BINARIO: $num</h2>";
    for($i=0; $i<4; $i++){
      if($numeros[$i] == 0){
        echo "<img src='img/blanco.JPG'>";
      }else{
        if($i == 0){
            echo "<img src='img/ocho.JPG'>";
        }
        if($i == 1){
            echo "<img src='img/cuatro.JPG'>";
        }
        if($i == 2){
            echo "<img src='img/dos.JPG'>";
        }
        if($i == 3){
            echo "<img src='img/uno.JPG'>";
        }
      }
    }

    echo '<form action="#" method="post">';
    
            echo  "<label for='numerin'>Número decimal</label>";
            echo  "<input type='text' name='numerin' id='numerin'>";
            echo "<input type='hidden' name='numero' value='$num'>";
        
    echo "<input type='submit' name= 'enviar' value='Enviar'>";
    echo '</form>';
}
    


    ?>
</body>
</html>