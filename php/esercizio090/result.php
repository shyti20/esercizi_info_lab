<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 90</title>
        <meta charset="UTF-8" />
        <meta name="author" content="Shyti Franko 5AI" />
    </head>
    <style>
            table {
               border-collapse: collapse; 
            }
            th, td {
                padding: 10px;
                border: 1px solid black;
            }
    </style>
    <body>
        <h1>Esercizio 90</h1>
        <h2>Shyti Franko 5AI</h2>
        <?php
            if (isset($_SESSION["libro"])) {
                echo "<table><tr>";

                foreach(array_keys($_SESSION["libro"]) as $key) {
                    echo "<th> $key </th>";
                }
                echo "</tr>";
                echo "<tr>";
                foreach ($_SESSION["libro"] as $row => $val) {

                    echo "<td> $val </td>";

                }
                echo "</tr>";
                echo "</table>";
            } else {
                echo "Sessione inesistente";
            }
        ?>   
    </body>
</html>