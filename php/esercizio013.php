<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 13</title>
        <meta charset="UTF-8" />
        <meta name="author" content="SHYTI FRANKO 5AI" />
    </head>
    <body>
        <?php
            echo "<h1>Esercizio 13</h1>";
            echo "<p>Si scriva uno script che, dati cinque valori interi con i relativi pesi, visualizzi la loro media pesata o ponderata. A differenza della media aritmetica, nella media pesata, ciascun numero ha una determinata importanza (peso) che influisce sul calcolo; il valore di tale media è dato dalla somma dei prodotti di ciascun numero per il rispettivo peso, fratto la somma dei pesi. Dati n valori numerici:</p>";

            $a = random_int(1, 100);
            $b = random_int(1, 100);
            $c = random_int(1, 100);
            $d = random_int(1, 100);
            $e = random_int(1, 100);

            echo "valori numerici: $a, $b, $c, $d, $e<br />";

            $p1 = random_int(1, 100);
            $p2 = random_int(1, 100);
            $p3 = random_int(1, 100);
            $p4 = random_int(1, 100);
            $p5 = random_int(1, 100);

            echo "pesi: $p1, $p2, $p3, $p4, $p5<br />";

            $media_pesata = ($a * $p1 + $b * $p2 + $c * $p3 + $d * $p4 + $e * $p5) / ($p1 + $p2 + $p3 + $p4 + $p5);
            echo "media pedata: $media_pesata";
        ?>
    </body>
</html>
