<?php
//La variable $_GET nos permite recoger la informacion que nos pasa un formulario y poder almacenarla en un array

//echo "<h1>".$_GET['nombre']."</h1>";
//echo "<h1>".$_GET['apellido']."</h1>";
//echo "<h1>".$_GET['web']."</h1>";
//echo "<h1>".$_GET['telefono']."</h1>";

//Al cambiar en el formulario el metodo GET por el de POST, no lleva a utiliza la variable &_POST
echo "<h1>".$_POST['nombre']."</h1>";
echo "<h1>".$_POST['apellido']."</h1>";
echo "<h1>".$_POST['web']."</h1>";
echo "<h1>".$_POST['telefono']."</h1>";

var_dump($_POST);

?>
