<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="author" content="Shyti Franko 5AI" />
        <title>Esercizio 74 - Invio dati</title>
    </head>
    <body>
        <h1>Esercizio 74 - Invio dati</h1>
        <h2>Shyti Franko 5AI</h2>
        <form name="data" action="ricezione.php" method="post">
            <fieldset>
                <legend>Data e ora del evento</legend>
                <label>Data <input type="date" name="date" /></label><br />
                <label>Ora <input type="number" min="0" max="24" step="1" name="ora"/></label>
                <label>minuti <input type="number" min="0" max="59" step="1" name="min"/></label>
            </fieldset>
            <fieldset>
                <legend>Luogo dell'evento</legend>
                <label>Regione 
                    <?php
                    $regioni = ["Piemonte"," Valle d'Aosta"," Lombardia"," Trentino-Alto Adige"," Veneto"," Friuli-Venezia Giulia"," Liguria"," Emilia-Romagna"," Toscana"," Umbria"," Marche"," Lazio"," Abruzzo"," Molise"," Campania"," Puglia"," Basilicata"," Calabria"," Sicilia"," Sardegna"];
                    ?> 
                    <select name="regione">
                        <?php
                        foreach($regioni as $val) {
                            echo "<option>". $val. "</option>";
                        }
                        ?>
                    </select>
                </label><br />
                <label>Provincia
                    <select name="provincia">
                        <option>Reggio Emilia</option>
                    </select>
                </label><br />
                <label>Comune 
                    <select name="comune">
                        <option value="Reggiolo">Reggiolo</option>
                        <option value="Guastalla">Guastalla</option>
                        <option value="Reggio Emilia">Reggio Emilia</option>
                    </select>
                </label><br />
            </fieldset>
            <fieldset>
                <legend>Valutazione dell’intensità</legend>
                <label>Grado
                    <select name="grado">
                        <option value="I impercettibile">I impercettibile</option>
                        <option value="II molto leggera">II molto leggera</option>
                        <option value="III leggera">III leggera</option>
                        <option value="IV moderata ">IV moderata </option>
                        <option value="V piuttosto forte">V piuttosto forte</option>
                        <option value="VI forte">VI forte</option>
                        <option value="VII molto forte">VII molto forte</option>
                        <option value="VIII rovinosa">VIII rovinosa</option>
                        <option value="IX distruttiva">IX distruttiva</option>
                        <option value="X completamente distruttiva">X completamente distruttiva</option>
                        <option value="XI catastrofica">XI catastrofica</option>
                        <option value="XII apocalittica">XII apocalittica</option>
                    </select>
                </label>
            </fieldset>
            <fieldset>
                <legend>Piano da cui si e` sentita la scossa</legend>
                <label>Interrato <input type="radio" name="piano" value="Interrato"/></label><br />
                <label>Dal primo al decimo piano <input type="radio" name="piano" value="dal primo al decimo"/></label><br />
                <label>Superiore a 10 <input type="radio" name="piano" value="Superiore a 10"/></label><br />
            </fieldset>
            <fieldset>
                <legend>Piani dell'edificio</legend>
                <input type="number" min="1" max="50" step="1" name="numeroPiani"/>
            </fieldset>
            <p>
                <input type="submit" value="Invio" />
                <input type="reset" value="Reset" />
            </p>
        </form>
    </body>
</html>