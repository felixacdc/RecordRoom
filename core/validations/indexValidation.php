<?php

class IndexValidation
{
    public function validator($data)
    {
        try {
            
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
            
        } catch(Exception $e) {
            return false;
        }
        
    }
    
    public function validatorRegister($data)
    {
        
        try {
            
            if ( !empty(trim($data['name'])) 
                and !empty(trim($data['lastname'])) 
                and !empty(trim($data['email'])) 
                and !empty(trim($data['phone'])) ) {

                $rule01 = '/^[a-z]/i';
                $rule02 = "/^[\d]{8}$/i";
                $rule03 = "/^[a-zA-Z0-9_.-]+@[a-zA-Z0-9-]+.[a-zA-Z0-9-.]+$/";

                if ( preg_match($rule01, $data['name']) 
                    and preg_match($rule01, $data['lastname']) 
                    and preg_match($rule02, $data['phone']) 
                    and preg_match($rule03, $data['email']) ) {

                    return true;
                } else {
                    return false;
                }
            } else {
                return true;
            }
            
        } catch (Exception $e) {
            return false;
        }
    
    }
}