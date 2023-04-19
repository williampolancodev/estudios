<?php

#Variables 
 /*
  * Las variables super globales son variables que estan disponibles para
  * el codigo o a lo largo del script
  */
  //Variables del servidor
    //Son variables super globales que nos permiten sacar informacion del servidor    
echo '<H1>'.$_SERVER['SERVER_ADDR'].'</H1>';

    //Muestra el nombre del domino que estoy utilizando
echo '<H1>'.$_SERVER['SERVER_NAME'].'</H1>';
    //Muestra la herramienta o software que estoy utilizando en el servidor
echo '<H1>'.$_SERVER['SERVER_SOFTWARE'].'</H1>';
    //Muestra informacion del lado del cliente, en este caso desde el navegador que accede
echo '<H1>'.$_SERVER['HTTP_USER_AGENT'].'</H1>';
    //Muestra la ip del cliente que esta accediendo a nuestra página
echo '<H1>'.$_SERVER['REMOTE_ADDR'].'</H1>';


?>
