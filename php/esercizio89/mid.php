<?php
session_start();

if (!isset($_SESSION["film"])) {
    $_SESSION["film"][$_POST["nome"]] = $_POST["stelle"];
} else {
    if (isset($_SESSION["film"][$_POST["nome"]])) {
        $_SESSION["film"][$_POST["nome"]] = max($_POST["stelle"], $_SESSION["film"][$_POST["nome"]]);
    } else {
        $_SESSION["film"][$_POST["nome"]] = $_POST["stelle"];
    }
}

header("Location: index.php");
?>