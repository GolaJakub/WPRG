<?php
$flags = array(
    "Belgium"=>array("black", "red", "yellow"),
    "France"=>array("blue", "white", "red"),
    "Netherland"=>array("red", "white", "blue"),
    "Greece"=>array("blue", "white"),
    "Lithuania"=>array("yellow", "green", "red"),
    "Malta"=>array("white","red"),
    "Poland"=>array("white","red"),
    "Denmark"=>array("white","red"),
    "Estonia"=>array("blue","black","white"),
    "Bulgaria"=>array("white","green","red"));

$a = array();

foreach ($flags as $flag => $colours)
    foreach ($colours as $colour)
{
    array_push($a, $colour);
}

$counter = array_count_values($a);

ksort($flags);   //sorting the array flags by key
arsort($counter);  //sorting array counter in reverse order

$common_colours = array_slice($counter, 0, 5, true);  //slicing the array to the 5 most common colors
$key_colour = array_keys($common_colours);

foreach ($key_colour as $colour)
{
    print "$colour: " ;
    foreach ($flags as $flag => $colours)
    {
        if (in_array($colour, $colours))
            print "$flag \t";
    }
    print "</br>";
}