<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 29</title>
        <meta charset="UTF-8" />
        <meta name="author" content="SHYTI FRANKO 5AI" />
    </head>
    <body>
        <?php
        echo "<h1>Esercizio 29</h1>";
        echo "<p>Scrivere uno script in grado di ricavare il numero di cifre di un dato intero positivo.</p>";
        
        
        do {
            $num = random_int(1, 10000000000);
        } while ($num % 10 == 0);

        echo "numero: $num<br />";

        $str_num = "";

        while ($num != 0) {
            $str_num .= $num % 10;
            $num = floor($num /= 10);
        }

        echo "<br />il numero invertito e $str_num";

        ?>

    </body>
</html>
