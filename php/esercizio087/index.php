<?php
if (!isset($_COOKIE["array"])) {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        setcookie("array[0]", $_POST["num"], time() + 60 * 20, "/");
    } 
} else {
    $count = count($_COOKIE["array"]);
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        setcookie("array[$count]", $_POST["num"], time() + 60 * 20, "/");
    } else {
        setcookie("array[$count]", 0, time() + 60 * 20, "/");
    } 
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="author" content="Shyti Franko 5AI" />
        <title>Esercizio 87</title>
    </head>
    <body>
        <form action="index.php" method="post">
            <h1>Esercizio 87</h1>
            <h2>Shyti Franko 5AI</h2>
            <input type="number" step="1" name="num"/><br />
            <?php
            if (isset($_COOKIE["array"])) {
                $temp = $_COOKIE["array"];
                $temp[count($temp)] = $_POST["num"];
                echo "Massimo: " .max($temp) ."<br />";
                echo "Minimo: " .min($temp) ."<br />";
                echo "Somma: " .array_sum($temp) ."<br />";
                echo "Media: " .array_sum($temp) / count($temp) ."<br />";
                echo "Numero dei valori: " .count($temp) + 1 ."<br />";
            } else{
                if ($_SERVER["REQUEST_METHOD"] === "POST") {
                    echo "Massimo: " .$_POST["num"] ."<br />";
                    echo "Minimo: " .$_POST["num"] ."<br />";
                    echo "Somma: " .$_POST["num"]."<br />";
                    echo "Media: " .$_POST["num"] ."<br />";    
                    echo "Numero dei valori: 1 <br />";
                }
            }
            ?>
            
            <input type="submit" />
        </form>      
        <a href="cancellazione_cookie.php">Cancellazione cookie</a>
    </body>
</html>