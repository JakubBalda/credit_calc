<?php

namespace app\controllers;

use app\forms;
use app\forms\LoginForm;
use app\transfer;

class LoginCtrl{
    private $form;

    public function __construct(){
        $this->form = new LoginForm();
    }

    public function getParams(){
        $this->form->login = getFromRequest('login'); 
        $this->form->password = getFromRequest('password'); 
    }

    public function loginValid(){
        
    }

    public function action_login(){
        $this->getParams();

        if($this->loginValid()){
            
        }
    }

}