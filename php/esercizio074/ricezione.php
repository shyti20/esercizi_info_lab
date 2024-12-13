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
                text-align: center;
            }
            .red {
                color: red;
            }
        </style>
    </head>
    <body>
        <h1>Esercizio 74 - Ricezione dati</h1>
        <h2>Shyti Franko 5AI</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $data["Data e ora evento"] = "";
            if (empty($_POST["date"])) {
                $data["Data e ora evento"] = "<span class=\"red\">Non hai inserito nulla</span>";
            } else {
                $data["Data e ora evento"] = $_POST["date"];
            }

            if (empty($_POST["regione"]) && empty($_POST["comune"]) && empty($_POST["provincia"])) {
                $data["Luogo"] = "<span class=\"red\">Non hai inserito nulla</span>";
            } else {
                $data["Luogo"] = "Regione: ". $_POST["regione"]. "<br /> Provincia: ". $_POST["provincia"]. "<br />  Comune: ". $_POST["comune"];
            }
        
            if (isset($_POST["grado"])) {
                $data["Intensita scossa"] = $_POST["grado"];
            } else {
                $data["Intensita scossa"] = "<span class=\"red\">Non hai inserito nulla</span>";
            }

            if (isset($_POST["piano"])) {
                $data["Piano da cui si e` sentita la scossa"] = $_POST["piano"];
            } else {
                $data["Piano da cui si e` sentita la scossa"] = "<span class=\"red\">Non hai inserito nulla</span>";
            }

            if (empty($_POST["numeroPiani"])) {
                $data["Numero di piani dell'edificio"] = "<span class=\"red\">Non hai inserito nulla</span>";
            } else {
                $data["Numero di piani dell'edificio"] = $_POST["numeroPiani"];
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