
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
</head> <title>Views counter</title>
<body>
<form>
    <table>
        <TR>
            <TD>
                You are <?php
                error_reporting(E_ALL);
                ini_set('display_errors', '1');
                $counter=file_get_contents('count.txt');

                if (array_key_exists("views",$_COOKIE)){
                    setcookie("views",$counter);
                    $counter++;
                    file_put_contents('count.txt',$counter);
                }
                echo $_COOKIE['views'];
                ?>
                guest!!
            </TD>
        </TR>
    </table>
</form>




</body>


</html>