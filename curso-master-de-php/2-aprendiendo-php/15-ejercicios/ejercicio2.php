<?php

/* Ejercicio 2:
 * Escribir un programa con php que añada valores a un array mientras su longitud sea menor a 120 
 * y luego mostrarlo en pantalla
 */

$arrayLong = array();
$count = 0;
for($i = 0; count($arrayLong) < 120; $i++){
    $count += ($i + 1);
    echo ($arrayLong[] += ($count))."<br/>";
    /*Otra forma seri utilizando array_push
     * array_push($arrayLong, "Elemento-".$i);
     *      */
}
var_dump($arrayLong);
