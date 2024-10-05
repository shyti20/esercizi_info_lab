<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 6</title>
        <meta charset="UTF-8" />
        <meta name="author" content="SHYTI FRANKO 5AI" />
    </head>
    <body>
        <?php
            echo "<h1>Esercizio 6</h1>";
            echo "<p>Scrivere uno script che, dato il prezzo in euro di un articolo in vendita, lo restituisca scontato del 10%, 25% e 33%</p>";

            $a = random_int(1, 100) / 100;

            echo "a = $a<br />";
            echo "sconto 10% = ", $a - $a * 0.10, "<br />";
            echo "sconto 25% = ", $a - $a * 0.25, "<br />";
            echo "sconto 33% = ", $a - $a * 0.33, "<br />";
        ?>
    </body>
</html>
