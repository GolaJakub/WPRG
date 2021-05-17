<?php
$file = file_get_contents('licznik');
$file1 = $file+1;
file_put_contents('licznik',$file1);
$file = file_get_contents('licznik');
echo $file;