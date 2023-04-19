<?php

/* Ejercicio 1: Hacer un programa en php que tenga un array con 8 numeros enteros y que haga lo siguiente:
 * 1 - Recorreslo y mostrarlo
 * 2 - ordenarlo y mostrarlo
 * 3 - mostrar su longitud
 * 4 - buscar algun elemento (buscar por el parametro que me llegue por la url)
 */

$enteros = [8, 15, 1, 68, 35, 23, 19, 15];

function recorrerMostrar($enteros){
    $resultado = "";
    foreach($enteros as $entero){
    $resultado .= "<p>".$entero."</p>";
    }
return $resultado;
}

// primero recorrerlo y mostrarlo
echo "<h1>Recorriendo y mostrando los elementos del arrays</h1>";
echo recorrerMostrar($enteros);

echo "<br/>";

//segundo ordenarlo y mostrarlo
echo "<h1>Ordenado y mostrando los elementos del arrays</h1>";
asort($enteros);
var_dump($enteros);
echo recorrerMostrar($enteros);

echo "<br/>";

//Mostrar longitud del array
echo "<h2>La longitud del array es: ".count($enteros)."</h2>";
echo "<h2>La longitud del array utilizando \"sizeof()\" es: ".sizeof($enteros)."</h2>";

echo "<br/>";

//buscando un elemento
if(isset($_GET['numero'])){
    $busqueda = $_GET['numero'];
    $search = array_search($busqueda, $enteros);
    if(!empty($search)){
        echo "<h4>El numero buscado existe en el array, en el indice: $search</h4>";
    }else{
        echo "<h4>El numero buscado no existe en el array</h4>";
    }
}

?>

