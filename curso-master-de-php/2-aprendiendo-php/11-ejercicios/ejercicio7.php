<?php

/*
 * Ejercicio 5: Hacer un programa que muestre todos los numeros impares entre dos numeros que nos llegan por la URL($_GET)
 */
$cambio = 0;

if(isset($_GET['numero1']) && isset($_GET['numero2'])){
    $num1 = $_GET['numero1'];
    $num2 = $_GET['numero2'];

        if($num1 > $num2){
            $cambio = $num1;
            $num1 = $num2;
            $num2 = $cambio;

        }

    for($i = $num1; $i <= $num2; $i++){
        if($i%2==1){
            echo "<p>$i</p>";
        }
    
    }
}else{
    echo "<h1>Introduzca correctamente los valores por la URL</h1>";
} 

?>