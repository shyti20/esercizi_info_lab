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
			$arr = explode(".", $string);
			
			if ($arr[0] >= "0" || $arr[0] <= "127") {
				return "L'indirizzo IPv4 $string e di classse A";
			} else if ($arr[0] >= "128" || $arr[0] <= "191") {
				return "L'indirizzo IPv4 $string e di classse B";
			} else if ($arr[0] >= "192" || $arr[0] <= "223") {
				return "L'indirizzo IPv4 $string e di classse C";
			} else if ($arr[0] >= "224" || $arr[0] <= "239") {
				return "L'indirizzo IPv4 $string e di classse D";
			} else {
				return "L'indirizzo IPv4 $string e di classse E";
			}
		}
		
		if ($_SERVER["REQUEST_METHOD"] === "POST") {
			if (empty($_POST["indirizzo"])) {
				echo "<p>non e stato inserito nessun indirizzo IPv4</p>";
			} else {
				if (isValid($_POST["indirizzo"])) {
					echo whatClass($_POST["indirizzo"]);

				} else {
					echo "<p>indirizzo IPv4 non valido</p>";
				}
			}
		} else {
			echo "<p>ERRORE</p>";
		}
		?>
	</body>
</html>