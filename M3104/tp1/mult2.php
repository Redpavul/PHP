#!/usr/bin/php
<?php

	print("Donnez la table : ");
	fscanf(STDIN, "%d\n", $k);
;
	printf("Table de %d\n",$k);
	for($i=1 ; $i<=10 ; $i++)
		printf("%d * %d = %d \n",$k,$i,$k*$i);

?>


