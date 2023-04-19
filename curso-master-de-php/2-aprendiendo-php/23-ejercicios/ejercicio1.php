<?php

/*Ejercicio: Crear una sesion que aumente su valor en uno o disminuya en uno en 
 * función de si el parametro get counter esta a uno o a cero
 */

session_start();

if(!isset($_SESSION['numero'])){
    $_SESSION['numero'] = 0;
}

$counter = $_GET['counter'];

if(isset($counter) && $counter == 1){
    $_SESSION['numero']++;
}else if(isset($counter) && $counter == 0){
    $_SESSION['numero']--;
}else{
    echo "Ingreso un valor correcto (1 o 0)<br/>";
}

?>
<h1>El valor de la sesión es: <?=$_SESSION['numero']?></h1>
<a href="ejercicio1.php?counter=1">Aumentar el valor en 1</a><br/>
<a href="ejercicio1.php?counter=0">Disminuir el valor en 1</a><br/>
