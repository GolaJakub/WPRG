<?php
$pesel = "01293001079";
$multiply = array(1, 3, 7, 9, 1, 3, 7, 9, 1, 3);

for($i = 0; $i <= sizeof($multiply); $i++)
{
    $x += ($multiply[$i]*substr($pesel, $i,1));
}
$kontrolna = 10 - ($x % 10);
if ($kontrolna == substr($pesel, 10,10)) {
    $rok2 = substr($pesel, 0, 2);
    $rok1 = substr($pesel, 2, 2);
    $miesiac = $rok1;

    if (81 <= $rok1 && $rok1 <= 92)
    {
        if (substr($pesel, 9, 1) % 2 == 0)
            print "Osoba ktora posiada ten pesel: " . $pesel . " jest kobieta urodzona " . substr($pesel, 4, 2) . "-" . $miesiac . "-18" . $rok2;
        else
            print "Osoba ktora posiada ten pesel: " . $pesel . " jest mezczyczna urodzonym " . substr($pesel, 4, 2) . "-" . $miesiac . "-18" . $rok2;
    }
    else if(01 <= $rok1 && $rok1 <= 12)
    {
        if (substr($pesel, 9, 1) % 2 == 0)
            print "Osoba ktora posiada ten pesel: " . $pesel . " jest kobieta urodzona " . substr($pesel, 4, 2) . "-" . $miesiac . "-19" . $rok2;
        else
            print "Osoba ktora posiada ten pesel: " . $pesel . " jest mezczyczna urodzonym " . substr($pesel, 4, 2) . "-" . $miesiac . "-19" . $rok2;
    }
    else if(21 <= $rok1 && $rok1 <= 32)
    {
        $miesiac = $rok1 - 20;
        if (substr($pesel, 9, 1) % 2 == 0)
            print "Osoba ktora posiada ten pesel: " . $pesel . " jest kobieta urodzona " . substr($pesel, 4, 2) . "-" . $miesiac . "-20" . $rok2;
        else
            print "Osoba ktora posiada ten pesel: " . $pesel . " jest mezczyczna urodzonym " . substr($pesel, 4, 2) . "-" . $miesiac . "-20" . $rok2;
    }
}
else
    print "Podany pesel jest nieprawidlowy";