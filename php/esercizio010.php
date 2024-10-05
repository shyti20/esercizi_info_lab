<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 10</title>
        <meta charset="UTF-8" />
        <meta name="author" content="SHYTI FRANKO 5AI" />
    </head>
    <body>
        <?php
            echo "<h1>Esercizio 10</h1>";
            echo "<p>10. Dati due numeri interi, individuare il più piccolo implementando il seguente algoritmo:<br /> a. calcolare la somma dei due numeri (S);<br />b. calcolare il valore assoluto della differenza dei due numeri (D);<br />c. ricavare il numero più piccolo calcolando (S - D) / 2.</p>";

            $a = random_int(1, 100);
            $b = random_int(1, 100);

            echo "a: $a<br />";
            echo "b: $b<br />";

            $somma = $a + $b;
            $differenza = abs($a - $b);
            $min = ($somma - $differenza) / 2;

            echo "somma: $somma<br />";
            echo "differenza: $differenza<br />";
            echo "minore: $min<br />";
        ?>
    </body>
</html>
