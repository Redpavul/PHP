<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="styleTable.css" type="text/css" />
		<title> Musique</title>
	</head>
	
	<body>
		<h1> Jukebox</h1>
		
		<?php

		if(!isset($_GET["music"])){
			for($i=1;$i<=10;$i++)
			{
			?>
				<a href="main1.php?music=<?php echo (int)$tmp[$i]->id;?>">
				<img src="http://www-info.iut2.upmf-grenoble.fr/intranet/enseignements/M3104/TP02/data/img/<?php echo $tmp[$i]->cover?>", width=200 height=200></a>
			<?php
			}
		?>
		<?php
		}
		else{
			$a=$_GET["music"];
			
			?>

			
				<img src="http://www-info.iut2.upmf-grenoble.fr/intranet/enseignements/M3104/TP02/data/img/<?php echo $tmp[$a]->cover?>", width=200 height=200></br>
				<audio src="http://www-info.iut2.upmf-grenoble.fr/intranet/enseignements/M3104/TP02/data/mp3/<?php echo $tmp[$a]->mp3 ?> " controls="" autoplay="" width=200></audio>
				
			<?php	
		}	
	
		?>

		
	</body>

</html>


