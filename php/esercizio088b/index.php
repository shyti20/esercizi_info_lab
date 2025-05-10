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
    <body>
        <form action="mid.php" method="post">
            <h1>Esercizio 88</h1>
            <h2>Shyti Franko 5AI</h2>

            <fieldset>
                <legend>Inserisci un videogioco</legend>

                <label> Nome: <input type="text" name="game" /> </label> <br />
                <label> Genere: <input type="text" name="genere" /> </label> <br />
                <label> Publisher: <input type="text" name="pub"/></label> <br />
                <label> Studio di produzione: <input type="text" name="studio"/></label><br />
                <label> Costo: <input type="number" name="costo" min="1" /></label> <br />
                <label> Voto totale: <input type="number" name="votoTot" min="1" max="100" step="1" /> </label>
                
            </fieldset>
            <input type="submit" />
            <input type="reset" />
            <a href="result.php">Visualizza riepilogo</a>
        </form>
    </body>
</html>