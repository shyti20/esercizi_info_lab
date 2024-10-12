<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 22</title>
        <meta charset="UTF-8" />
        <meta name="author" content="SHYTI FRANKO 5AI" />
    </head>
    <body>
        <?php
        echo "<h1>Esercizio 22</h1>";
        echo "<p>Scrivere un programma in grado di calcolare ab, con a e b interi, senza l’utilizzo della funzione pow() e dell’operatore **.</p>";
        
        $a = random_int(1, 10);
        $b = random_int(1, 10);
        
        echo "numero1: $a <br />";
        echo "numero2: $b <br />";

        $result = $a;
        for ($i = 0; $i < $b; $i++) {
            $result *= $a;
        }   
        
        echo "risultato: $result";
        ?>

    </body>
</html>
