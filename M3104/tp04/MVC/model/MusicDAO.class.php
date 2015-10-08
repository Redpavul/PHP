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

	public function getID($id){
	
		$sql = "SELECT * FROM music WHERE id ='$id'";
		$sth = $this->db->query($sql);
		$result = $sth->fetchAll(PDO::FETCH_CLASS,"Music");
		var_dump($result);
		return $result; 
	}
}


?>
