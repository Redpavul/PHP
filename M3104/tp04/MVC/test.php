<?php 
		require_once('Music.php');
		$jukebox = new MusicDAO();
        $m = $jukebox->get(5);
        var_dump($m);

?>
