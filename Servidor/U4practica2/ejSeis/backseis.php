

<form method="post" action="">

<?php
/*
El siguiente código nos mostrará una casilla para asignar un mail
acompañado de un mensaje, ambos asignados por defecto gracias a los scripts
de php dentro del value del primer input y dentro del span

*/
$email="abc@abc.com";
$emailErr="Email correcto";
?>

mail: <input type="text" name="email" value="<?php echo $email;?>"><span class="error">* <?php echo $emailErr;?></span><br><br>
</form>