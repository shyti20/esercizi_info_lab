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
    <body>
        <form action="mid.php" method="post">
            <h1>Esercizio 90</h1>
            <h2>Shyti Franko 5AI</h2>   
            <fieldset>
                <legend>Inserisci un libro</legend>
                <label>Titolo: <input type="text" name="libro" required="required" /></label><br />
                <label>Livello di gradimento: <input type="number" min="-3" max="3" step="1" name="voto" required="required"/></label>
            </fieldset>
            <input type="submit" />
            <input type="reset" /><br />
            <a href="result.php">Visualizza resocondo</a>
        </form>
    </body>
</html>