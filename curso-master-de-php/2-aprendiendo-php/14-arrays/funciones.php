<?php

$cantantes = ['2pac', 'drake', 'Jenifer Lopez', 'Alfredo'];
$numero = [1, 2, 8, 4, 8, 5];
// ordena alfabeticamente

asort($cantantes);
var_dump($cantantes);
// ordena alfabeticamente peor a la inversa
arsort($numero);
var_dump($numero);

//ordena numericamente del menor al mayor, y tambien alfabeticamente. 
//Esto tambien permite mantener el orden de los indices del array
sort($numero);
var_dump($numero);

//Añadir elementos a un array
$cantantes[] = "natos";
$cantantes[] = "natos";
$cantantes[] = "natos";
$cantantes[] = "natos";
var_dump($cantantes);

//Otra forma de añadir elementos
array_push($cantantes, "waor");
var_dump($cantantes);

//elimina el ultimo elemento del array
array_pop($cantantes);
var_dump($cantantes);

//Elimina un elemento especifico del array
unset($cantantes[2]);
var_dump($cantantes);

//Aleatorio
$indice = array_rand($cantantes);
echo $cantantes[$indice];

//Dar vuelta
var_dump(array_reverse($numero));

// Buscar dentro de un array
$resultado = array_search('drake', $cantantes);
var_dump($resultado);

//Contar numero de elementos de un array
echo count($cantantes);
echo sizeof($cantantes);

?>