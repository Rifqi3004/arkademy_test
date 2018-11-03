<?php

function getPrima($ex1,$ex2){
    $a=2; $b=$ex1 * $ex2; $c; $d=0; $e=1;
    for($a;$e<=$b;$a++){
        $c=1;$d=0;
        for($c=1;$c<=$a;$c++){
            if($a%$c==0){
                $d++;
            }
           
        }
        if($d==2){   
            $data .= $a." , ";  
            if($e % $ex1 == 0){
                $data.= "<br>";
            }       
            $e++;
        }
    
     }

     
    return $data;
}

echo getPrima(4,6);
