<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 14</title>
        <meta charset="UTF-8" />
        <meta name="author" content="SHYTI FRANKO 5AI" />
    </head>
    <body>
        <?php
            echo "<h1>Esercizio 14</h1>";
            echo "<p>Si scriva uno script che, dati quattro numeri, visualizzi la loro media geometrica, ovvero la radice n-esima del prodotto di n valori.</p>";

            $a = random_int(1, 100);
            $b = random_int(1, 100);
            $c = random_int(1, 100);
            $d = random_int(1, 100);

            echo "a: $a<br />";
            echo "b: $b<br />";
            echo "c: $c<br />";
            echo "d: $d<br />";

            echo "media geometrica: ", pow($a * $b * $c * $d, 1 / 4);
        ?>

    </body>
</html>
