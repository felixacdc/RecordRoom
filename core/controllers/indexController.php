<?php

require_once 'core/models/class.Connection.php';
require_once 'core/models/class.FNRegister.php';
require_once 'core/validations/indexValidation.php';


try {

	if ( $_POST ) {
        
        if (isset($_POST['ajaxData'])) {
            
            $data = json_decode(stripslashes($_POST['ajaxData']), true);
            
            if (gettype($data) == 'array') {
                $validation = new IndexValidation();
                
                if ( $validation->validator($data['code']) ){
                    
                    $code = new Register();
                    
                    if ( $code->searchCode($data['code']) ) {
                        echo '';
                    } else {
                        echo 'Codigo invalido';
                    }
                    
                } else {
                    echo "Codigo invalido";
                }

            } else {
                header('location: ?view=index');
            }
            
        } else {
            
            $validation = new IndexValidation();
                
            if ( $validation->validator($_POST['code']) ){

                $code = new Register();

                if ( $code->searchCode($_POST['code']) ) {

                    if ( $validation->validatorRegister($_POST) ) {

                        $fnAdd = new Register($_POST);

                        if ( $fnAdd->addRegister() ) {
                            header("location: ?view=index&good=yes");
                        } else {
                            header("location: ?view=index&good=no");
                        }
                        
                    } else {
                        header("location: ?view=index&good=no"); 
                    }
                } else {
                    header("location: ?view=index&good=no");
                }

            } else {
                header("location: ?view=index&good=no");
            }            
        }

	} else {
        
        $fnVerify = new Register();
        
        $template = new Smarty();
        
        $template->assign('data', $fnVerify->fullRegisters());

        $template->display('home/index.tpl');
	}

} catch (Exception $e) {
    /*echo $e->getMessage();*/
	header("location: ?view=index");
}




 ?>
