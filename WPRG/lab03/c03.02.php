<?php
function relativelyPrime($a, $b){
    while($a!=$b){
        if($a>$b)
        {
            $a=$a-$b;
        }
        else
        {
            $b=$b-$a;
        }
    }
    $NWD = $a;
    if($NWD == 1)
    {
        $isRelativelyPrime = "Numbers are relatively prime";
    }
    else if ($a==1 && $b==1)
    {
        $isRelativelyPrime = "Numbers are relatively prime";
    }
    else
    {
        $isRelativelyPrime = "Numbers aren't relatively prime";
    }
    return $isRelativelyPrime;
}
echo  relativelyPrime(18,9);