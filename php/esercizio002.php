<!DOCTYPE html>
<html>
    <head>
        <title> Esercizio 2</title>
        <meta charset="UTF-8" />
        <meta name="author" content="SHYTI FRANKO 5AI" />
    </head>
    <body>
        <?php
            $a = random_int(0, 100);
            $b = random_int(0, 100);
            $c = random_int(0, 100);
            echo "<h1>Esercizio 2</h1>";
            echo "<p>Si scriva uno script che, dati tre valori interi, visualizzi la loro somma e la loro media aritmetica</p>";
            echo "a = $a<br />";
            echo "b = $b<br />";
            echo "c = $b<br />";
            echo "somma = ", $a + $b + $c, " <br />";
            printf("media = %.2f", ($a + $b + $c) / 3);
        ?>
    </body>
</html>
