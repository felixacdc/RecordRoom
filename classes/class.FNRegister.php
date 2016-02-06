<?php

class Register
{
	private $name;
	private $lastname;
	private $email;
	private $phone;

	public function __construct($nameE, $lastnameE, $emailE, $phoneE){

		$this->name = $nameE;
		$this->lastname = $lastnameE;
		$this->email = $emailE;
		$this->phone = $phoneE;

	}

	public function addRegister(){

		$db = new connectionClass();

		$query = $db->prepare('INSERT INTO userData (firstName, lastName, phone, email)
														VALUES (:firstName, :lastName, :phone, :email)');

	  $rows = $query->execute( array( ':firstName'   => $this->name,
	                                  ':lastName' => $this->lastname,
																		':phone' => $this->phone,
																		':email' => $this->email
																	)
													);

	  if( $rows == 1 )
	    header("location: ../index.php");

	}

	public function fullRegisters(){
		$db = new connectionClass();

		$sql = $db->prepare('SELECT firstName, lastName, phone, email FROM userData');
  	$numberRecord = $sql->execute();

		if ($numberRecord != 0) {

			$dataArray = array();
			$i = 0;

			while( $data = $sql->fetch(PDO::FETCH_ASSOC) ){
				$dataArray[$i] = $data;
				$i++;
			}

			header("Content-type: application/json");
			return json_encode($dataArray);
		}
	}
}

 ?>
