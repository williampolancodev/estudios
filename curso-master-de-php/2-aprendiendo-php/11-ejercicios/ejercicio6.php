<?php

/*
 * Ejercicio 6: Mostrar una tabla de HTML con las tablas de multiplicar
 *  */
echo "<table border='1'><tr>"; //inicio de tabla
    
    echo "<tr>"; //inicio de la primera fila
    
        for($cabecera = 1; $cabecera <= 10; $cabecera++){
            echo "<th>Tabla del $cabecera</th>";
        }
    
    echo "<tr>"; //fin de la `primera fila
    
    echo "<tr>"; //inicio de la segunda fila
    for($i = 1; $i <= 10; $i++){
        echo '<td>';    
            for($x = 1; $x <= 10; $x++){
                echo "$i x $x = ".($i*$x).'<br/>';
            }
        echo '</td>';    
        }
    echo "</tr>";// fin de la segunda fila
echo "</table>"; // fin de la tabla
/* Otra forma    
    for($j = 1; $j <= 10; $j++){
            echo "<tr>";
            for($i = 1; $i <= 10; $i++){
                echo "<td>$i x $j = ".($i*$j)."</td>";
            }
            echo "</tr>";
        }
    
echo "</table>"; // fin de la tabla
*/
?>



<?php 
#dividiendo la tabla
/*
 * Ejercicio 6: Mostrar una tabla de HTML con las tablas de multiplicar
 *  *//*
echo "<table border='1'><tr>"; //inicio de tabla
    
    echo "<tr>"; //inicio de la primera fila
    
        for($cabecera = 1; $cabecera <= 5; $cabecera++){
            echo "<th>Tabla del $cabecera</th>";
        }
    
    echo "<tr>"; //fin de la `primera fila
    
    for($j = 1; $j <= 10; $j++){
            echo "<tr>";// inicio de la segunda fila
            for($i = 1; $i <= 5; $i++){
                echo "<td>$i x $j = ".($i*$j)."</td>";
            }
            echo "</tr>";// fin de la segunda fila
    }
    echo "<tr></tr>";
    echo "<tr></tr>";
    echo "<tr>"; //inicio de la tercera fila
    
        for($cabecera = 6; $cabecera <= 10; $cabecera++){
            echo "<th>Tabla del $cabecera</th>";
        }
    
    echo "<tr>"; //fin de la tercera fila
    
    for($j = 1; $j <= 10; $j++){
            echo "<tr>"; //inicio de la cuarta fila
            for($i = 6; $i <= 10; $i++){
                echo "<td>$i x $j = ".($i*$j)."</td>";
            }
            echo "</tr>"; // fin de la cuarta fila
    }
    
echo "</table>"; // fin de la tabla

*/?>










<!--
<table border="1">
    <tr>
        <th>Tabla del 1</th>
        <th>Tabla del 2</th>
        <th>Tabla del 3</th>
        <th>Tabla del 4</th>
        <th>Tabla del 5</th>
    </tr>
    <tr>
        <td>
            //<?php
//            $tabla1 = 1;
//            for($i = 1; $i <= 10; $i++){
//                echo "$tabla1 x $i = ".($tabla1*$i)."<br/>";
//            }
//            ?>*/
        </td>
        
        <td>
            //<?php
//            $tabla1 = 2;
//            for($i = 1; $i <= 10; $i++){
//                echo "$tabla1 x $i = ".($tabla1*$i)."<br/>";
//            }
//            ?>
        </td>
        
        <td>
            //<?php
//            $tabla1 = 3;
//            for($i = 1; $i <= 10; $i++){
//                echo "$tabla1 x $i = ".($tabla1*$i)."<br/>";
//            }
//            ?>
        </td>
        <td>
            //<?php
//            $tabla1 = 4;
//            for($i = 1; $i <= 10; $i++){
//                echo "$tabla1 x $i = ".($tabla1*$i)."<br/>";
//            }
//            ?>
        </td>
        <td>
            //<?php
//            $tabla1 = 5;
//            for($i = 1; $i <= 10; $i++){
//                echo "$tabla1 x $i = ".($tabla1*$i)."<br/>";
//            }
//            ?></td>
    </tr>
    <tr></tr>
    <tr>
        <th>Tabla del 6</th>
        <th>Tabla del 7</th>
        <th>Tabla del 8</th>
        <th>Tabla del 9</th>
        <th>Tabla del 10</th>
    </tr>
    <tr>
        <td>
            //<?php
//            $tabla1 = 6;
//            for($i = 1; $i <= 10; $i++){
//                echo "$tabla1 x $i = ".($tabla1*$i)."<br/>";
//            }
//            ?>
        </td>
        <td>
            //<?php
//            $tabla1 = 7;
//            for($i = 1; $i <= 10; $i++){
//                echo "$tabla1 x $i = ".($tabla1*$i)."<br/>";
//            }
//            ?>
        </td>
        <td>
            //<?php
//            $tabla1 = 8;
//            for($i = 1; $i <= 10; $i++){
//                echo "$tabla1 x $i = ".($tabla1*$i)."<br/>";
//            }
//            ?>
        </td>
        <td>
            //<?php
//            $tabla1 = 9;
//            for($i = 1; $i <= 10; $i++){
//                echo "$tabla1 x $i = ".($tabla1*$i)."<br/>";
//            }
//            ?>
        </td>
        <td>
            //<?php
//            $tabla1 = 10;
//            for($i = 1; $i <= 10; $i++){
//                echo "$tabla1 x $i = ".($tabla1*$i)."<br/>";
//            }
//            ?>
        </td>
    </tr>
</table>-->