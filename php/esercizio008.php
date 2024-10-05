<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 8</title>
        <meta charset="UTF-8" />
        <meta name="author" content="SHYTI FRANKO 5AI" />
    </head>
    <body>
        <?php
            echo "<h1>Esercizio 8</h1>";
            echo "<p>Scrivere uno script che, dato un numero intero a 3 cifre, restituisca le 3 cifre separate su 3 righe differenti.</p>";

            $a = random_int(100, 999);
            echo "a = $a<br />";
            $cifra1 = floor($a / 100);
            $cifra2 = floor($a / 10) % 10;
            $cifra3 = $a % 10;

            echo "cifra 1 = ", $cifra1, "<br />";
            echo "cifra 2 = ", $cifra2, "<br />";
            echo "cifra 3 = ", $cifra3, "<br />";

        ?>
    </body>
</html>
