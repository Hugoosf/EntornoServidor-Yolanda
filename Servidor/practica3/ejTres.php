<?php
function esPalindromo($cadena) {
    
    $cadena = strtolower(str_replace(' ', '', $cadena));
    
    
    return $cadena === strrev($cadena);
}
?>
