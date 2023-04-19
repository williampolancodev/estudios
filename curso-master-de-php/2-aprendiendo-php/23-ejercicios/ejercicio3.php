<?php

/* Ejercicio3: (Hacer una calculadora en php a travez de un formulario)
 * Hacer una interfaz de usuario(formulario) con dos inputs y 4 botones: uno para
 * sumar, restar, multiplicar y dividir
 */

/*Si queremos hacer esto pero en una sola pagina, debemos evaluar que existan
los parametros que se obtienen por le metodo get o post y despues ahi se haria 
lo que hemos hecho aqui dentro de esa condicion y solo mostrar el resultado dentro
del html*/

$number1 = $_GET['numero1'];
$number2 = $_GET['numero2'];
$operacion = $_GET['operacion'];
//var_dump($operacion);
//die();

$resultado = operaciones($number1, $number2, $operacion);

echo "<h1>El resultado es: </h1>".$resultado;

header("refresh: 5; URL=ejercicio3.html");

function operaciones($numero1, $numero2, $operacion){
    $resultado = 0;
    switch($operacion){
        case 'sumar':
            $resultado = $numero1 + $numero2;
            break;
        case 'restar':
            $resultado = $numero1 - $numero2;
            break;
        case 'multiplicar':
            $resultado = $numero1 * $numero2;
            break;
        case 'dividir':
            $resultado = $numero1 / $numero2;
            break;
    }
    return $resultado;
}

?>


