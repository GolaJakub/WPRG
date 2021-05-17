



<?php
if(isset($_POST['login']) && isset($_POST['password'])){
 if($_POST['login'] == $_POST['password'] == "test"){
     setcookie("isLoged",1);
 }
}


?>
<!DOCTYPE html>
<html>
<head>
    <title>Login page</title>
</head>

<body>
<form method="post">

    <p>
        <input name="login" type="text">
    </p>
    <p>
        <input name="password" type="password">
    </p>
    <p>
        <input name="log" type="submit">
    </p>

</form>

</body>


</html>