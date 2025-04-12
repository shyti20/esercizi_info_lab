<?php
if (isset($_COOKIE["array"])) {
    for ($i = 0; $i < count($_COOKIE["array"]); $i += 1) {
        setcookie("array[$i]", "", time() - 1, "/");
    }
}
header("Location: index.php");

