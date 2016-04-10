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
        
        $fnVerify = new Register();
        
        $template = new Smarty();
        
        $template->assign('data', $fnVerify->fullRegisters());

        $template->display('home/index.tpl');
	}

} catch (Exception $e) {
	header("location: ?view=index");
}




 ?>
