<?php
$dishes = [];
$extras = [];
require 'menu.php';
require 'functions.php';
if ($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($dishes[$_POST['dish']])){
        $priceOfDish = $dishes[$_POST['dish']];
    }
    $priceOfExtras = 0;
    if(isset($_POST['extras'])){
        foreach (array_keys($_POST['extras']) as $chosenExtra){
            if(isset($extras[$chosenExtra])){
                $priceOfExtras += $extras[$chosenExtra];
            }
        }
    }
echo $priceOfExtras;
}
?>
<!doctype html>
<html lang="pl">
<head>
    <title>Jedzenie 1.0</title>
</head>
<body>
<h1>Jedzenie 1.0</h1>
<form action="index.php" method="post">
    Danie:
    <select name="dish" required>
        <?php
        foreach ($dishes as $dish => $price){
            echo '<option value="'.$dish.'">'.$dish.'</option>';
        }
        ?>
    </select>
    <br/>
    Dodatki:<br>
    <?php
    foreach (array_keys($extras) as $extra){
        echo '<label>
            <input name="extras['.$extra.']" type="checkbox" value="1">
            '.$extra.'
        </label>
    <br/>';
    }
    ?>    <label>
        Ilosc:
        <input name="amount" type="number" min="1" value="1">
    </label>
    <label>
        Uwagi:
        <textarea name="notes"></textarea>
    </label>
    <input type="submit">
</form>
</body>
</html>