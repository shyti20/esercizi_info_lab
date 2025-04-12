<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="author" content="Shyti Franko 5AI" />
        <title>Esercizio 83</title>
    </head>
    <body>
        <h1>Esercizio 83</h1>
        <h2>Shyti Franko 5AI</h2>
        <?php
        if (!isset($_COOKIE["date_time"])) {
            echo "cookie not set";
        } else {
            echo $_COOKIE["date_time"];
        }
        ?>
    </body>
</html>