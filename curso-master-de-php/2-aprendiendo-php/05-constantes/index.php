<?php

#CONSTANTES
    //Es un contenedo de informacion o dato que no puede variar
    //Nota1: Las constantes se definen con la funcion define. Como se hace a continuación
define('nombre', 'William Polanco');
define('web', 'WiPolanco.com');

    //Nota2: Las constantes se imprimen solo colocando su nombre, sin el signo $ como se hace con las variables.
echo nombre;
echo '<h1>'.nombre.'</h1>';
echo '<h1>'.web.'</h1>';

#Constantes predefinidas
    //Son constantes que ya estan predefinidas en el lenguaje, de las cuales podemos hacer uso

    //La constante PHP_OS me dice el sistema operativo que estoy utilizando
echo PHP_OS.'<br/>';
    //La constante PHP_VERSION me dice las version de PHP que utilizo
echo PHP_VERSION.'<br/>';
    //
echo PHP_EXTENSION_DIR.'<br/>';
    //La constante __LINE__ me dice la line en la que está
echo __LINE__.'<br/>';
    //La constante __FILE__ me dice la ruta completa del archivo
echo __FILE__.'<br/>';

Function holaMundo(){
    // la constante __FUNCTION__ me dice dentro de que funcion está.
    echo __FUNCTION__.'<br/>';
}

holaMundo();

    //Hay muchas constantes unas inician con doble guio bajo (__) y otras con PHP
?>
