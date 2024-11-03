<?php
$sexo = "mujer"; // Opción por defecto seleccionada
$sexoErr = ""; // Variable para almacenar mensajes de error
?>

<form method="post" action="">
Sexo:
<input type="radio" name="sexo" 
<?php if (isset($sexo) && $sexo == "mujer") echo "checked"; ?> 
value="mujer"> Mujer
<input type="radio" name="sexo" 
<?php if (isset($sexo) && $sexo == "hombre") echo "checked"; ?> 
value="hombre"> Hombre
<span class="error">* <?php echo $sexoErr; ?></span><br><br>
<input type="submit" value="Enviar">
</form>






