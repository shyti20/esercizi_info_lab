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

            $voto0 = random_int(2, 10);
            $voto1 = random_int(2, 10);
            $voto2 = random_int(2, 10);
            $voto3 = random_int(2, 10);
            $voto4 = random_int(2, 10);
            $voto5 = random_int(2, 10);
            $voto6 = random_int(2, 10);
            $voto7 = random_int(2, 10);
            $voto8 = random_int(2, 10);
            $voto9 = random_int(2, 10);

            $somma = ($voto0 + $voto1 + $voto2 + $voto3 + $voto4 + $voto5 + $voto6 + $voto7 + $vot8 + $voto9);
            $somma -= max(($voto0 + $voto1 + $voto2 + $voto3 + $voto4 + $voto5, $voto6, $voto7, $vot8, $voto9)

            
        ?>

    </body>
</html>
