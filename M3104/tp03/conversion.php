<!DOCTYPE html>
<?php

	foreach($_GET as $key => $value)



?>

<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="styleTable.css" type="text/css" />
		<title> C to F</title>
	</head>
	
	<body>
		<form>
			<fieldset>
			<legend> Conversion ! </legend>
			<p>Entrez une valeur : </p>

			<p>
			<input type="number"  autofocus > Celsius égal 
			<input type="number"  readonly> Fahrenheit. 
			<input value="Convertir" type="submit" action="Convertir">
			</p>

			</fieldset>


		</form>
	</body>

</html>
