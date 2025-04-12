<?php
setcookie("accesso", date("Y-m-d H:i:s"), time() + 60 * 20, "/");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="author" content="Shyti Franko 5AI" />
        <title>Esercizio 85</title>
    </head>
    <body>
        <form action="cancellazione_cookie.php" method="post">
            <h1>Esercizio 86</h1>
            <h2>Shyti Franko 5AI</h2>

            <?php
            if (!isset($_COOKIE["accesso"])) {
                echo "Benvenuto<br />";
                echo "Data ora dell'accesso: " .date("Y-m-d H:i:s") ."<br />";
            } else {
                echo "Data ora dell'accesso: " .date("Y-m-d H:i:s") ."<br />";
            }
            ?>
            <input type="submit" value="Cancella cookie" />
        </form>
        
    </body>
</html>