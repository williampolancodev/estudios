<?php

/*¿Que es una sesión?
 *  Una sesion es un periodo de tiempo durante el cual el usuario ve un número 
 * de páginas determinada en el dominio que esta navegando, sin necesidad de 
 * identificarse cada vez que recargue la página. Es decir, que la información 
 * se mantiene y persiste durante la navegacion web. Las sesiones deben soportar
 * dos cosas:
 * - 1. Detectar que durante el transcurso de la navegacion por varias páginas 
 * web dentro del sitioo web, la sesion se mantenga invariable hasta que el 
 * usuario cierre la sesión o cierre el navegador
 * - 2.Debe almacenar informacion que pertenecerá a una sesión en concreto. PHP 
 * trabaja con un conjunto de metodos, que son capaz de ocultar variables y 
 * cookies.
 *
 * Una sesión lo que hace es almacenar y persistir datos del usuario, mientras 
 * que se navega por un sitio web, hasta que cierra sesión o cierra el navegador.
 * 
 * Nota1: Algunas de las ventajas que tienen las sesiones es que pueden almacenar
 * grandes cantidades de datos muy facilmente, y que las sesiones y los datos 
 * se almacenan en el servidor web. Por lo tanto, es bastante seguro, ya que
 * son invisibles para los demás.
 * 
 */

# Inicia sesión
  // Utilizando la función session_start() iciamos la sesion y damos la 
  // posibilidad de crear sesiones
session_start();

//Variable local
$variable_normal = "Soy una cadena de texto";



//Variable de sesión
$_SESSION['variable_persistente'] = "HOLA SOY UNA SESIÓN ACTIVA";

/* Nota2: Una sesion es una variable superglobal, la cual tambien es un array, donde el indice 
 * seria el nombre de la sesion o variable de sesion que queremos crear*/

echo $variable_normal."<br/>";
echo $_SESSION['variable_persistente'];






