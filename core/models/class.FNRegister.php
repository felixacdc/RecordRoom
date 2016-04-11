<?php

class Register
{
	private $name;
	private $lastname;
	private $email;
	private $phone;

	public function __construct($nameE = null, $lastnameE = null, $emailE = null, $phoneE = null){

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

	}

	public function fullRegisters(){
		$db = new connectionClass();

		$sql = $db->prepare('SELECT firstName, lastName, phone, email FROM userData');
        $numberRecord = $sql->execute();

		if ($numberRecord != 0) {

			$dataArray = array();
			$i = 0;

			while( $data = $sql->fetch(PDO::FETCH_ASSOC) ){
				$dataArray[$i] = array('firstName'  => $data['firstName'],
                                    'lastName'   => $data['lastName'],
                                    'phone' => $data['phone'],
                                    'email'     => $data['email']);
				$i++;
			}

			return $dataArray;
		}
	}
    
    public function searchCode($data)
    {
        try{
            
            $db = new connectionClass();

            $sql = $db->prepare('SELECT code FROM codes WHERE code = :code AND state = 0');
            $sql->execute([':code' => $data]);

            if ($sql->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
            
        } catch (Exception $e) {
            return false;
        }
        
    }
}

 ?>
