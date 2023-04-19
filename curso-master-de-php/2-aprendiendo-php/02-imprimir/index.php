<!DOCTYPE HTML>
<html lang="es">
    <head>
        <!<!--meta charset para colocar la codificación de caracteres -->
        <meta charset="utf-8"/>
        <title>Imprimir por pantalla - Master en PHP </title>
    </head>
    
        <h1>Master en PHP - <?php echo 'William Polanco'; ?></h1>
        
        <?="PHP"?>
        <?php
            echo '<h3>Lista de juegos:</h3>';
            echo '<ul>'
                . '<li>GTA: Vive Vity</li>'
                . '<li>Resident Evil 4</li>'
                . '<li>Dragon Ball Z: budokai Tenkaichi</li>'
                . '</ul>';
            echo 'Esta es' . ' - ' . 'mi lista';

            //Para concatenar Strings (cadenas de texto, se utiliza el punto (.)
            /*Nota1: Cuando concatenamos espacios hay que tener en cuenta que aunque coloquemos varios
             * espacios entre comillas, php solo interpretara que solo hay un espacio */
            /*Nota2: Una cosa a resaltar es que las etiquetas de php se pueden colocar reiteradas veces 
             * a lo largo del html sin ningun limite
             */
            /*Nota3: hay una forma abreviada de utilizar el echo para imprimir en pantalla y es utilizando 
             * la siguiente abreviatura: <?=''?> y colocando lo que vas a imprimir entre comillas
             */
            /*Nota4: Para hacer comentarios de una linea en php puede utilizar doble barra diagonal hacia adelante 
             * (//) o hashtag (#). Y para hacer comentarios multilinea utilizas barra diacunal (/) asterisco (*)
             * para abrir y asterisco (*) y barra diagonal para cerrar (/)
             */ 
        ?>

    
</html>

