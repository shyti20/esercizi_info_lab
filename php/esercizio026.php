<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 26</title>
        <meta charset="UTF-8" />
        <meta name="author" content="SHYTI FRANKO 5AI" />
    </head>
    <body>
        <?php
        echo "<h1>Esercizio 26</h1>";
        echo "<p>Scrivere uno script PHP che generi casualmente una data (per es., 1° marzo 2024) compresa fra il 2001 e il 2099. Si tenga presente che:
                <br /> i mesi di 31 giorni sono: gennaio, marzo, maggio, luglio, agosto, ottobre e dicembre;
                <br /> febbraio ha 29 giorni negli anni bisestili;
                <br /> &deg; è l’entità HTML per il carattere °.</p>";
        
        $anno = random_int(2001, 2099);

        echo "anno: $anno<br />";

        if (is_bisestile($anno)) {
            generator_date($anno, true);
        } else {
            generator_date($anno, false);
        }


        function is_bisestile($anno) {
            if ($anno % 100 == 0) {
                if ($anno % 400 == 0) {
                    return true;
                } else {
                    return false;
                }
            } else {
                if ($anno % 4 == 0) {
                    return true;
                } else {
                    return false;
                }
            }
        }

        function generator_date($anno, $flag) {
            $mese = random_int(1, 10);
            switch ($mese) {
                case 1:
                    $giorno = random_int(1, 31);
                    $str_mese = "gennaio";
                case 3:
                    $giorno = random_int(1, 31);
                    $str_mese = "marzo";
                case 5:
                    $giorno = random_int(1, 31);
                    $str_mese = "maggio";
                case 7:
                    $giorno = random_int(1, 31);
                    $str_mese = "luglio";
                case 8:
                    $giorno = random_int(1, 31);
                    $str_mese = "agosto";
                case 10:
                    $giorno = random_int(1, 31);
                    $str_mese = "ottobre";
                case 12:
                    $giorno = random_int(1, 31);
                    $str_mese = "dicembre";
                    break;
                case 2:
                    if ($flag) {
                        $giorno = random_int(1, 29);
                    } else {
                        $giorno = random_int(1, 28);
                    }
                    $str_mese = "febbraio";
                    break;
                case 4:
                    $giorno = random_int(1, 30);
                    $str_mese = "aprile";
                case 6:
                    $giorno = random_int(1, 30);
                    $str_mese = "giugno";
                case 9:
                    $giorno = random_int(1, 30);
                    $str_mese = "settembre";
                case 11:
                    $giorno = random_int(1, 30);
                    $str_mese = "novembre";
                    break;
            }
            
            if ($giorno == 1) {
                echo "1&deg; $str_mese $anno";
            } else {
                echo "$giorno $str_mese $anno";
            }
        }

        ?>

    </body>
</html>
