<?php

/* 
 * Para mostrar el valor de las cookies, tengo que usar $_COOKIE, una variable
 * superglobal es un array asociativo. Tanto en $_GET, $_POS y $_SESSION
 * todas ellas son array asociativo 
 */

if(isset($_COOKIE['micookie'])){
    echo "<h1>".$_COOKIE['micookie']."</h1>";
}else{
    echo "No existe la cookie";
}

if(isset($_COOKIE['oneyear'])){
    echo "<h1>".$_COOKIE['oneyear']."</h1>";
}else{
    echo "No existe la cookie";
}
?>

<a href="crear_cookies.php">Crear mis Galletas</a>
<a href="borrar_cookies.php">Borrar mis Galletas</a>