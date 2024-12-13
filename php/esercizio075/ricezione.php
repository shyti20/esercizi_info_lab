<DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="author" content="Shyti Franko 5AI" />
        <title>Esercizio 75 - Ricezione dati</title>
        <style>
            table {
                border-collapse: collapse;
            }
            th, td {
                border: 1px solid black;
                padding: 10px;
                text-align: center;
            }
            .red {
                color: red;
            }
        </style>
    </head>
    <body>
        <h1>Esercizio 75 - Ricezione dati</h1>
        <h2>Shyti Franko 5AI</h2>
        <?php
        date_default_timezone_set("Europe/Rome");
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if (empty($_POST["nome"]) && empty($_POST["cognome"])) {
                $data["Nome e Cognome"] = "<span class=\"red\">Nome o Cognome non inserito</span>";
            } else {
                $data["Nome e Cognome"] = $_POST["nome"]. " ". $_POST["cognome"];
            }

            if (empty($_POST["dataNascita"])) {
                $data["Data di Nascita"] = "<span class=\"red\">Data non inserita</span>";
            } else {
                $dataN = explode("-", $_POST["dataNascita"]);
                if (checkdate($dataN[1], $dataN[2], $dataN[0])) {
                    $data["Data di Nascita"] = $dataN[2]. "/". $dataN[1]. "/". $dataN[0];
                } else {
                    $data["Data di Nascita"] = "<span class=\"red\">Data non valida</span>";
                }
            }

            if (empty($_POST["email"])) {
                $data["Email"] = "<span class=\"red\">Email non inserita</span>";
            } else {
                $data["Email"] = $_POST["email"];
            }

            if (empty($_POST["sito"])) {
                $data["Sito web"] = "<span class=\"red\">Sito web non inserito</span>";
            } else {
                $data["Sito web"] = $_POST["sito"];
            }
            
            if (isset($_POST["motivo"])) {
                $data["Motivo"] = $_POST["motivo"];
            } else {
                $data["Motivo"] = "<span class=\"red\">Nessun motivo non inserita</span>";
            }

            $data["Data e ora richiesta"] = date("d/m/y H:i:s");
        ?>
        <table>
            <?php
            foreach ($data as $key => $val) {
                echo "<tr><th>". $key. "</th><td>". $val. "</td></tr>";
            }
            ?>
        </table>
        <?php
        } else {
            echo "<p class=\"red\">Errore</p>";
        }
        ?>
    </body>
</html>