<?php

#Operadores aritmeticos

$numero1 = 65;
$numero2 = 33;

//Las operaciones es recomendable colocarlas dentro de parentesis para que el lenguaje interprete que es una operación
echo 'Suma: '.($numero1+$numero2).'<br/>';
echo 'Resta: '.($numero1-$numero2).'<br/>';
echo 'Multiplicación : '.($numero1*$numero2).'<br/>';
echo 'División: '.($numero1/$numero2).'<br/>';
echo 'Resto: '.($numero1%$numero2).'<br/>';

#Operadores de incremento y decremento

$year = 2023;
echo '<h1>'.$year.'</h1>';

// Incremento equivale a decir year = year + 1
$year++;
echo '<h1> Incremento: '.$year.'</h1>';

// Decremento equivale a decir year = year -1
$year--;
echo '<h1> Decremento: '.$year.'</h1>';

// Pre-incremento equivale a decir year = 1 + year
++$year;
echo '<h1> Pre-incremento: '.$year.'</h1>';

// Pre-decremento equivale a decir year = 1 - year
--$year;
echo '<h1> Pre-decremento: '.$year.'</h1>';

# Operadores de asignación

$edad = 55;

echo $edad.'<br/>';
echo ($edad+=5).'<br/>';
echo ($edad-=5).'<br/>';
echo ($edad*=5).'<br/>';
echo ($edad/=5).'<br/>';
echo ($edad%=5).'<br/>';
?>
