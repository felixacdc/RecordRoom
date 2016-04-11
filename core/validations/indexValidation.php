<?php

class IndexValidation
{
    public function validator($data)
    {
        if ( !empty(trim($data)) ){
            
            $rules = '/^[a-z]{5,50}$/i';
            
            if ( preg_match($rules, $data) ){
                return true;
            } else {
                return false;
            }
            
        } else{
            return false;
        }
    }
    
    public function validatorRegister($data)
    {
        if ( !empty(trim($data['name'])) 
            and !empty(trim($data['lastname'])) 
            and !empty(trim($data['email'])) 
            and !empty(trim($data['phone'])) ) {
            
            $rule01 = '/^[a-z]/i';
            $rule02;
            $rule03;
            
            if ( preg_match($rule01, $data['name']) 
                and preg_match($rule01, $data['lastname']) ) {
                
                echo 'vamos bien';
            } else {
                echo 'error';
            }
        } else {
            echo 'error';
        }
    }
}