<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 41</title>
        <meta charset="UTF-8" />
        <meta name="author" content="SHYTI FRANKO 5AI" />
    </head>
    <body>
        <?php
        /* Data una stringa, determinare quante vocali e quante consonanti contiene (ignorare le lettere accentate).*/
        echo "<h1>Esercizio 41</h1>";
        $str = "testing";
        $i = 0;
        $j = 0;
        $chars = mb_str_split(strtolower($str));
        foreach ($chars as  $c) {
            if ($c >= "a" && $c <= "z") {
                if (str_contains("aeiou", $c)) {
                    $i++;
                } else {
                    $j++;
                }
            } 
        }

        echo "stringa: $str <br />";
        echo "vocali: $i <br />";
        echo "consonanti: $j";
        ?>

    </body>
</html>
