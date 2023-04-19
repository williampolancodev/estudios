<?php
/*
/*para abrir un archivo se utiliza la funcion (fopen) y se le pasa como parametros
 * el nombre del archivo que se abrira, y el tipo de permiso con el que se abrira
//Los tipos de permisos son: 
//"r"= read(lectura) 
//"x"=executive(ejecución)
//"w"= write(escritura)
//"a+"= read & write(Permite leer y escribir)

$archivo = fopen("fichero_texto.txt", "a+");

#Leer contenido
/*La función feof nos devuelve true cuando hemos llegado al final de archivo y 
false si no lo hemos alcanzado todavía.*
while(!feof($archivo)){
    $contenido = fgets($archivo);
    echo $contenido."<br/>";
}

#Escribir
fwrite($archivo, "Soy un texto metido desde php");

#Cerrar archivo
fclose($archivo);
*/

#Copiar: Con la funcio copy le pasamos el archivo que queremos copiar, seguido del
//        nombre que tendra la copia y le podermo agregar un die en caso de que falle
//        la copia muestre un mensaje
//copy('fichero_texto.txt', 'fichero_copiado.txt') or die("error al copiar");

#Renombrar
//rename('fichero_copiado.txt', 'archivito_recopiadito.txt');

#Eliminar
//unlink('archivito_recopiadito.txt')or die("error al borrar");

#Verificar la existencia de un archivo
if(file_exists("fichero.txt")){
    echo "el archivo existe";
}else{
    echo "No existe";
}
