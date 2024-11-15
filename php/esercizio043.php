<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 43</title>
        <meta charset="UTF-8" />
        <meta name="author" content="SHYTI FRANKO 5AI" />
    </head>
    <body>
        <h1>Esercizio 43</h1>
        <?php
        /* Sia data una stringa contenente un numero in virgola mobile; scrivere uno script PHP che permetta di ricavarne il numero di cifre. Esempio: -72.319 → 5 cifre*/
        
        define("DIGIT", "0123456789");

        $str = "-42.84984 ";
        $i = 0;
        echo "stringa: $str";

        $chars = mb_str_split($str);

        foreach ($chars as $c) {
            if (str_contains(DIGIT, $c)) {
                $i++;
            }
        }
        

        echo "il numero ha $i cifre";
        ?>

    </body>
</html>
