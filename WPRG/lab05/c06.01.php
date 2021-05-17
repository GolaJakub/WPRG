<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Tytuł strony...</title>
</head>
<body>
<header>
    <h1>Jakub Gola - strona domowa</h1>
</header>
<section>
    <article>
        <header>
            <h2>O mnie </h2>
        </header>
        <p>
            Jestem studentem Polsko-Japońskiej Akademii Technik Komputerowych
        </p>
        <p>
            Moje zainteresowania:
            <?php
            $file = file_get_contents('zainteresowania');
            $file = explode(",", $file);
            echo "<br />";
            foreach ($file as $line) {
                echo $line . "<br />";
            }
            ?>
        <p>
        </p>

        <?php
        $dateOfBirth = mktime(10, 10, 10, 9, 30, 2001);
        $today = time();
        $diff = ($today - $dateOfBirth);
        $age = (int)($diff / 31556926);
        echo "Mam $age lat"
        ?>
    </article>
</section>
<footer>
    <p style="font-size:14px; color:#c4c4c4">(c) Made By Randome</p>
    <?php
    setlocale(LC_ALL, "pl_PL.utf8");
    echo strftime('Dzis jest %A,%d %B %G,%H:%M:%S');
    ?>
</footer>
</body>
</html>
