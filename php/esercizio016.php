<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 16</title>
        <meta charset="UTF-8" />
        <meta name="author" content="SHYTI FRANKO 5AI" />
    </head>
    <body>
        <?php
            echo "<h1>Esercizio 16</h1>";
            echo "<p>Si scriva uno script che, dati cinque valori interi, visualizzi la loro media armonica, ovvero il reciproco della media aritmetica dei reciproci.</p>";

            $a = random_int(10000, 10000000);

            echo "tempo in secondi: $a ";


            $ore = floor($a / 3600);
            $minuti = floor(($a % 3600) / 60);
            $secondi = $minuti % 60;
            echo "corrisponde a: ", $ore, " ore ", $minuti, " minuti e ", $secondi, " secondi";
        ?>

    </body>
</html>
