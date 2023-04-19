<?php

#BUCLE WHILE
    /* 
    while(condicion){
        Bloque de instrucción
    }
    */
$numero = 0;
while($numero<=100){
    echo "$numero";
    
    if($numero!=100){
        echo ", ";
    }
    $numero++;
}

#Ejemplo
  // la funcion isset comprueba si existe una variabe o no, o un  dato o no
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
$contador = 0;
while($contador<=10){
    echo "$numero X $contador = ".($numero*$contador)."<br/>";
    $contador++;
}

# DO WHILE
/*
    do{
        Bloque de instrucción
    }while(condicion);
*/

$edad =18;
$contador = 1;

do{
    echo "Tienes acceso al local privado $contador".'<br/>';
    $contador++;
}while($edad>=18 && $contador<=10);

?>
