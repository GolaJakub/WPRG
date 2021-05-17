<?php

function UnderAgePeople($underAged) {
    $people = array(
    [
        name => "Jan",
        surname => "Kowalski",
        age => 21
    ],
    [
        name => "Janina",
        surname => "Nowak",
        age => 75
    ],
    [
        name => "Albert",
        surname => "Kolobrzeski",
        age => 6
    ],
    [
        name => "Kacper",
        surname => "Lolkowski",
        age => 38
    ],
    [
        name => "Stanislaw",
        surname => "Leszczynski",
        age => 11
    ],
    [
        name => "Fabian",
        surname => "Kocot",
        age => 16
    ],
    [
        name => "Maja",
        surname => "Jagodowska",
        age => 17
    ],
    [
        name => "Justyna",
        surname => "Porzeczka",
        age => 22
    ],
    [
        name => "Janina",
        surname => "Pawelska",
        age => 69
    ]);
    $surname = array_column($people, "surname");
    array_multisort($surname, SORT_ASC, $people);
    for ($i = 0; $i < count($people); $i++)
    {
        if ($underAged == true)
        {
            print $people[$i]["surname"] . "\t" . $people[$i]["name"] . "\t" . $people[$i]["age"] . ", ";
        }
        else
        {
            if ($people[$i]["age"] >= 18)
            {
                print $people[$i]["surname"] . "\t" . $people[$i]["name"] . "\t" . $people[$i]["age"] . ", ";
            }
        }
    }
}

UnderAgePeople(true);