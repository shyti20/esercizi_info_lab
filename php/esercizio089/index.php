<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 89</title>
        <meta charset="UTF-8" />
        <meta name="author" content="Shyti Franko 5AI" />
    </head>
    <body>
        <form action="mid.php" method="post">
            <h1>Esercizio 89</h1>
            <h2>Shyti Franko 5AI</h2>
            <fieldset>
                <legend>Inserisci un film</legend>
                <label> Nome: <input type="text" name="nome" /> </label>
                <label> Numero di stelle <input type="number" name="stelle" step="0.5" min="0" max="5" /> 
            </fieldset>
            <input type="submit" />
            <input type="reset" />
            <a href="result.php">Visualizza riepilogo</a>
        </form>
    </body>
</html>