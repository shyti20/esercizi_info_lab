<?php
session_start();
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
            
            foreach (array_keys($_SESSION["game"][array_keys($_SESSION["game"])[0]]) as $key) {
                echo "<th> $key </th>";
            }
            echo "</tr>";
            
            foreach ($_SESSION["game"] as $row) {
                echo "<tr>";
                foreach ($row as $val) {
                    echo "<td> $val </td>";
                }
                echo "</tr>";
            }
            
            echo "</table>";
        ?>
    </body>
</html>