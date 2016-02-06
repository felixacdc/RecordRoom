<?php

class connectionClass extends PDO
{
	private $servidor = 'localhost';
	// private $db = 'DBMarbella';
	// private $user = 'root';
	// private $password = '';
	private $db = 'goreu_DBMarbella';
	private $user = 'goreu';
	private $password = 'RonyGO2012';

	public function __construct(){
		parent::__construct("mysql:host=$this->servidor;dbname=$this->db;charset=utf8", "$this->user", $this->password);
    $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
}


 ?>
