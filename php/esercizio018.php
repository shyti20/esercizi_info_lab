<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 18</title>
        <meta charset="UTF-8" />
        <meta name="author" content="SHYTI FRANKO 5AI" />
    </head>
    <body>
        <?php
            echo "<h1>Esercizio 18</h1>";
            echo "<p>Generare casualmente un voto compreso fra 1 e 10 (includere i “mezzi voti”).</p>";

            $voto = random_int(10, 100) / 10;

            echo "il voto e: $voto";

            
        ?>

    </body>
</html>
