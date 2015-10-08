<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="styleTable.css" type="text/css" />
		<title> Musique</title>
	</head>
	
	<body>
		<h1> Playing</h1>
		
		<?php

		if(!isset($_GET["music"])){
		?>
		<img src="jukebox/Justice/D.A.N.C.E.jpeg", width=200 height=200>
		<img src="jukebox/Ke$ha/Tiktok.jpeg", width=200 height=200>
		<img src="jukebox/The Black Eyed Peas/I Gotta Feeling.jpeg", width=200 height=200>
		<?php
		}
		else{

			switch($_GET["music"]){
			case "D.A.N.C.E" 
		?>
			<img src="jukebox/Justice/D.A.N.C.E.jpeg", width=200 height=200>
			</br>

			<audio src="jukebox/Justice/D.A.N.C.E.mp3" controls="" autoplay="" width=200></audio>
		<?php
			break;

			case "Tiktok"
		?>
			<img src=jukebox/Ke$ha/Tiktok.jpeg", width=200 height=200>
			</br>

			<audio src="jukebox/Ke$ha/Tiktok.mp3" controls="" autoplay="" width=200></audio>

		<?php
			break;
			case "Black eyed Peas" 

		?>

			<img src="jukebox/The Black Eyed Peas/I Gotta Feeling.jpeg", width=200 height=200>
			</br>
			<audio src="jukebox/The Black Eyed Peas/I Gotta Feeling.mp3" controls="" autoplay="" width=200></audio>
			
		<?php
			break;
		}	
	}
		?>

		
	</body>

</html>
