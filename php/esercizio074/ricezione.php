<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="author" content="Shyti Franko 5AI" />
        <title>Esercizio 74 - Ricezione dati</title>
        <style>
           table {
                border-collapse: collapse;
            }

            th, td {
                border: 1px solid #ddd;
                padding: 5px 10px;
            }

            th {
                text-align: left;
            }
            
        </style>
    </head>
    <body>
        <h1>Esercizio 74 - Ricezione dati</h1>
        <h2>Shyti Franko 5AI</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $data["Data e ora evento"] = "";
            if (empty($_POST["date"]) && empty($_POST["ora"]) && empty($_POST["min"])) {

            } else {
                $dataOra = explode("-", $_POST["date"]);
                if (checkdate($dataOra[1], $dataOra[2], $dataOra[0])) {
                    $data["Data e ora evento"] .= "Data: ". $_POST["date"]. " Ora ". $_POST["ora"]. ":". $_POST["min"];
                    //echo "". $data["Data e ora evento"];
                }
            }

            $data["Luogo"] = "";
            //$data["Luogo"] .= "Regione: ". $_POST["regione"]. " Provincia: ". $_POST["provincia"]. " Comune: ". $_POST["comune"];
        
            $data["Intensita scossa"] = $_POST["grado"];

            if (isset($_POST["piano"])) {
                $data["Piano da cui si e` sentita la scossa"] = $_POST["piano"];
            } else {

            }

            if (empty($_POST["numeroPiani"])) {

            } else {
                $data["Numero piani dell'edificio"] = $_POST["numeroPiani"];
            }
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

        }
        ?>
    </body>
</html>