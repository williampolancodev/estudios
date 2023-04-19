<?php

/* Ejercicio 2:
 * Debe tener:
 * 1. Una función
 * 2. Validar un email con filter_var y devolver el resultado
 * 3. Recoger una variable pòr get y validarla
 * 4. Mostrar el resultado
 * 
 *  */

function validarEmail($email){
    $status = "No valido.";
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $status = "valido";
    }
    
    return $status;
}
if(isset($_GET['email'])){
    echo validarEmail($_GET['email']);
}else{
    echo "Pasa por get un email...";
}    
