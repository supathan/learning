<?php

function foo(){
    echo "hello world";
};

function shams($num){
    
    $a = $num;

    return function($b) use($a){
        return function($string) use ($a,$b){
            echo "$string => ";
            echo $a+$b;
        };
    };

}


$athan = shams(10);

$athan(10)("Ami sesh!");



?>