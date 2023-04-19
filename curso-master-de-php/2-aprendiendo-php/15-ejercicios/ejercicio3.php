<?php

/* Ejercicio3:
 * Programa que compruebe si una variable esta vacia, y si esta vacia rellenarla con texto en minuscula y mostrarla
 * en mayuscula y negrita
 */

$texto;
$texto1 = "";

if(empty($texto1)){
    echo "<h2>La variable esta vacia vamos a rellenarla con texto en minuscula</h2>";
    $texto1 = "el fin justifica los medios";
    echo "Antes de convertirla: ".$texto1."<br/>";
    $texto1 = strtoupper($texto1);
    echo "Despues de convertirla: <strong>$texto1</strong>";
}else{
    Echo "La variable tiene contenido y es: ".$texto1;
}