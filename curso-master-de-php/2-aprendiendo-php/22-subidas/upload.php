<?php

/*Para recibir el archivo utilizaremos el array $_FILES[] y entre los corchetes
le pasaremos el nombre con el que sera enviado por el metodo POST*/
$archivo = $_FILES['archivo'];
$nombre = $archivo['name'];
$tipo = $archivo['type'];

if($tipo == "image/jpg" || $tipo == "image/jpeg" || $tipo == "image/png" || $tipo == "image/gif"){
    
    if(!is_dir('images')){
        mkdir('images', 0777);
        
    }
    /*Esta funcion permite tomar un archivo subido y moverlo a otra carpeta y nombrarlo
    En este caso le pasamos un array y para pasarle la ubicacion temporal de donde
    esta el archivo debemos coloar tmp_name*/
    move_uploaded_file($archivo['tmp_name'], 'images/'.$nombre);
    
    header("Refresh: 5; URL=index.php");
    echo "<h1>imagen subida correctamente</h1>";
    
    
}else{
    header("Refresh: 5; URL=index.php");
    echo "<h1>Sube una imagen con un formato correcto, por favor...</h1>";
}

/*En las configuraciones de PHP en el wamp hay que cambiar el tamaño maximo
que puede recibir, el tamaño maximo de informacion que se puede pasar por POST y
el datatime paa que el horario de los archivos sea correcto*/
