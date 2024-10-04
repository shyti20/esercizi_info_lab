<!DOCTYPE html>
<html>
    <head>
        <title> Esercizio 1</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <?php
            $a = 10;
            $b = 20;
            echo "<h1>Esercizio 1</h1>";
            echo "<p>Scrivere uno script che scambi il contenuto di due variabili</p>";
            echo "<p>Prima: </p>";
            echo "a = $a<br />";
            echo "b = $b";
            $temp = $a;
            $a = $b;
            $b = $temp;
            echo "<p>Dopo: </p>";
            echo "a = $a<br />";
            echo "b = $b";

        ?>
    </body>
</html>