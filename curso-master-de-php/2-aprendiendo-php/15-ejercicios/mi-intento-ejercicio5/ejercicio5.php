<?php
require'tabla/fila1.php';
require'tabla/fila2.php';
require'tabla/fila3.php';

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
function mostrarFila($tipo){
    echo "<tr>";
        foreach ($tipo as $juego){
            echo"<td>$juego</td>";            
        }
    echo "</tr>";
}

echo "<table border='1'>";
    echo "<tr>";
        echo "<th>Acción</th>";
        echo "<th>Aventura</th>";
        echo "<th>Deportes</th>";
    echo "</tr>";

    mostrarFila($fila1);
    
    mostrarFila($fila2);
  
    mostrarFila($fila3);
          
    echo "</table>";
?>
