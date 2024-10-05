<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 4</title>
        <meta charset="UTF-8" />
        <meta name="author" content="SHYTI FRANKO 5AI" />
    </head>
    <body>
        <?php
            echo "<h1>Esercizio 4</h1>";
            echo "<p>Si scriva uno script che, dato un numero in virgola mobile, visualizzi gli interi ottenuti approssimando per difetto e per eccesso.</p>";

            $a = random_int(1, 1000000) / 1000000;

            echo "a = $a<br />";
            echo "numero approssimato per difetto = ", floor($a), "<br />";
            echo "numero approssimato per eccesso = ",  ceil($a);
        ?>
    </body>
</html>
