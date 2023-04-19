<?php

/* Ejercicio 4:
 * Crear un script en php que tenga cuatro variables, una de tipo array, una int, otra string y otra booleana,
 * y que imprima un mensaje segun la variable
 */

$array = [1, 7.14, "Hola", true];
$entera = 8;
$string = "Hola que tal";
$booleana = true;

if(is_array($array)){
    echo "<h2>La variable \$array es de tipo: array</h2>";
}

if(is_integer($entera)){
    echo "<h2>La variable \$entera es de tipo: integer</h2>";
}

if(is_string($string)){
    echo "<h2>$string</h2>";
}

if(is_bool($booleana)){
    echo "<h2>La variable booleana es: $booleana</h2>";
}


/*MI FOR DE RESOLVERLO UTILIZANDO SWITCH Y LA FUNCION GETTYPE()

function tipo($tipoDato){
    return gettype($tipoDato);
}
$tipo = tipo($entera);

switch($tipo){
  case('integer'):
    echo "La variable \$entera es de tipo: $tipo";
    break;
  case('array'):
    echo "La variable \$array es de tipo: $tipo";
    break;
  case('boolean'):
    echo "La variable \$booleana es de tipo: $tipo";
    break;
  case('string'):      
    echo "La variable \$string es de tipo: $tipo";
    break;
}
  */  



