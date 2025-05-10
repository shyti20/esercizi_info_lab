<?php
session_start();

if (!isset($_SESSION["game"])) {
    $_SESSION["game"][$_POST["game"]] = [
        "Nome" => $_POST["game"],
        "Genere" => $_POST["genere"],
        "Publisher" => $_POST["pub"],
        "Studio di produzione" => $_POST["studio"],
        "Costo" => $_POST["costo"],
        "Voto totale" => $_POST["votoTot"]
    ];
} else {
    if (isset($_SESSION["game"][$_POST["game"]])) {
        $_SESSION["game"][$_POST["game"]]["Voto totale"] = max($_SESSION["game"][$_POST["game"]]["Voto totale"], $_POST["votoTot"]);
        $_SESSION["game"][$_POST["game"]]["Costo"] = max($_SESSION["game"][$_POST["game"]]["Costo"], $_POST["costo"]);
    } else {
        $_SESSION["game"][$_POST["game"]] = [
            "Nome" => $_POST["game"],
            "Genere" => $_POST["genere"],
            "Publisher" => $_POST["pub"],
            "Studio di produzione" => $_POST["studio"],
            "Costo" => $_POST["costo"],
            "Voto totale" => $_POST["votoTot"]
        ];
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="author" content="Shyti Franko 5AI" />
        <title>Esercizio 88b</title>
    </head>
    <style>
        table {
            border-collapse: collapse;
        }       

        th, td {
            padding: 10px 20px;
            border: 1px solid #ddd;
        }

    </style>
    <body>
    <?php
            echo "<table><tr>";
            foreach (array_keys($_SESSION["game"][$_POST["game"]]) as $key) {
                
                echo "<th> $key </th>";
            }
            echo "</tr>";
            echo "<tr>";
            foreach ($_SESSION["game"][$_POST["game"]] as $row) {
                echo "<td>$row</td>";
            }
            echo "</tr>";
            echo "</table>";
        ?>
        <a href="index.php">Inserisci un altro videogioco</a>
    </body>
</html>