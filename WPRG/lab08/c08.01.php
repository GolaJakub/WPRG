<?php
$x = rand(0,99);
$y = rand(0,99);
$dzialanie = rand(0,1);
switch ($dzialanie){
    case 0:
        $dzialanie="+";
        break;
    case 1:
        $dzialanie="-";
        break;
}
if($dzialanie==0){
    $result=$x+$y;
}
else{
    $result=$x-$y;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>Solve captcha!!</title>
</head>
<body>
<form action="c08.01checker.php" method="post">
    <table>
        <TR>
            <TD><?php printf("Rozwiaz %d %s %d",$x,$dzialanie,$y)?></TD>
        </TR>
        <TR>
            <TD>
                <input type="hidden" id="wynik" name="wynik" value="<?php echo $result; ?>">
                <input type="text" id="filter" name="filter" required>
                <input type="submit" value="Check!">
            </TD>

        </TR>
    </table>
</form>




</body>


</html>
