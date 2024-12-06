<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="Shyti Franko 5AI" />
		<title>Esercizio 61</title>
	</head>
	<body>
		<h1>Esercizio 61 - Invio dati</h1>
		<h2>Shyti Franko 5AI</h2>
		<form name="dati" action="ricezione.php" method="post">
			<p>Inserisci un indirizzo IPv4</p>
			<textarea placeholder="192.168.0.0" name="indirizzo" required="required"></textarea>
			<p>
				<input type="submit" value="Invio" />
				<input type="reset" value="Reset" />
			</p>
		</form>
	</body>
</html>