<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 20</title>
        <meta charset="UTF-8" />
        <meta name="author" content="SHYTI FRANKO 5AI" />
    </head>
    <body>
        <?php
        echo "<h1>Esercizio 20</h1>";
        echo "<p>Dati i tre lati di un triangolo, calcolarne la superficie applicando la formula di Erone:</p>";

        $a = 12;
        $b = 5;
        $c = 10;

        $s = sqrt(($a + $b + $c) * (-$a + $b + $c) * ($a - $b + $c) * ($a + $b - $c)) / 4;

        echo "risultato della formula di erone $s";
        ?>

    </body>
</html>
