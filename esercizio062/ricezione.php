<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="Shyti Franko 5AI" />
		<title>Esercizio 62 - Ricezione dati</title>
	</head>
	<body>
		<h1>Esercizio 62 - Ricezione dati</h1>
		<h2>Shyti Franko 5AI</h2>
		<?php

		function isValid($string) {
			if (str_contains($string, "https://www.youtube.com/"))
				return true;
			return false;
		}

		if($_SERVER["REQUEST_METHOD"] === "POST") {
			if (empty($_POST["link"])) {
				if (isValid($_POST["link"])) {
					$string = str_replace("watch?v=", "", $_POST["link"]);
					echo "<p>Link prima: ". $_POST["link"]. "</p>";
					echo "<p>Link dopo: $string";

				} else {
					echo "<p>Link non valido</p>";
				}
			} else {
				echo "<p> Non e stato inserito nessun link</p>";
			}
		} else {
			echo "<p>ERRORE</p>";
		}
		?>
	</body>
</html>