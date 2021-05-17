<?php
$x = 4;
$counter = 0;
$i=2;
$result = "Prime";

while($i<$x)
{
    if(!($x%$i))
        $result = "notPrime";
    $i++;
    $counter++;
}
print "number $x is $result</br>Counter of loops: $counter  ";