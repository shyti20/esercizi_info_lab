<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 17</title>
        <meta charset="UTF-8" />
        <meta name="author" content="SHYTI FRANKO 5AI" />
    </head>
    <body>
        <?php
            echo "<h1>Esercizio 17</h1>";
            echo "<p>Si scriva uno script che, dati cinque valori interi, visualizzi la loro media armonica, ovvero il reciproco della media aritmetica dei reciproci.</p>";

            $altezza_albero = random_int(1000, 9999);

            echo "altezza albero (cm): $altezza_albero <br />";

            echo "numero palline: ", floor((sqrt(17) / 20) * $altezza_albero), "<br />";
            echo "lughezza festoni (cm): ", floor(((13 * pi()) / 8) * $altezza_albero) , "<br />";
            echo "lunghezza delle luci (cm): ", floor(pi() * $altezza_albero) , "<br />";
            echo "altezza del puntale (cm):", floor($altezza_albero / 10) , "<br />"; 
        ?>

    </body>
</html>
