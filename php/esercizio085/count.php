<?php
$count = $_COOKIE["count"];
$count += 1;
setcookie("count", $count, time() + 60 * 20, "/");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="author" content="Shyti Franko 5AI" />
        <title>Esercizio 85</title>
    </head>
    <body>
        <h1>Esercizio 85</h1>
        <h2>Shyti Franko 5AI</h2>

        <?php
        if (!isset($_COOKIE["count"])) {
            echo "Cookie non settato";
        } else {
            if ($_COOKIE["count"] == 0) {
                echo "Primo accesso";
            } else {
                echo "Accesso numero: " .($_COOKIE["count"] + 1);
            }
        }
        ?>
    </body>
</html>