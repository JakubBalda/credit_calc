<?php
namespace app\controllers;


use app\forms\LoginForm;
use app\transfer\Users;

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
        if(!(isset($this->form->login)) && isset($this->form->password)){
            return false;
        }

        if($this->form->login == ''){
            getMesseges()->addError("Nie podano loginu!");
        }

        if($this->form->password == ''){
            getMesseges()->addError('Nie podano hasła!');
        }

        if(!getMesseges()->isError()){
            if($this->form->login == 'Jakub' && $this->form->password == 'baldzik123'){
                $user = new Users('admin',$this->form->login);
                $_SESSION['user'] = serialize($user);
                addRole($user->role);
            }else if ($this->form->login == 'Michal' && $this->form->password == 'securitypassword123'){
                $user = new Users('user',$this->form->login);
                $_SESSION['user'] = serialize($user);
                addRole($user->role);
            }else {
            getMesseges()->addError('Niepoprawny login lub hasło');
            }
        }
        return !getMesseges()->isError();
    }

    public function action_login(){
        $this->getParams();

        if($this->loginValid()){
            header("Location: ".getConfig()->app_url."/");
		} else {	
			$this->generateView();
        }
    }

    public function action_logout(){
        session_destroy();
        $this->generateView();
    }

    public function generateView(){
        getSmarty()->assign('page_title','Strona logowania');
		getSmarty()->assign('form',$this->form);
		getSmarty()->display('LoginView.tpl');
    }

}