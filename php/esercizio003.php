<!DOCTYPE html>
<html>
    <head>
        <title> Esercizio 3</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <?php
            $a = random_int(0, 100) / random_int(1, 20);
            echo "<h1>Esercizio 3</h1>";
            echo "<p>Si scriva uno script che, dato un numero in virgola mobile, visualizzi parte intera e parte frazionaria, separate<p>";
            echo "a = $a<br />";
            $parteFrazionaria = ($a - floor($a));
            echo "parte frazionaria = ", $parteFrazionaria, "<br />";
            echo "parte intera = ", floor($a);
        
        ?>
    </body>
</html>
