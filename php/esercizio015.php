<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 15</title>
        <meta charset="UTF-8" />
        <meta name="author" content="SHYTI FRANKO 5AI" />
    </head>
    <body>
        <?php
            echo "<h1>Esercizio 15</h1>";
            echo "<p>Si scriva uno script che, dati cinque valori interi, visualizzi la loro media armonica, ovvero il reciproco della media aritmetica dei reciproci.</p>";

            $a = random_int(1, 100);
            $b = random_int(1, 100);
            $c = random_int(1, 100);
            $d = random_int(1, 100);
            $e = random_int(1, 100);

            echo "a: $a<br />";
            echo "b: $b<br />";
            echo "c: $c<br />";
            echo "d: $d<br />";

            $media_armonica = ((1 / $a) + (1 / $b) + (1 / $c) + (1 / $d) + (1 / $e)) / 5;
            echo "media amrmonica: ", (1 / $media_armonica);
        ?>

    </body>
</html>
