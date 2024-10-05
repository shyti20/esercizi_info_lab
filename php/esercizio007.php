<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 7</title>
        <meta charset="UTF-8" />
        <meta name="author" content="SHYTI FRANKO 5AI" />
    </head>
    <body>
        <?php
            echo "<h1>Esercizio 7</h1>";
            echo "<p>Effettuare la divisione fra due numeri interi, stampando separatamente quoziente e resto</p>";

            $a = random_int(1, 100);
            $b = random_int(1, 100);

            echo "a = $a<br />";
            echo "b = $b<br />";
            echo "quoziente = ", floor($a / $b), "<br />";
            echo "resto = ", $a % $b, "<br />";

        ?>
    </body>
</html>
