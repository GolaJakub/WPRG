<?php
$badWords =array("kurwa","jebana","pierdolona","bajzel","jebanie","pierdolenie","kurwisko","wkurwić","upierdolić","wyjebala","dziwka","matkojebca");
$sentence = "Po drodze szla kurwa i sie jebana wyjebala";
$words = explode(" ", $sentence);
$counter = count($words);
for ($i=0; $i<$counter;$i++){
    if(in_array($words[$i], $badWords)){
        $words[$i]="***";
    }

}
for ($z = 0; $z < $counter; $z++) {
    echo $words[$z] . " ";
};
