<?php
session_start();

if (!isset($_SESSION["libro"])) {
    $_SESSION["libro"][$_POST["libro"]] = $_POST["voto"];
} else {
    if (isset($_SESSION["libro"][$_POST["libro"]])) {
        $_SESSION["libro"][$_POST["libro"]] = max($_SESSION["libro"][$_POST["libro"]], $_POST["voto"]);
    } else {
        $_SESSION["libro"][$_POST["libro"]] = $_POST["voto"];
    }
}

header("Location: index.php");
?>