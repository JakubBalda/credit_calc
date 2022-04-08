<?php
namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcRate;

class CalcCtrl{

   
    private $form;
    private $rate;

    public function __construct(){
        $this->form = new CalcForm();
        $this->rate = new CalcRate();
        
    }

    public function getParams(){

        $this->form->kwota = getFromRequest('kwota');
        $this->form->lata = getFromRequest('lata');
        $this->form->opr = getFromRequest('opr');
    }

    public function validate(){
        if (!(isset($this->form->kwota) && isset($this->form->lata) && isset($this->form->opr)))
		    return false;

        if($this->form->kwota == ""){
            getMesseges()->addError('Nie podano kwoty!!!');
        }

        if($this->form->lata == ""){
            getMesseges()->addError('Nie podano lat!!!');
        }

        if(!getMesseges()->isError()){
            if (!is_numeric($this->form->kwota)) {
                getMesseges()->addError('Kwota musi być liczbą!!!');
            }
            
            if (!is_numeric($this->form->lata)) {
                getMesseges()->addError('Lata muszą być liczbą!!!');
                
            }
            if($this->form->lata <= 0){
                getMesseges()->addError('Lata nie mogą być liczbą ujemną lub zerem!!!');
            }
            if($this->form->kwota <500){
                getMesseges()->addError('Kwota nie może być mniejsza od 500zł!!!');
            }
            return !getMesseges()->isError();
            }
            
        }

    public function process(){

        $this->getParams();

        if($this->validate()){
            $this->form->kwota = floatval($this->form->kwota);
			$this->form->lata = intval($this->form->lata);

            if($this->form->opr != 0){
		        $this->rate->creditRate = ($this->form->kwota + 
                    ($this->form->kwota *($this->form->opr/100)))
                        /($this->form->lata*12);
            }
            else{
                $this->rate->creditRate = $this->form->kwota
                    /($this->form->lata*12);
            }
        }

        $this->generateView();
    }

    public function generateView(){
		global $conf;
		
        getSmarty()->assign('conf', $conf);

        getSmarty()->assign('app_url',$conf->app_url);
        getSmarty()->assign('app_root', $conf->app_root);
        getSmarty()->assign('root_path',$conf->root_path);
        getSmarty()->assign('page_title','Kalkulator kredytowy');


        getSmarty()->assign('form',$this->form);
        getSmarty()->assign('rate',$this->rate);
        


        getSmarty()->display('CalcView.tpl');
	}
}

?>