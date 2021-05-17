<?php

function circle($r) {
    return 3.14*$r*$r;
}

function square($n){
    return $n*$n;
}
function rectangle($a,$b){
    return $a*$b;
}

function equilateralTriangle($n){
    return (($n*$n)*sqrt(3))/4;
}

function trapeze($a,$b,$h){
    return (($a+$b)*$h)/2;
}

echo circle(5);
echo "\n";
echo square(5);
echo "\n";
echo rectangle(5,5);
echo "\n";
echo equilateralTriangle(5);
echo "\n";
echo trapeze(5,3,4);