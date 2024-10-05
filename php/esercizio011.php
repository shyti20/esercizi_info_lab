<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 11</title>
        <meta charset="UTF-8" />
        <meta name="author" content="SHYTI FRANKO 5AI" />
    </head>
    <body>
        <?php
            echo "<h1>Esercizio 11</h1>";
            echo "<p>11. Convertire in binario (su 8 bit) un numero intero in base 10 compreso fra 2 e 255 (inclusi)</p>";

            $a = random_int(2, 255);

            echo "a: $a<br />";

            echo "numero in binario: ", base_convert($a, 10, 2);

        ?>
    </body>
</html>
