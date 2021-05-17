<?php

function diceRoll($n,$k,$threshold,$debug = false)
{
    $throws = array();
    $counter = 0;

    for ($i = 0; $i < $k; $i++)
    {
        $throwing = rand(1, $n);
        if ($debug==true)
        {
            array_push($throws, $throwing);
        }
        if ($throwing >= $threshold)
        {
            $counter++;
        }
    }

    if ($debug==true)
    {
        print "Your throws sorted in descending order: ";
        arsort($throws);
        foreach ($throws as $key => $value)
        {
            print ($value . ", ");
        }
    }
    print "Number of throws greater or equal threshold" . "\t($threshold)\t" .":";
    return $counter;
}
print diceRoll(8,7,5,true);