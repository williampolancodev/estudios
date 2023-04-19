<?php

/* 
 * VARIABLES GLOBALES
 *   Las variables globaes son aquellas que se definen afuera de una funcion y pueden ser utilizadas, tanto afuera como
 * adentro de la funcion
 * 
 * VARIABLES LOCALES
 *   Las variables locales son aquellas que se definen dentro de una funcion y solo pueden ser utilizadas dentro de la
 * funcion en la que fueron creadas. Por lo tanto, no pueden ser utilizadas fuera de la funcion a no ser que la devolvamos
 * en un return
 */

//VARIABLE GLOBAL

$frase = "Ni los genios son tan genios, ni los mediocres son tan mediocres";

echo $frase;

/* para poder utilizar una variable global dentro de una funcion hay que utilizar la instruccion (global) seguido
de la variable que queremos indicar que es global */
function holaMundo(){
    global $frase;
    
    echo "<h1>$frase</h1>";
    
    $year = 2019;
    echo "<h1>$year</h1>";

    return $year;
}

echo holaMundo();

holaMundo();


//Funciones variables
/* Se utiliza una variable para almacenar el nombre de las funciones, dicha variable al imprimirla se le colocan 
 los parentesis al final del nombre y asi en vez de imprimir el nombre de la funcion lo que imprime es lo que 
 * devuelve la funcion.*/

function buenosDias(){
    return "<h1>Hola! Buenos dias<h1/>";
}
function buenosTardes(){
    return "<h1>¿Que tal ha estado la comida?<h1/>";
}
function buenosNoches(){
    return "<h1>¿Te vas a dormir ya?<h1/>";
}

$horario = Noches;
//echo $horario();

$mi_funcion = "buenos".$horario;
echo $mi_funcion();
?>