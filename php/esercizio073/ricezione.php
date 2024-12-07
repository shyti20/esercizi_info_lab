<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="Shyti Franko 5AI" />
		<title>Esercizio 73 - Ricezione dati</title>
	</head>
	<body>
		<h1>Esercizio 73 - Ricezione dati</h1>
		<h2>Shyti Franko 5AI</h2>
		<?php
		if($_SERVER["REQUEST_METHOD"] === "POST") {
			if (empty($_POST["eta"])) {
				$data["Eta"] = "<span class=\"red\">Non hai inserito la tua eta</span>";
			} else {
				$data["Eta"] = $_POST["eta"];
			}

			if (isset($_POST["sesso"])) {
				$data["Sesso"] = $_POST["sesso"];
			} else {
				
			}

			$data["Universita"] = $_POST["uni"];

			if (empty($_POST["stato"])) {

			} else {
				$data["Voto Esame di Stato"] = $_POST["votoEsameStato"];
				if (isset($_POST["lodeEsameStato"])) {
					$data["Voto esame di Stato"] .= "e lode";
				}
			}
			
			if (isset($_POST["esami"])) {
				$data["Voti degli ultimi 5 esami"] = $_POST["esami"];
			} else {

			}

		} else {
			echo "<p>ERRORE</p>";
		}
		?>
	</body>
</html>