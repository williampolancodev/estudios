<?php
/*Para mostrar el contenido de las variables que estás en otras sesiones, se
debe iniciar la sesión en cada página en la que se quiera mostrar */

session_start();

echo $variable_normal;
echo $_SESSION['variable_persistente'];

