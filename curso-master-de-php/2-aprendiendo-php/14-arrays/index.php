<?php

/* ARRAYS:
     Un array es una coleccion o conjunto de datos/valores, bajo un unico nombre y para acceder a esos valores
     podemos utilizar un indice numero o alfanumerico.
 */

$peliculas = array('Batmas', 'Spiderman', 'El Señor de los anillos');

$cantantes = ['2pac', 'drake', 'Jenifer Lopez'];
var_dump($peliculas[2]);
var_dump($cantantes);

echo $peliculas[0];
echo "<br/>";
echo $cantantes[2];

//Recorrer un array
echo "<h1>Lista de Peliculas</h1>";

echo "<ul>";

for($i = 0; $i < count($peliculas); $i++){ //la funcion count() saca el tamaño que tiene un array
    echo "<li>".$peliculas[$i]."</li>";
}
echo count($peliculas);
echo "</ul>";

//Recorrer con Foreach
echo "<h1>Lista de Cantantes</h1>";

echo "<ul>";
foreach($cantantes as $cantante){
    echo "<li>$cantante</li>";
}
echo "</ul>";

//Arrays asociativos: asocian un nombre a un indice de un array
$personas = array (
    'nombre' => 'William',
    'apellido' => 'Polanco',
    'web' => 'williampolancoweb.es'
);

//Los valores que se pasan por el metodo get y pos son arrays asociativos

//ARRAYS MULTIDIMENCIONALES
$contactos = [
        array (
            'nombre' => 'Antonio',
            'emaol' => 'antonio@gmail.com'
        ),
        array (
            'nombre' => 'Luis',
            'emaol' => 'Luis@gmail.com'
        ),
        array (
            'nombre' => 'Rafael',
            'emaol' => 'rafael@gmail.com'
        )        
];

var_dump($contactos);
echo $contactos[2]['emaol'];

foreach($contactos as $key => $contacto){
    var_dump($contacto);
}
?>

