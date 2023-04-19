<?php

/*
 * Ejercicio 3: Escribir un programa que imprima por pantalla los cuadrados (un numero multiplicado por si mismo)
 * de los primeros cuarenta numeros naturales
 */
// post-data: utilizar bucle while

$numeroN = 0;
$cuadrado = 0;

while($numeroN <= 40){
    $cuadrado = $numeroN*$numeroN;
    echo"<h1>El cuadrado de $numeroN es ".($cuadrado)."</h1>";
    $numeroN++;
}

echo '<hr/>';
echo "<h1>Utilizando bucle for</h1>";
//Utilizando el bucle for
for($i = 0; $i <= 40; $i++){
    $cuadrado = $i*$i;
    echo"<h1>El cuadrado de $i es ".($cuadrado)."</h1>";
}
?>

