<?php

/* 
 * FUNCIONES PREDEFINIDAS
 */

#Funciones predefinidas
    //Debuggear
$nombre = "William Polanco";
var_dump($nombre);

    //Fecha: dependiendo del parametro que se le pase a la funcion date, mostrará de formas diferentes la fecha
echo date('d-m-Y');
echo "<br/>";
echo time(); //Esto saca el timestamp, sacando la fecha en formato unix

    // Matematicas
echo "<br/>";
echo "Rais cuadrada de 10: ".sqrt(10);

echo "<br/>";
echo "Número aleatorio entre 10 y 40: ".rand(10, 50);

echo "<br/>";
echo "Número pi: ".pi();

echo "<br/>";
echo "Rendondear: ".round(7.898234, 2);

//Más funciones generales

    //obtiene el tipo de dato de la variable
echo "<br/>";
echo gettype($nombre);

    //comprobacion del tipo de dato
echo "<br/>";
if(is_string($nombre)){
    echo "Esa variable es un string";
}

echo "<br/>";
if(!is_float($nombre)){
    echo "La variable nombre no es un número decimal";
}

    //Comprobar si una variable existe
echo "<br/>";
if(isset($edad)){
    echo "La variable existe";    
}else{
    echo "La variable no existe";
}
    //funcion trim: se utiliza para limpiar una variable de espacios
echo "<br/>";
$frase = "     mi contenido      ";
var_dump($frase);
var_dump(trim($frase));

    //Eliminar variables / indices
echo "<br/>";
$year = 2023;
echo $year;
unset($year);
var_dump($year);

    //La funcion empty verifica si una variable está vacia, no existe o su valor es cero
echo "<br/>";
$texto = "";
if(empty($texto)){
    echo "La variable texto esta vacia";
}else{
    echo "La variable tiene contenido";
}

    //Contar caracteres de un string
echo "<br/>";
$cadena = "123456";
echo strlen($cadena);

echo "<br/>";
    //Encontra caracter o una palabra en una variable
$frase = "La vida es bella";
echo strpos($frase, "vida");

echo "<br/>";
    //Reemplazar palabras de un string
$frase = str_replace("vida", "moto", $frase);
echo $frase;
echo "<br/>";

    //Mayúsculas y minúsculas
echo strtolower($frase);
echo "<br/>";
echo strtoupper($frase);
?>