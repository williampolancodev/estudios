<?php

if(!is_dir('mi_carpeta')){
    #Crear directorio con mkdir, se le pasan el nombre y los permisos.
    //Los permisos 0777 significan todos los permisos
    mkdir('mi_carpeta', 0777) or die('No se puede crear la carpeta');
}else{
    echo "Ya existe la carpeta";
}

#Borrar carpeta
//Utilizando rmdir, le pasaremos el nombre de la carpeta que queremos borrar

//rmdir('mi_carpeta');

echo "<hr/>"."<h1>Contenido carpeta</h1>";

if($gestor = opendir('./mi_carpeta')){
    /*Con el readdir se puede leer los archivos que hay dentro del directorio,
    devuelve false una vez que ya no queden más archivos por leer en el directorio*/
    
    while(false !== ($archivo = readdir($gestor))){
        if($archivo != '.' && $archivo != '..'){
        echo $archivo."<br/>";
       }
       /*Nota: En un directorio, además de los archivos se encuentran las rutas
               relativas que serian el punto (.) que indica el directoria actual
               y los dos puntos seguidos que indica el directorio padre, el cual,
               se utiliza para subir en la jerarquía*/
    }
}