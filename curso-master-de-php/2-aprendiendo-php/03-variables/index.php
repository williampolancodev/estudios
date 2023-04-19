<?php
// Una variable es un contenedo de información. puede guardar cualquier dato dentro de ella

$mi_primera_variable = 'Hola mundo desde una variable';
$numero = 44;
$verdadero = true;
$numero = 77;

echo $mi_primera_variable;
echo '<h1>'.$mi_primera_variable.' concatenada con codigo HTML '.'</h1>';
echo $numero.'<br/>';
echo $verdadero. '<br/>';

$numero = 120;

echo $numero;

/* Nota1: PHP es un lenguaje debilmente tipado, por lo tanto para declarar una variable se utilizará el signo
 * de dolar ($) seguido del nombre de la variable y se le asigna el valor con el igual (=)
 */
/* Nota2: cuando imprimimos las variables de php con la funcion echo, podemos concatetar codigo html,
 *  texto y otras variables 
 */
?>
