<?php

require_once '../classes/class.Connection.php';
require_once '../classes/class.FNRegister.php';

try {

	if ( $_POST ) {

		if ($_POST['name'] != '' or $_POST['lastname'] != '' or $_POST['email'] != '' or $_POST['phone'] != '') {
			$fnAdd = new Register($_POST['name'], $_POST['lastname'], $_POST['email'], $_POST['phone']);

			$fnAdd->addRegister();
		} else {
			header("location: ../index.php");
		}

	} else {
		$fnVerify = new Register(0, 0, 0, 0);

		echo $fnVerify->fullRegisters();
	}

} catch (Exception $e) {
	header("location: ../index.php");
}




 ?>
