<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="Shyti Franko 5AI" />
		<title>Esercizio 61</title>
	</head>
	<body>
		<h1>Esercizio 61 - Ricezione dati</h1>
		<h2>Shyti Franko 5AI</h2>
		<?php
		define()
		function isValid($string) {
			$arr = explode(".", $string);
			if (count($arr) == 4) {
				$i = 0;
				foreach ($arr as $value) {
					if (is_numeric($value)) {
						$i++;
					}
				}
				if ($i == 4) {
					return true;
				}
			}
			return false;
		}

		function whatClass($string) {

		}
		
		if ($_SERVER["REQUEST_METHOD"] === "POST") {
			if (empty($_POST["indirizzo"])) {
				$data["indirizzo"] = "<p>non e stato inserito nessun indirizzo IPv4</p>";
			} else {
				if (isValid($_POST["indirizzo"])) {
					$classIP = whatClass($_POST["indirizzo"]);

				} else {
					$data["indirizzo"] = "<p>indirizzo IPv4 non valido</p>";
				}
			}
		} else {
			echo "<p>ERRORE</p>";
		}
		?>
	</body>
</html>