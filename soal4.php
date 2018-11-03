<?php
function isBentrok($a, $b){
    $hasil = 0;
   if($a > $b){
       $c = $a;
       $b = $a;
       $a = $c;
   }
   do{
    $hasil += $a;
   }while($hasil % $b != 0);
   return $hasil;
}

echo isBentrok(5,6);