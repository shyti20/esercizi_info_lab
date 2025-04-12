<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="author" content="Shyti Franko 5AI" />
        <title>Esercizio 84</title>
    </head>
    <body>
        <h1>Esercizio 84</h1>
        <h2>Shyti Franko 5AI</h2>

        <?php
        if (!isset($_COOKIE["nome"])) {
            echo "Cookie nome non settato<br />";
        } else {
            echo "Cookie nome: " .$_COOKIE["nome"] ."<br />";
        }
        
        if (!isset($_COOKIE["cognome"])) {
            echo "Cookie cognome non settato <br />";
        } else {
            echo "Cookie cognome: " .$_COOKIE["cognome"] ."<br />";
        }
        ?>
    </body>
</html>