<?php
setcookie("count", 0, time() + 60 * 20, "/");
header("Location: count.php");