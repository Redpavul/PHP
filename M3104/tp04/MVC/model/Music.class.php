<?php

class Music
{
	
	public $id;
	public $author;
	public $title;
	public $cover;
	public $mp3;
	public $category;

}


function loadMusicDB(){
	$f = fopen("musicDB.txt","r");
	$table = array();
	for($i=0;$i<554;$i++){
	
		$l = fgets($f);
		$l = rtrim($l);
		$array = explode ("|", $l);
		$mu = new Music;
		$mu->id=$array[0];
		$mu->author=$array[1];
		$mu->title=$array[2];
		$mu->cover=$array[3];
		$mu->mp3=$array[4];
		$mu->category=$array[5];
		$table[$array[0]]=$mu;
	}
	return $table;

}






?>