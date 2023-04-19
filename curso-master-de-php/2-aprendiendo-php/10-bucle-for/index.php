<?php

#BUCLE FOR
/*
for(variable contador, condicioón, incremento o decremento del contador){
    Bloque de instrucciones
}
*/

//$resultado = 0;
//for($i = 0; $i <= 100; $i++){
//    $resultado += $i;
//    echo "$resultado<br/>";
//}
//
//echo "<h1>El resultado es: $resultado<h1/>";


if(isset($_GET['numero'])){
    /*Cuando recibimos un valor por la url, el valor sera un string, en caso de que necesitemos que sea de otro tipo,
      lo que hacemos es un casteo colocando entre parentesis y delante de la variable que queremos convertio el tipo
      de datos que queremos que sea */
    $numero = (int)$_GET['numero'];
}else{
    $numero = 1;
}
//echo '<hr/>';
//var_dump($numero);

echo "<h1>Tabla de multiplicar del numero $numero<h1/>";
$resultado1 = 0;
for ($i = 0; $i <= 10; $i++){
    echo "$numero X $i = ".($numero*$i)."<br/>";
}

/*Dentro de los bucles hay una sentencia muy interesante, la cual es el "break", la cual permite salir o 
romper un bucle*/
echo "<h1>Tabla de multiplicar del numero $numero<h1/>";
$resultado1 = 0;
for ($i = 0; $i <= 10; $i++){
    if($numero==45){
        echo "No se pueden mostrar estas operaciones prohibidas";
    break;
    }
    echo "$numero X $i = ".($numero*$i)."<br/>";
}
?>
