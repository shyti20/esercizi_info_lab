<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 9</title>
        <meta charset="UTF-8" />
        <meta name="author" content="SHYTI FRANKO 5AI" />
    </head>
    <body>
        <?php
            echo "<h1>Esercizio 9</h1>";
            echo "<p>Siano dati due numeri interi di due cifre ab e cd, dove ogni lettera rappresenta nell’ordine una singola cifra (se ab è pari a 74, a vale 7 e b vale 4). Moltiplicare fra di loro i due numeri implementando l’algoritmo di Karatsuba: ab · cd = a · c · 100 + (a · c + b · d - (a - b) · (c - d)) · 10 + b · d</p>";

            $ab = random_int(10, 99);
            $cd = random_int(10, 99);
            echo "ab = $ab<br />";
            echo "cd = $cd<br />";
            $a = floor($ab / 10);
            $b = $ab % 10;
            $c = floor($cd / 10);
            $d = $cd % 10;
            echo "a: $a<br />";
            echo "b: $b<br />";
            echo "c: $c<br />";
            echo "d: $d<br />";

            echo "ab * cd = ", $ab * $cd, "<br />";
            $equazione = $a * $c * 100 + ($a * $c + $b * $d - ($a - $b) * ($c - $d)) * 10 + $b * $d;
            echo "risultato della equazione: ", $equazione;
        ?>
    </body>
</html>
