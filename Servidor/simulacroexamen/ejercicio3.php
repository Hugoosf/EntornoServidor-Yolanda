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
$num = rand(1,100); 

echo '<form action="#" method="post">';
    
    echo  "<label for='numerin'>Adivina mi número:</label>";
    echo  "<input type='text' name='numerin' id='numerin'>";
    echo "<input type='hidden' name='numero' value='$num'>";
echo "<input type='submit' name= 'enviar' value='Enviar'>";
echo '</form>';

if(isset($_POST['enviar'])){

if($_POST['numerin'] == $_POST['numero']){
echo "ENHORABUENA, HAS ACERTADO";
}

if($_POST['numerin'] > $_POST['numero']){

echo "Mi número es MENOR";
}

if($_POST['numerin'] < $_POST['numero']){
    echo "Mi número es MAYOR";
}


}

?>
</body>
</html>