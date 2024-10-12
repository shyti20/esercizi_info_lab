<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 21</title>
        <meta charset="UTF-8" />
        <meta name="author" content="SHYTI FRANKO 5AI" />
    </head>
    <body>
        <?php
        echo "<h1>Esercizio 21</h1>";
        echo "<p>Dati tre interi stabilire se possono essere le lunghezze dei lati di un triangolo. In un triangolo, un lato è sempre minore della somma degli altri due.</p>";
        
        $lato1 = random_int(1, 100);
        $lato2 = random_int(1, 100);
        $lato3 = random_int(1, 100);

        echo "lato1 $lato1 <br />";
        echo "lato2 $lato2 <br />";
        echo "lato3 $lato3 <br />";

        if (($lato2 + $lato3) > $lato1 && ($lato1 + $lato3) > $lato2 && ($lato1 + $lato2) > $lato3) {
            echo "possono essere i lati di un trinagolo";
        } else {
            echo "non possono essere i lati di un triangolo";
        }
    
        ?>

    </body>
</html>
