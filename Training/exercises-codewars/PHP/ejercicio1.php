<?php
/*Ejercicio 1:
 * Timmy & Sarah think they are in love, but around where they live, they will 
 * only know once they pick a flower each. If one of the flowers has an even 
 * number of petals and the other has an odd number of petals it means they are
 * in love.

Write a function that will take the number of petals of each flower and return 
 * true if they are in love and false if they aren't.*/

function lovefunc($flower1, $flower2) {
    // moment of truth
  $assertTrue1 = (($flower1 % 2) == 0) && (($flower2 % 2) == 1);
  $assertTrue2 = (($flower1 % 2) == 1) && (($flower2 % 2) == 0) ;
  
  $result = null;
  
  if($assertTrue1 || $assertTrue2){
    $result = true;
  }else{
    $result = false;
  }
  return $result;
}

echo lovefunc(1, 2)."<br/>";
echo lovefunc(1, 1)."<br/>";
echo lovefunc(2, 1)."<br/>";
echo lovefunc(2, 2)."<br/>";

