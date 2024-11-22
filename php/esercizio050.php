<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="author" content="Shyti Franko 5AI" />
        <title>Esercizio 50</title>
    </head>
    <body>
        <h1>Esercizio 50</h1>
        <?php
        define("PUNTEGGIATURA", [",", ".", ";", "!", "?"]);
        define("VOCALI", ["e", "i", "o", "u"]);
        echo "<p>Sia data una frase di senso compiuto lunga almeno 25 caratteri. Dopo aver controllato che sia
                priva di caratteri multibyte e aver eliminato eventuali segni di punteggiatura (, ; . : ! ?), riportare:
                <br />- la stringa ottenuta sostituendo la parola più lunga con smurf;
                <br />- la stringa ottenuta concatenando i primi 2 e gli ultimi 3 caratteri di ogni parola;
                <br />- la stringa ottenuta sostituendo tutte le vocali con la lettera a.</p>";

         $str = "Questa e una stringa, di esempio!";
       
        if (!is_valid($str)) {
            echo "Stringa iniziale: $str<br />";
        } else {
            echo "Stringa non valida<br />";
        }

        $str = delete_punteggiatura($str);

        echo "Stringa senza puntegiatura: $str<br />";
        
        $strNew = parola_smurf($str);

        echo "Stringa con parola smurf: $strNew<br />";

        $arrParole = explode(" ", $strNew);

        $strFinale = "";

        foreach ($arrParole as $parola) {
            $strFinale .= substr($parola, 0, 1);
            $strFinale .= substr($parola, (strlen($parola) - 3), strlen($parola));
        }

        $strFinale = replace_vocali($strFinale);

        echo "La stringa finale: $strNew";

        function parola_smurf($str) {
            $temp = explode(" ", $str);
            $lunga = "";

            foreach ($temp as $c) {
                if (strlen($c) > strlen($lunga)) {
                    $lunga = $c;
                }
            }

            return str_replace($lunga, "smurf", $str);
        }

        function delete_punteggiatura($str) {
            return str_replace(PUNTEGGIATURA, "", $str);
        }

        function replace_vocali($str) {
            return str_replace(VOCALI, "a", $str);
        }

        function is_valid($str) {
            if (mb_strlen($str) > strlen($str)) {
                if (strlen($str) >= 25){
                    return true;
                }
            }
            return false;
        }
        ?>

    </body>
</html>