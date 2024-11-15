<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 42</title>
        <meta charset="UTF-8" />
        <meta name="author" content="SHYTI FRANKO 5AI" />
    </head>
    <body>
        <h1>Esercizio 42</h1>
        <?php
        /* Data una stringa, trasformare le lettere minuscole in maiuscole e viceversa.*/
        
        $str_before = "teStiNG CiAo<br />";

        $chars = mb_str_split($str_before);

        echo "stringa: $str_before";
        foreach ($chars as $c) {
            if ($c >= "a" && $c <= "z") {
                echo mb_strtoupper($c);
            } else {
                echo mb_strtolower($c);
            }
        }
        ?>

    </body>
</html>
