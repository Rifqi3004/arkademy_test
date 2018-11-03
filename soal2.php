<?php
function cek($karakter){
    if(preg_match("/^[a-zA-Z]{5}+_+[0-9]{2}$/", $karakter)){
        return "valid";
    }else{
        return "invalid";
    }
}

echo cek("lkjhg_99");