<?php

/*Cookie: Es un fichero que se almacena en el ordenador del usuario que visita
 * la web, con el fin de recordar datos o rastrear el comportamiento del mismo
 * en la web.
 * 
 * Nota1: las cookies guardan información datos del usuario, la cual se rastrea.
 * Las cookies son una de las cosas más vulnerables que puede tener una web, ya
 * que ademas de almacenarse en el servidor, tambien se almacenan del lado del 
 * cliente, en unos ficheros de cache y en archivos temporales de las cookies.
 * 
 * Con las cookies se puede rastrear cuando un usuario vuelve a la web.
 * son utiles para almacenar cierta informacion temporal del usuario. 
 * 
 * Como las cookies se almacenan en pequeños ficheros en el equipo del usuario, lo que
 * signigica que pueden ser manipuladas por ellos.
 * 
 * Las cookies se pasan al sevidor cada vez que se cargue la pagina y el servidor,
 * verifica si existe alguna referencia de la cookie dentro del servidor.
 * 
 * En termios de ventaja, es mucho mejor utilizar sesiones en vez de cookies.
 * Sin embargo, si se requiere rastrear algunos datos, preferencias y demás del 
 * usuario, las cookies serviran mejor para eso.
 * 
 */

//Crear cookies
//setcookie("nombre", "Valoer que solo puede ser texto", caducidad, ruta, dominio);

//Cookie basica
setcookie("micookie", "valor de mi galleta");

//Cookier con expiración
setcookie("oneyear", "valor de mi cookie de 365 dias", time()+(60*60*24*365));

header('Location:ver_cookies.php');
?>