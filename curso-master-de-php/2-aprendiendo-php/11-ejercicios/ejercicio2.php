<?php

/*
Ejercicio 2: Escribir un script en PHP que nos muestre por pantalla todos los numeros paras que hay del 1 al 100
 */

$numero_par = 0;
for($i = 1; $i <= 100; $i++){
    if($i%2==0){
        echo "$i ";
    }
}
?>

