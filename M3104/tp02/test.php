<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title> Array  </title>
	</head>
	
	<body>
		<h1> Tableau associatif</h1>
		<table border="1">
		<thead>
			<td>Nom d'abréviation </td>
			<td>Définition</td>
		</thead>
		<tbody>




<?php

	/*$a = 1;
	$a = '0 est une chaine';
	$b = 2*5;

	if ($a == $b ) 
		echo "<p>'$a' et '$b' sont équivalents</p>";
	if ($a === $b ) 
		echo "<p>'$a' et '$b' sont identiques</p>";
	else 
		echo "<p>$a  et $b sont differents</p>";
	*/
	
/*	function bonjour() {
		if (isset($nom))
			echo "Bonjour $nom</br>";
		else
			echo "Mais qui etes vous ?</br>";
	}

	function hello() {
		global $nom;
		if (isset($nom))
			echo "Hello $nom</br>";
		else 
			echo "Mais qui etes vous ?</br>";
	}

	function salut() {
  		static $nom;
		if (isset($nom)) 
    		echo "Salut $nom</br>";
		else 
			echo "Mais qui etes vous ?</br>";
		$nom = "Cyprien";
		}

	bonjour();
	$nom="Arthur";
	bonjour();
    
	hello();
	$nom="Marcel";
	hello();

	salut();
	$nom="Mohamed";
	salut();*/

$array = array(

	"PHP" => "Hypertext PreProcessor",
	"HTML" => "HyperText Markeup Language",
	"XML" => "eXtended Markeup Language",
	"CSS" => "Cascading Style Sheets"
	);

function abbr($code)
{
	global $array;
	echo $array[$code];

}

function abbrAll()
{
	global $array;
	foreach($array as $key => $value)
	{
		print("<tr>");
		print("<td>");
		echo $key;

		print("</td>");
		print("<td>");


		echo $value;
		
		print("</td>");
		print("</tr>");



	}


}

//abbr("PHP");

abbrAll();

?>

		</tbody>
	<body>
<html>






