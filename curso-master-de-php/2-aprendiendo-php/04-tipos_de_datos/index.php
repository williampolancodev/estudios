<?php

/*
 * TIPOS DE DATOS:
 * - Entero (int / Integer) = 99
 * - Coma Flotante / decimales (float / double) = 3.45
 * - Cadenas de caracter (string) = "Hola yo soy un string"
 * - Booleano (bool) = true(1) / false (0)
 * - null (no lleva ningun contenido adentro)
 * - Array (Colección de datos)
 * - Objetos (un conjunto de datos con funciones independientes)
 */

//Nota1: el lenguaje reconoce el tipo de dato que tiene una variable, debido al valor que tiene la variable
//Nota2: Para obtener el tipo de dato que tiene una variable se utiliza la función gettype()
/*
 *Nota3: Los valores decimales utilizan el punto (.), ya que la coma (,) esta reservada para separar los
 * parametros de las funciones en el lenguaje. 
 */
//Nota4: el nombre de las variables no pueden iniciar con numeros
//Nota5: los nombres de las variables no pueden contener operadores, guiones, simbolos especiales o caracteres latinos.

$numero = 150;
echo gettype($numero).'<br/>';
$decimal = 3.50;
echo gettype($decimal).'<br/>';
$texto = 'Soy un texto';
echo gettype($texto).'<br/>';
$verdadero = true;
echo gettype($verdadero).'<br/>';
$nula = null;
echo gettype($nula).'<br/>';

#debuggear
$mi_nombre = 'William Polanco';
var_dump($mi_nombre);

$mi_nombre2[] = 'William Polanco';
$mi_nombre2[] = 'William Polanco';
var_dump($mi_nombre2);

//Nota6: la funcion var_dump nos permite debuggear es una parte de nuestro codigo y mostrarlo en pantalla
//Nota7: Tambien se puede debuggear utilizando las herramientas para desarrolladores que trae el navegador

#Curiosidades de las comillas dobles
// Las comillas dobles permiten imprimir el contenido de una variable sin necesidad de concatenar. Por ejemplo
$mi_numero= 1519;
echo "Este es mi numero $mi_numero".'<br/>';

/*
 * Sin embargo, en terminos de velocidad para el proceso del servidor, las comillas dobles son más lentas de procesar
 * que las comillas simples. En el caso de las comillas simples si es necesario concatenar, ya que todo lo que
 * se encuentra entre las comillas simples lo considerar texto. Por ejemplo:
 */

echo 'Este es mi numero $mi_numero'.'<br/>';
echo 'Es es mi numero '.$mi_numero.'<br/>';

/*
 * Nota8: Los saltos de lineas utilizando \n, el retorno utilizando \r o la tabulacion utilizando \t solo son leidos
 * cuando el archivo se ejecuta en la consola, ya que el navegador no interpreta esos comandos y los ignora.
 * 
 * Sin embargo si queremos que las comillas dobles o simples salgan en un texto deberos anteponerle una barra diagonal
 * havia atras \" o \'
 */

echo 'Este es \'"mi numero\' '.'<br/>'."Este es mi \"correo\"";

//Si el echo tiene un texto con comillas dobles, el texto puede incluir comillas simples sin ningun problema y viceversa
?>

