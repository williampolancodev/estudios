<?php

/* 
 FUNCIONES
 * Una funcion es un conjunto de instrucciones agrupadas bajo un nombre en concreto y que pueden utilizarse
 * unicamente invocandola cuantas veces se quiera
 */
//definiendo una funcion
function nombreDeMiFuncion(/*Aqui van los parametros si la funcion recibe parametros*/){
    //Bloque de codigo
}

//invocando la funcion
nombreDeMiFuncion();

//Ejemplo 1
function nombre(){
    echo "Victor Marley<br/>";
    echo "Carla Marley<br/>";
    echo "Sebastian Marley<br/>";
    echo "Clara Marley<br/>";
}

nombre();

//Ejemplo 2
function tabla ($numero){
    echo "<h3>Tabla de multiplicar<h3/>";
    for($i = 0; Si <= 10; $i++){
        echo "$numero x $i = "."$numero*$i"."<hr/>";
    }
}

/* Con una funcion se puede ahorrar estar escribiendo mucho codigo que se repite, ya que solo bastara con invocar 
la funcion para ejecutar el codigo cuantas veces queramos*/

//Ejemplo 3
function calculadora($numero1, $numero2){
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multi = $numero1 * $numero2;
    $divi = $numero1 / $numero2;
    
    echo "$numero1 + $numero2 = $suma <br/>";
    echo "$numero1 - $numero2 = $resta <br/>";
    echo "$numero1 * $numero2 = $multi <br/>";
    echo "$numero1 / $numero2 = $divi <br/>";
}

calculadora(55, 33);

//parametros opcionales

//Ejemplo 3
/*un parametro opcional significa que ya posee un valor predeterminado, lo cual permite pasarle o no un valor a ese 
 * a ese parametro de la funcion cuando la invoquemos y no implacara algun error  */
function calculadora2($numero1, $numero2, $negrita = false){
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multi = $numero1 * $numero2;
    $divi = $numero1 / $numero2;
    
    //cuando se coloca una variable sola dentro de un if como condicion equivale a decir if($variable == true)
    if($negrita != false){
        echo "<h1>";
    }
    echo "$numero1 + $numero2 = $suma <br/>";
    echo "$numero1 - $numero2 = $resta <br/>";
    echo "$numero1 * $numero2 = $multi <br/>";
    echo "$numero1 / $numero2 = $divi <br/>";

    if($negrita != false){
        echo "</h1>";
    }
    
    }

calculadora2(55, 33);
calculadora2(55, 3, true);

//Ejemplo 4 - Utilizando return
function devuelveNombre($nombre){
    return "el nombre es: ".$nombre;
}

$persona1 = devuelveNombre("William")."<br/>";
echo $persona1;

echo devuelveNombre("William")."<br/>";

//utilizando concatenacion abreviada (.=)
function calculadora3($numero1, $numero2, $negrita = false){
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multi = $numero1 * $numero2;
    $divi = $numero1 / $numero2;
    $cadena_texto = "";
    //cuando se coloca una variable sola dentro de un if como condicion equivale a decir if($variable == true)
    if($negrita != false){
        $cadena_texto .= "<h1>";
    }
    $cadena_texto .= "$numero1 + $numero2 = $suma <br/>";
    $cadena_texto .= "$numero1 - $numero2 = $resta <br/>";
    $cadena_texto .= "$numero1 * $numero2 = $multi <br/>";
    $cadena_texto .= "$numero1 / $numero2 = $divi <br/>";

    if($negrita != false){
        $cadena_texto .= "</h1>";
    }
    return $cadena_texto;
}

echo calculadora3(5, 9, true);
    
// Ejemplo 5 - Invocando una funcion dentro de otras

/*Invocar funciones denrto de otras es util cuando la funcion va a ser muy grande, por lo tanto, permite dividir
lo que hace la funcion principal en funcionalidades más pequeñas y de esa manera es mucho más manejable.
 * Incluso esas pequeñas funciones que componen a la principal pueden ser utilizadas independientemente, en cualquier
 * otra parte del codigo */

function getNombre($nombre){
    $texto = "El nombre es $nombre<br/>";
    return $texto;
}
function getApellido($apellido){
    $texto = "El apellido es $apellido<br/>";
    return $texto;
}
function devuelveNombre1($nombre, $apellido){
    $texto = getNombre($nombre)
            ."<br/>".
            getApellido($apellido);
    return $texto;
}



echo devuelveNombre1("William", "Polanco");