<?php
$tab = [];
for($i=0; $i<100; $i++)
{
    $tab[$i]=rand(0,100);
}
$max = 0;
$max = max($tab);
$licznik = 0;

$mediana = ($tab[49]+$tab[50])/2;

$dlugosc = sizeof($tab);
for($i = 0; $i <= 100; $i++)
{
    if ($tab[$i]==$max)
    {
        $licznik++;
    }
    if ($i != 99) {
        print $tab[$i] . ", ";
    } else {
        print $tab[$i];
    }
}

print ("<br> maks:  $max<br>l.powt: $licznik<br>mediana: $mediana");