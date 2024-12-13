<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="author" content="Shyti Franko 5AI" />
        <title>Esercizio 75 - Invio dati</title>
    </head>
    <body>
        <h1>Esercizio 75 - Invio dati</h1>
        <h2>Shyti Franko 5AI</h2>
        <form action="ricezione.php" name="data" method="post">
            <fieldset>
                <legend>Dati personali</legend>
                <p>
                    <label>Nome <input type="textarea" name="nome" placeholder="Mario"/></lable><br />
                </p>
                <p>
                    <label>Cognome <input type="textarea" name="cognome" placeholder="Rossi"/></lable><br />
                </p>
                <p>
                    <label>Data di nascita <input type="date" name="dataNascita" /></label><br />
                </p>
                <p>
                    <label>Email <input type="email" name="email" placeholder="nome.cognome@itisvinci.com" /></label>
                </p>
            </fieldset>
            <fieldset>
                <legend>Dati sito web</legend>
                <p>
                    <label>Sito web <input type="url" name="sito" placeholder="www.google.com" /></label>
                </p>
                Motivazione<br />
                <input type="radio" name="motivo" value="Siti con risorse didattiche">Siti con risorse didattiche</input><br />
                <input type="radio" name="motivo" value="Siti con software didattici gratuiti">Siti con software didattici gratuiti</input><br />
                <input type="radio" name="motivo" value="Articoli per studenti e docenti">Articoli per studenti e docenti</input><br />
                <input type="radio" name="motivo" value="Riviste e giochi matematici">Riviste e giochi matematici</input><br />
                <input type="radio" name="motivo" value="Siti istituzionali">Siti istituzionali</input>
            </fieldset> 
            <p>
                <input type="submit" value="Invio" />
                <input type="reset" value="Reset" />
            </p>
        </form>
    </body>
</html>