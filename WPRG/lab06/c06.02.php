<?php

if(isset($_POST['liczba1']) && isset($_POST['liczba2'])&& isset($_POST['liczba3'])
    && isset($_POST['liczba4'])&& isset($_POST['liczba5'])&& isset($_POST['liczba6'])) {
    if ($_POST['liczba1'] <= 40 && $_POST['liczba1'] >= 1 && $_POST['liczba2'] <= 40 && $_POST['liczba2'] >= 1 &&
        $_POST['liczba3'] <= 40 && $_POST['liczba3'] >= 1 && $_POST['liczba4'] <= 40 && $_POST['liczba4'] >= 1 &&
        $_POST['liczba5'] <= 40 && $_POST['liczba5'] >= 1 && $_POST['liczba6'] <= 40 && $_POST['liczba6'] >= 1)  {
        $liczba1=rand(1,40);
        $liczba2=rand(1,40);
        $liczba3=rand(1,40);
        $liczba4=rand(1,40);
        $liczba5=rand(1,40);
        $liczba6=rand(1,40);
    }
    else{
        echo "Podales bledne dane! Sprobuj jeszcze raz!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Loteria</title>
    <meta charset="UTF-8">
</head>
<body>
<h1>Loteria!!!</h1>
<h2>Podaj 6 liczb z zakresu 1-40</h2>
<FORM action="c06.02.php" method="POST">
    <table>
        <TR>
            <TD>liczba1:</TD>
            <TD>
                <label>
                    <INPUT name="liczba1">
                </label>
            </TD>
        </TR>
        <TR>
            <TD>liczba2:</TD>
            <TD>
                <label>
                    <INPUT name="liczba2">
                </label></TD>
        </TR>
        <TR>
            <TD>liczba3:</TD>
            <TD>
                <label>
                    <INPUT name="liczba3">
                </label></TD>
        </TR>
        <TR>
            <TD>liczba4:</TD>
            <TD>
                <label>
                    <INPUT name="liczba4">
                </label></TD>
        </TR>
        <TR>
            <TD>liczba5:</TD>
            <TD>
                <label>
                    <INPUT name="liczba5">
                </label></TD>
        </TR>
        <TR>
            <TD>liczba6:</TD>
            <TD>
                <label>
                    <INPUT name="liczba6">
                </label></TD>
        </TR>
        <TR>
            <TD>&nbsp;</TD>
            <TD><INPUT type="submit" value="Wyslij"></TD>
        </TR>
    </table>

</FORM>
<footer>
    <p style="font-size:14px; color:#dbdbdb">(c) Made By RandomE</p>
</footer>
</body>

</html>

