<?php

function countChar($karakter,$cek){
    $angka = 0;
    $hs =  substr_count($karakter,$cek);;

    return $hs;
}

$data = "hello asoo";
echo countChar($data,"o");