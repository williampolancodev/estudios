<?php

/*
 #CONDICIONALES
  if(condicion){
     instrucciones
  }else{
     instrucciones
  }

  // OPERADORES DE COMPARACIÓN
   == igual 
   === identico
   !=  diferente
   <>  diferente
   !== no identico
   <   menor que
   >   mayor que
   <=  menor o igual que
   >=  mayor o igual que
 
  //Operadores logicos
  && AND Y
  || OR  o
  !  NOT no
  AND OR
    
 */

//Ejemplo 1
$color = 'verde';

if($color=='rojo'){
    echo 'El color es ROJO'.'<br/>';
}else{
    echo 'El color no es ROJO'.'<br/>';
}

//Ejemplo 2
$year = 2009;

if($year<2019){
    echo 'Estamos en un año anterior al 2019'.'<br/>';
}else{
    echo 'Estamos en un año porstior al 2019'.'<br/>';
}

//Ejemplo 3
$color = 'verde';

if($color!='rojo'){
    echo 'El color no es ROJO'.'<br/>';
}else{
    echo 'El color es ROJO'.'<br/>';
}

//Ejemplo 4

$nombre = 'David Extremadura';
$edad = 20;
$ciudad = 'Madrid';
$continente = "Europa";
$mayoria_edad = 18;

if($edad>=$mayoria_edad){
    echo '<h1>'.$nombre.' es mayor de edad'.'</h1>';
    if($continente == 'Europa'){
        echo '<h2>'.'Y es de '.$ciudad.'</h2>';
    }else{
        echo '<h2>'.'No es europeo'.'</h2>';
    }
}else{
    echo '<h3>'.$nombre.' es menor de edad'.'</h3>';
}

//Ejemplo 5 - IF ANIDADOS   
$dia = 3;

if($dia == 1){
    echo '<h1>'.'Es Lunes'.'</h1>';
}else{
    if($dia == 2){
        echo '<h1>'.'Es Martes'.'</h1>';
    }else{
        if($dia == 3){
            echo '<h1>'.'Es Miercoles'.'</h1>';
        }else{
            if($dia == 4){
                echo '<h1>'.'Es Jueves'.'</h1>';
            }else{
                if($dia == 5){
                    echo '<h1>'.'Es Martes'.'</h1>';
                }else{
    echo '<h1>'.'Es Fin de semana'.'</h1>';
                }
            }
        }    
    }
}    


#Else-if

if($dia == 1){
   echo 'Es Lunes';
}elseif($dia == 2){
   echo 'Es Martes';
}elseif($dia == 3){
   echo 'Es Miercoles';
}elseif($dia == 4){
   echo 'Es jueves';
}elseif($dia == 5){
   echo 'Es Viernes';
}else{
   echo 'Es fin de semana';
}

//Ejemplo 5 - Operadores logicos
$edad1 = 18;
$edad2 = 64;
$edad_oficial = 20;

if($edad_oficial>=18 && $edad_oficial<=64){
    echo 'Esta en edad de trabajar';
}else{
    echo'No esta en edad de trabajar';
}


$pais = 'Mexico';
if($pais == 'Mexico' || $pais == 'España' || $pais == 'Venezuela'){
    echo 'En este país se habla español';
}else{
    echo 'En este país no se habla español';
}

#SWITCH
$dia = 4;

switch($dia){
    case 1:
        echo 'Lunes';
        break;
    case 2:
        echo 'Martes';
        break;
    case 1:
        echo 'Lunes';
        break;
    case 1:
        echo 'Lunes';
        break;
    case 1:
        echo 'Lunes';
        break;   
}

/*
 * GOTO - es una sentencia que permite saltar a un punto especifico del codigo, es decir, se salta lo que se 
 * encuentra entre el goto y la marca. La marca puede tener cualquier nombre que le queramos dar
 */

goto marca;
echo "<h3>Instruccion 1</h3><br>";
echo "<h3>Instruccion 2</h3><br>";
echo "<h3>Instruccion 3</h3><br>";
echo "<h3>Instruccion 4</h3><br>";

marca: echo "<h3>ME he saltado 4 echos</h3>";
?>
