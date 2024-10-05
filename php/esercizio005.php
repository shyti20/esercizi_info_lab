<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 5</title>
        <meta charset="UTF-8" />
        <meta name="author" content="SHYTI FRANKO 5AI" />
    </head>
    <body>
        <?php
            echo "<h1>Esercizio 5</h1>";
            echo "<p>Scrivere uno script che, dato un numero con almeno 4 cifre decimali, lo approssimi alla terza cifra decimale sempre per difetto.<br />Es.: 123.45678 → 123.456</p>";

            $a = random_int(1, 1000000) / 1000000;

            echo "a = $a<br />";
            $approssimazione = $a * 1000;
            $approssimazione = floor($approssimazione) / 1000;
            echo "numero approssimato per difetto = ", $approssimazione, "<br />";
        ?>
    </body>
</html>
