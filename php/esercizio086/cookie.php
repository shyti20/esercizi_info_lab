<?php
setcookie("accesso", 0, time() + 60 * 20, "/");
header("Location: index.php");