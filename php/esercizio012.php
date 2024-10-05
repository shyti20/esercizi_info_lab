<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 12</title>
        <meta charset="UTF-8" />
        <meta name="author" content="SHYTI FRANKO 5AI" />
    </head>
    <body>
        <?php
            echo "<h1>Esercizio 12</h1>";
            echo "<p>Scrivere uno script che calcoli con sufficiente precisione il pi greco (π) sfruttando la formula di Nilakantha, riportata di seguito; da notare come la serie di somme e sottrazioni può andare avanti all’infinito. Dopo aver individuato come continuare la formula, ricavare π con almeno 4 cifre decimali esatte.</p>";

            $pi_calcolato = ((1 / (1 * 2 *3)) - (1 / (2 * 3 * 5)) + (1 / (3 * 4 * 7)) - 1 / (4 * 5  * 9)) + 3;

            echo "π calcolato: $pi_calcolato<br />";
            echo "π: ", pi(), "<br />";
            
            echo "<br />";
            $raggio = random_int(1, 100);
            echo "raggio: $raggio <br />";
            echo "circonferenza: ", 2 * $raggio * pi(), "<br />";
            echo "area: ", pow($raggio, 2) * pi();
            ?>
    </body>
</html>
