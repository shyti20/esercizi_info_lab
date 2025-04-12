<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        setcookie("nome", $_POST["name"], time() + 60 * 20, "/");
        setcookie("cognome", $_POST["surname"], time() + 60 * 20, "/");
        
?>
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
        echo "Nome: " .$_POST["name"] ."<br />";
        echo "Cognome: " .$_POST["surname"] ."<br />";
        ?>
        <a href="welcome.php"><button>Wellcome page</button></a>
    </body>
</html>
<?php
    } else {
        echo "Errore";
    }
?>