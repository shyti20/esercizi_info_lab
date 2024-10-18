<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 27</title>
        <meta charset="UTF-8" />
        <meta name="author" content="SHYTI FRANKO 5AI" />
    </head>
    <body>
        <?php
        echo "<h1>Esercizio 27</h1>";
        echo "<p>Fornita una data in formato numerico, comprendendo anche il giorno della settimana, determinare quella successiva, senza considerare l’anno.</p>";
        $mese = random_int(1, 12);
        
        $giorno = match ($mese) {
            1, 3, 5, 7, 8, 10, 12 => random_int(1, 31),
            4, 6, 9, 11 => random_int(1, 30),
            2 => random_int(1, 28),
        };

        $num_giorno = random_int(1, 7);
        $date = giorno_settimana($num_giorno, $giorno, $mese);

        echo $date;
        $num_giorno++;
        $giorno++;

        if ($num_giorno == 8) {
            $num_giorno = 1;
        }
        if ($giorno == 31 || $giorno == 32 || $giorno == 29) {
            switch ($mese) {
                case 1:
                case 3:
                case 5:
                case 7:
                case 8:
                case 10:
                case 12:
                    $giorno = 1;
                    $mese++;
                    if ($mese == 13) {
                        $mese = 1;
                    }
                    break;
                case 4:
                case 6:
                case 9:
                case 11:
                    break;
                case 2:
                    break;
            }
        }


        $date2 = giorno_settimana($num_giorno, $giorno, $mese);  
        echo "<br /> il giorno dopo e $date2";
         
        function giorno_settimana($num_giorno, $giorno, $mese) {
            $date = match ($num_giorno) {
                1 => "Lunedi ". $giorno. "/". $mese,
                2 => "Martedi " . $giorno. "/". $mese,
                3 => "Mercoledi ". $giorno. "/". $mese,
                4 => "Giovedi ". $giorno. "/". $mese,
                5 => "Venerdi ". $giorno. "/". $mese,
                6 => "Sabato ". $giorno. "/". $mese,
                7 => "Domenica ". $giorno. "/". $mese,
            };

            return $date;
        }
        ?>

    </body>
</html>
