<?php

class MusicDAO
{
	private $db;


	public function __construct($path)
	{
		$database = 'sqlite:'.$path.'/music.db';
		try { 
		$this->db = new PDO($database);
		}
	catch (PDOException $e){ 
		die("erreur de connexion:".$e->getMessage()); 
		} 

	}

	public function get($id){
	
		$sql = "SELECT * FROM music WHERE id ='$id'";
		$sth = $this->db->query($sql);
		$result = $sth->fetchAll(PDO::FETCH_CLASS,"Music");
		return $result; 
	}
}


?>
