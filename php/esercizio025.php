<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 25</title>
        <meta charset="UTF-8" />
        <meta name="author" content="SHYTI FRANKO 5AI" />
    </head>
    <body>
        <?php
        echo "<h1>Esercizio 25</h1>";
        echo "<p>Scrivere uno script in grado di stabilire se un dato anno del calendario gregoriano (dal 1582) è bisestile. Sono bisestili:
        <br /> gli anni non secolari il cui numero è divisibile per 4;
        <br /> gli anni secolari il cui numero è divisibile per 400.
        Per fare qualche esempio, il 1896 e il 1996 sono stati entrambi bisestili (non secolari divisibili per 4), il 1800 e il 1900 non lo sono stati (secolari non divisibili per 400), mentre il 1600 e il 2000 lo sono stati (secolari divisibili per 400).</p>";
        
        $anno = random_int(1582, 2024);

        echo "anno: $anno<br />";

        if ($anno % 100 == 0) {
            if ($anno % 400 == 0) {
                echo $anno. " e bisestile";
            } else {
                echo $anno. " non e bisestile";
            }
        } else {
            if ($anno % 4 == 0) {
                echo $anno. " e bisestile";
            } else {
                echo $anno. " non e bisestile";
            }
        }
        ?>

    </body>
</html>
