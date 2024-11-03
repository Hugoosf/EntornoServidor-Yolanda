<?php

function funcion_validar_nombre($name){

    if(empty($name)){
        $nameErr = "Name is required";
    }else{

    if (preg_match("/^[a-zA-Z ]*$/",$name)) {
        $nameErr = "";
        }else{
            $nameErr = "Only letters and white space allowed";
        }
    }
        return $nameErr;
}

function  funcion_validar_email($valor) {

    if(empty($valor)){
        $emailErr = "E-mail is required";
    }else{

    if (filter_var($valor, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "";
        
    }else{
        $emailErr = "Invalid email format";
    }
}
    return $emailErr;
    }



    function funcion_validar_url($valor) {

        if(empty($valor)){
            $urlErr = "";
        }else{

        if (filter_var($valor, FILTER_VALIDATE_URL)) {
            $urlErr = "";
        } else {
            $urlErr = "Invalid URL";
        }
    }
        return $urlErr;
    }    


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error{color:red;}
    </style>
</head>
<body>
    <h1>PHP Form Validation Example</h1>
    <span class="error">* required field.</span><br><br>
<form method="post" action="">

<label for="name">Name: </label>
<input type="text" name="name"><span class="error">* <?php if(isset($_POST['enviar'])){ echo funcion_validar_nombre($_POST['name']); } ?></span>
<br><br>

<label for="email">E-mail: </label>
<input type="text" name="email"><span class="error">* <?php if(isset($_POST['enviar'])){ echo funcion_validar_email($_POST['email']); } ?></span>
<br><br>

<label for="website">Website: </label>
<input type="text" name="website"><span class="error"> <?php if(isset($_POST['enviar'])){ echo funcion_validar_url($_POST['website']); } ?></span>
<br><br>

<label for="mensaje">Comment: </label>
<textarea name="mensaje" id="mensaje" cols="50" rows="4"></textarea>
<br><br>

<label for="gender">Gender: </label>
<input type="radio" name="genero" value="mujer">Female<input type="radio" name="genero" value="hombre">Male
<span class="error">* <?php if(!isset($_POST['genero'])){ if(isset($_POST['enviar'])){ echo "Gender is required";} } ?></span>
<br><br>

<input type="submit" name="enviar" value="Submit">

</form>

<?php


if(isset($_POST['enviar'])){
    echo "<h1>Your Input</h1>";
    if(!empty($_POST['name'])){
        echo $_POST['name'] . "<br>";
    }

    if(!empty($_POST['email'])){
        echo $_POST['email'] . "<br>";
    }

    if(!empty($_POST['website'])){
        echo $_POST['website'] . "<br>";
    }

    if(!empty($_POST['mensaje'])){
        echo $_POST['mensaje'] . "<br>";
    }

    if(!empty($_POST['genero'])){
        switch($_POST['genero']) {
            case 'mujer':
                echo "Female";
            break;
    
            case 'hombre':
                echo "Male";
            break;
    }
    
}
}



?>

</body>
</html>