<?php
function times($i){
  $result = $i*2;
  return $result;}
  echo times(3);

function sum($a , $b){
  $result = $a + $b;
  return $result;
}
echo sum(3 , 4);

$arr = array(1,3,5,7,9);
 function m($arr){
   $result = 1;
   foreach ($arr as $number) {
     $result *= $number;
   }
   return $result;
 }
 echo m($arr);

 function max_array($arr){
   $max_number = $arr[0];
   foreach ($arr as $a) {
     if($max_number < $a){
       $max_number = $a;
     }
   }
   return $max_number;
 }
 echo max_array($arr);
 ?>
