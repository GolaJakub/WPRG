<?php
if(isset($_POST['user']) && isset($_POST['password'])) {
    if ($_POST['user'] == "test" && $_POST['password'] == "opos") {
        echo "ULTRA SECRET MESSAGE!";
    }
    else{
        echo "Podales bledne dane! Sprobuj jeszcze raz!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Very Secret Page</title>
        <meta charset="UTF-8">
    </head>
    <body>
    <h1>Very Secret Page</h1>
        <FORM action="c06.01.php" method="POST">
            <table>
                <TR>
                    <TD>Name:</TD>
                    <TD><label>
                            <INPUT name="user">
                        </label></TD>
                </TR>
                <TR>
                    <TD>Password:</TD>
                    <TD><label>
                            <INPUT name="password">
                        </label></TD>
                </TR>
                <TR>
                    <TD>&nbsp;</TD>
                    <TD><INPUT type="submit" value="Sign in"></TD>
                </TR>
            </table>

        </FORM>
        <footer>
            <p style="font-size:14px; color:#dbdbdb">(c) Made By RandomE</p>
        </footer>
    </body>

</html>

