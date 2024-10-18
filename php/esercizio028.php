<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 28</title>
        <meta charset="UTF-8" />
        <meta name="author" content="SHYTI FRANKO 5AI" />
    </head>
    <body>
        <?php
        echo "<h1>Esercizio 28</h1>";
        echo "<p>Scrivere uno script in grado di ricavare il numero di cifre di un dato intero positivo.</p>";
        $num = random_int(1, 10000000000);
        $i = 0;
        echo "numero: $num<br />";
        while ($num != 0) {
            $num = floor($num /= 10);
            
            $i++;
        }

        echo "numero delle cifre: $i";
        ?>

    </body>
</html>
