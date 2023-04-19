<?php

/*
 * Ejercicio 4: Recoger dos numeros por la URL (parametro get) y hacer todas las operaciones basicas de una
 * calculadora (suma, resta, multiplicacion y division de esos dos numeros)
 */
if(isset($_GET['numero1']) && isset($_GET['numero2'])){
    (int)$num1 = $_GET['numero1'];
    (int)$num2 = $_GET['numero2'];

    echo "<h1>Operaciones basica de una calculadora</h1>";

    $suma = $num1 + $num2;
    echo "<p>$num1 + $num2 = $suma</p>";

    $resta = $num1 - $num2;
    echo "<p>$num1 - $num2 = $resta</p>";

    $multiplicacion = $num1 * $num2;
    echo "<p>$num1 * $num2 = $multiplicacion</p>";

    $division = $num1 / $num2;
    echo "<p>$num1 / $num2 = $division</p>";
}else{
    echo "<h1>Introduce correctamente los calores por la URL<h1/>";
}



?>
