<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="styleTable.css" type="text/css" />
		<title> Date </title>
	</head>
	
	<body>
		<h1> Paramètres</h1>
		<table border="1">
		<thead>
				<td>Nom de variable </td>
				<td>Valeur</td>
		</thead>
		<tbody>
			<?php


			foreach($_GET as $key => $value)
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
			?>
		</tbody>
	<body>
<html>




