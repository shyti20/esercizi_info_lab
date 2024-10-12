<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 24</title>
        <meta charset="UTF-8" />
        <meta name="author" content="SHYTI FRANKO 5AI" />
    </head>
    <body>
        <?php
        echo "<h1>Esercizio 24</h1>";
        echo "<p>Generare casualmente una sequenza di 1000 nucleotidi (rappresentati dalle lettere A, C, G e T) di un filamento di DNA.</p>";
        
        $strDna = "";

        for ($i = 0; $i < 1000; $i++) {
            $num = random_int(1, 4);
            $strDna .= match ($num) {
                1 => "A",
                2 => "C",
                3 => "G",
                4 => "T",
            };
        }

        echo $strDna;
        ?>

    </body>
</html>
