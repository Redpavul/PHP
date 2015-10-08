<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="styleTable.css" type="text/css" />
		<title> Date </title>
	</head>
	
	<body>
		<h1> Fuseaux horaires</h1>
		<table border="1">
		<thead>
			<th>

				<td>Heure  /   date  </td>
			</th>
		</thead>
		<tbody>
			<?php
			$location[0]='Europe/Paris';
			$location[1]='Asia/Singapore';
			
			foreach($location as $value)
			{
			date_default_timezone_set($value);
			
			print("<tr>");
			print("<td>");
			
		
			
			echo $value;
			
		
			print("</td>");
			print("<td>");
			

			echo date("H:i:s d/m/Y");
			
			print("</td>");
			print("</tr>");
			
			}
			


			?>
		</tbody>
	</body>
</html>
