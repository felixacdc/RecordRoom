<?php

class connectionClass extends PDO
{
	private $servidor = 'localhost';
	private $db = 'marbella_DBMarbella';
	private $user = 'root';
	private $password = '';
	// private $db = 'marbella_DBMarbella';
	// private $user = 'marbella';
	// private $password = 'Guate.16m';

	public function __construct(){
		parent::__construct("mysql:host=$this->servidor;dbname=$this->db;charset=utf8", "$this->user", $this->password);
    $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
}


 ?>
