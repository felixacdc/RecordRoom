<?php

class Register
{
	private $name;
	private $lastname;
	private $email;
	private $phone;
    private $code;

	public function __construct($data = null){
        
        if ( $data != null ) {
            $this->name = $data['name'];
            $this->lastname = $data['lastname'];
            $this->email = $data['email'];
            $this->phone = $data['phone'];
            $this->code = $data['code'];
        }

	}

	public function addRegister(){

		$db = new connectionClass();
        
        $code_id = $this::findCode($this->code);

		$query = $db->prepare('INSERT INTO userData (firstName, lastName, phone, email, code_id)
														VALUES (:firstName, :lastName, :phone, :email, :code_id)');

        $rows = $query->execute( array( ':firstName'   => $this->name,
                                       ':lastName' => $this->lastname,
                                       ':phone' => $this->phone,
                                       ':email' => $this->email,
                                       ':code_id' => $code_id
                                )
                            );
        
        /*$query = $db->prepare('UPDATE ');*/

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

            $sql = $db->prepare('SELECT id FROM codes WHERE code = :code AND state = 0');
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
    
    public static function findCode($data)
    {
        try{
            
            $db = new connectionClass();

            $sql = $db->prepare('SELECT id FROM codes WHERE code = :code AND state = 0');
            $sql->execute([':code' => $data]);

            if ($sql->rowCount() > 0) {
                
                while($datos = $sql->fetch()) {
                    $id = $datos[0];
                }
                
                return $id;
            } else {
                return null;
            }
            
        } catch (Exception $e) {
            return null;
        }
        
    }
}

 ?>
