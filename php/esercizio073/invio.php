<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="Shyti Franko 5AI" />
		<title>Esercizio 73 - Invio dati</title>
	</head>
	<body>
		<h1>Esercizio 73 - Invio dati</h1>
		<h2>Shyti Franko 5AI</h2>
		<form name="dati" action="ricezione.php" method="post">
			<p>Inserici i tuoi dati</p>
			<p>Inserisci l'eta</p>
			<input type="number" name="eta" min="18" max="70" step="1" />

			<p>Inserisci il sesso</p>
			<p>
				<input type="radio" name="sesso" value="M">M</input>
				<input type="radio" name="sesso" value="F">F</input>
			</p>

			
			<hr>
				<p>Inserisci l'universita di appartenenza</p>
				<select name="uni">
					<option value="Bologna">Bologna</option>
					<option value="ModenaReggio">Modena - Reggio Emilia</option>
					<option value="Parma">Parma</option>
					<option value="Ferrara">Ferrara</option>
				</select>
			</hr>
			
			
			<hr>
				<p>Inserisci il voto del esame di stato</p>
				<input type="number" name="votoEsameStato" min="60" max="100" step="1" /> <input type="checkbox" name="lodeEsameStato" value="true">Lode</input>
			</hr>
			
			<hr>
				<p>Voti degli ultimi 5 esami</p>
				<p>
					<p>Voto esame 1</p>
					<input type="number" name="esame1" min="18" max="30" step="1" /> <input type="checkbox" name="lodeEsame1" value="true">Lode</input><br />
					<laber>Credito esame 1: <input type="number" name="crediti1" min="1" max="10" step="1" /></laber> 	
				</p>
			</hr>
			
			
			
			<hr>
				<p>
					<p>Voto esame 2</p>
					<input type="number" name="esame2" min="18" max="30" step="1" /> <input type="checkbox" name="lodeEsame2" value="Lode">Lode</input><br />			
					<laber>Credito esame 2: <input type="number" name="crediti2" min="1" max="10" step="1" /></laber> 	
				</p>
			</hr>
			

			<hr>
				<p>
					<p>Voto esame 3</p>
					<input type="number" name="esame3" min="18" max="30" step="1" /> <input type="checkbox" name="lodeEsame3" value="Lode">Lode</input><br />	
					<laber>Credito esame 3: <input type="number" name="crediti3" min="1" max="10" step="1" /></laber> 	
				</p>
			</hr>
			
			
			<hr>
				<p>
					<p>Voto esame 4</p>
					<input type="number" name="esame4" min="18" max="30" step="1" /> <input type="checkbox" name="lodeEsame3" value="Lode">Lode</input><br />
					<laber>Credito esame 4: <input type="number" name="crediti4" min="1" max="10" step="1" />	</laber> 
				</p>
			</hr>
			
			<hr>
				<p>
					<p>Voto esame 5</p>
					<input type="number" name="esame5" min="18" max="30" step="1" /> <input type="checkbox" name="lodeEsame4" value="Lode">Lode</input><br />
					<laber>Credito esame 5: <input type="number" name="crediti5" min="1" max="10" step="1" /></laber> 
						
				</p>
			</hr>
			
			<hr>
				<p>Autorizzazione esplicita dati personali</p>
				<p>
					<input type="radio" name="autorizzazione" value="true">Acconsento</input>
					<input type="radio" name="autorizzazione" value="false">Non acconsento</input>
				</p>
			</hr>
			<input type="submit" value="Invio" />
			<input type="reset" value="Reset" />
		</form>
	</body>
</html>