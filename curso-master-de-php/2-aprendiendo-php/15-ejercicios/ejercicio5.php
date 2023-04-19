<?php

/*Ejercicio 5;
 * Crear un array con el contenido de la siguiente tabla:
 * ACCIÓN   AVENTURA   DEPORTES
 *  GTA     ASSASSINS   FIFA 23
 *  COD      CRASH      PES 23
 *  PUGB    PRINCE OF   MOTO GP 23
 *          PERSIA
 * Hay que representar esta tabla en html cogiendo la informacion de los indices y de los valores dentro del array
 * Cada fila debe ir en un fichero separado (includes)
 */

$tabla = array (
    'ACCION'  => array('GTA','COD','PUGB'),
    'AVENTURA'  => array('ASSASSINS ','CRASH','PRINCE OF PERSIA'),
    'DEPORTES'  => array('FIFA 23','PES 23','MOTO GP 23')
);

//El array_keys me saca los indice del array que se le pase como parametro
$categorias = array_keys($tabla);

?>

<table border="1">
    <?php require_once 'ejercicio5/encabezados.php'; ?>
    <?php require_once 'ejercicio5/fila1.php'; ?>
    <?php require_once 'ejercicio5/fila2.php'; ?>
    <?php require_once 'ejercicio5/fila3.php'; ?>  
    
</table>