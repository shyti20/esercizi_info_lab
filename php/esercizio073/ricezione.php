<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="Shyti Franko 5AI" />
		<title>Esercizio 73 - Ricezione dati</title>
		<style>
			table {
				border-collapse: collapse;
			}
			th, td {
				border: 1px solid #ddd;
				padding: 5px 10px;
			}

			th {
				text-align: left;
			}

			ul {
				margin: 0;
				padding-left: 20px;
			}
		</style>
	</head>
	<body>
		<h1>Esercizio 73 - Ricezione dati</h1>
		<h2>Shyti Franko 5AI</h2>
		<?php
		if($_SERVER["REQUEST_METHOD"] === "POST") {
			if (isset($_POST["autorizzazione"])) {
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
						$data["Voto esame di Stato"] .= " e lode";
					}
				}
				
				if (empty($_POST["esame1"])) {
					
				} else {
					$data["Esame 1"] = $_POST["esame1"];
					if (isset($_POST["lodeEsame1"])) {
						$data["Esame 1"] .= " e lode";
					}
				}
	
				if (empty($_POST["esame2"])) {
					
				} else {
					$data["Esame 2"] = $_POST["esame2"];
					if (isset($_POST["lodeEsame2"])) {
						$data["Esame 2"] .= " e lode";
					}
				}
	
				if (empty($_POST["esame3"])) {
					
				} else {
					$data["Esame 3"] = $_POST["esame3"];
					if (isset($_POST["lodeEsame1"])) {
						$data["Esame 3"] .= " e lode";
					}
				}
	
				if (empty($_POST["esame4"])) {
					
				} else {
					$data["Esame 4"] = $_POST["esame4"];
					if (isset($_POST["lodeEsame4"])) {
						$data["Esame 4"] .= " e lode";
					}
				}
	
				if (empty($_POST["esame5"])) {
					
				} else {
					$data["Esame 5"] = $_POST["esame5"];
					if (isset($_POST["lodeEsame5"])) {
						$data["Esame 5"] .= " e lode";
					}
				}
				if ($_POST["autorizzazione"] == true) {
					$data["Autorizzazione"] = "Acconsentita";
				}
				//$data["Autorizzazione"] = $_POST["autorizzazione"];
			} else {
				echo "<p class=\"red\">Autorizzazione non data</p>";
			}

		} else {
			echo "<p>ERRORE</p>";
		}
		?>
		<table>
			<?php
				foreach ($data as $key => $val) {
					echo "<tr><th>". $key. "</th><td>". $val. "</td></tr>";
				}
			?>
		</table>
	</body>
</html>