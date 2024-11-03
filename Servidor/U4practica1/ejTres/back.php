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

    $option = $_POST["boton"];

    switch($option){
        case 'Suma':

        $suma = $_POST["a"] + $_POST["b"];
        echo $_POST["a"]. " + ".$_POST["b"]. " = $suma";

        break;

        case 'Resta':

        $resta = $_POST["a"] - $_POST["b"];
        echo $_POST["a"]. " - ".$_POST["b"]. " = $resta";
    
        break;
        case 'Mult':

        $mult = $_POST["a"] * $_POST["b"];
        echo $_POST["a"]. " * ".$_POST["b"]. " = $mult";
        
        break;
        case 'Division':

        $div = $_POST["a"] / $_POST["b"];
        echo $_POST["a"]. " / ".$_POST["b"]. " = $div";
            
        break;



    }


}

?>

<form action="#" method="post">
   
 <label for="a">A:</label>
 <input type="text" name="a"> 
 <label for="b">B:</label>
 <input type="text" name="b">

 <br>
 <input type="submit" value="Suma" name="boton">
 <input type="submit" value="Resta" name="boton">
 <input type="submit" value="Mult" name="boton">
 <input type="submit" value="Division" name="boton">

</form>



</body>
</html>