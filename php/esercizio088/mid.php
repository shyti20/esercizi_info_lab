<?php
session_start();

if (!isset($_SESSION["game"])) {
    $_SESSION["game"][$_POST["game"]] = $_POST["voto"];
} else {
    if (isset($_SESSION["game"][$_POST["game"]])) {
        $_SESSION["game"][$_POST["game"]] = max($_SESSION["game"][$_POST["game"]], $_POST["voto"]);
    } else {
        $_SESSION["game"][$_POST["game"]] = $_POST["voto"];
    }
}
header("Location: index.php");
?>