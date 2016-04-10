<?php

require_once 'core/models/class.Connection.php';
require_once 'core/models/class.FNRegister.php';

try {

	if ( $_POST ) {

		if ($_POST['name'] != '' and $_POST['lastname'] != '' and $_POST['email'] != '' and $_POST['phone'] != '') {
			$fnAdd = new Register($_POST['name'], $_POST['lastname'], $_POST['email'], $_POST['phone']);

			$fnAdd->addRegister();
            header("location: ?view=index");
            
		} else {
			header("location: ?view=index");
		}

	} else {
        $template = new Smarty();

        $template->display('home/index.tpl');
        
		/*$fnVerify = new Register(0, 0, 0, 0);

		echo $fnVerify->fullRegisters();*/
	}

} catch (Exception $e) {
	header("location: ?view=index");
}




 ?>
