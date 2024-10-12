<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 23</title>
        <meta charset="UTF-8" />
        <meta name="author" content="SHYTI FRANKO 5AI" />
    </head>
    <body>
        <?php
        echo "<h1>Esercizio 23</h1>";
        echo "<p>Realizzare uno script PHP che calcoli il fattoriale di un numero.</p>";
        
        $a = random_int(1, 10);

        echo "numero: $a <br />";
        
        echo "il fattoriale e: ". fattoriale($a);

        function fattoriale($a) {
            if($a == 1)
                return 1;
            return fattoriale($a - 1) * $a;
        }

        ?>

    </body>
</html>
