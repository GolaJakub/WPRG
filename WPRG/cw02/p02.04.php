<?php
$x = 3;
print '<pre>';
for($i = 1; $i <= $x; $i++)
{
    for($j = 1; $j <= $x; $j++)
        print " ".$j*$i. " |";

    print "\n";

    for($j = 1; $j <= $x; $j++)
        print "---+";

    print "\n";
}
print "</pre>";