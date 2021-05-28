



<?php
if(isset($_POST['login']) && isset($_POST['password'])) {
    if ($_POST['login'] == "test" && $_POST['password'] == "opos") {
        echo "Pomyslnie zalogowano!";
    }
    else{
        echo "Niepoprawne dane!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Logging page</title>
</head>

<body>
<form action="glowna.php" method="post">
    <table>
        <TR>
            <TD>Login:<input name="login" type="text" required></TD>
        </TR>
        <TR>
            <TD>Hasło:<input name="password" type="password" required></TD>
        </TR>
        <TR>
            <TD><input name="log" type="submit" value="Log in"></TD>
        </TR>
    </table>
</form>

<footer>
    <p style="font-size:14px; color:#dbdbdb">(c) Made By RandomE</p>
</footer>
</body>


</html>