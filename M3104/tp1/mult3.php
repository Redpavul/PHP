#!/usr/bin/php


<!DOCTYPE HTML>

<HTML>
 <HEAD>
  <TITLE>mult3</TITLE>
 </HEAD>

 <BODY>
		<table border="1" width="200">
		<?php
		$col = 10;
		$lig = 10;
		?>

		<thead>
			<th>
			
			<?php
			for($i=1; $i<=$col;$i++) {
			?>

			<td><?php echo $i;?></td>
			
			<?php
			}
			?>
			
			</th>
		</thead>

		<tbody>
			
			<?php
			for ($i=1; $i<=$lig; $i++) { 
			?>
				<tr>
				<?php
				for ($j=1; $j<=$col; $j++) {
			
					if ($j==1) { 
					?>

						<td><?php echo $i; ?></td>

					<?php
					}
					?>

					<td><?php echo $i*$j ?></td>
				<?php
				}
				?>
				</tr>
				<?php
				$j=1;
			}
			?>
		</tbody>
		</table>

    </BODY>
</HTML>

