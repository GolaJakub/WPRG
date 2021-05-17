<?php
$file = file_get_contents('text');
$file = explode("\n", $file);
$file = array_reverse($file);
foreach ($file as $line) {
    echo $line."<br />";
}
file_put_contents('text', implode("\n",$file));