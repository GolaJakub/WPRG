<?php
setlocale(LC_ALL, "pl_PL.utf8");
$day = 10;
$month = 5;
$year = 2021;
$date = mktime(0,0,0, $month, $day, $year);
echo strftime("%e %B %Y to %A", $date);