<?php
require_once 'CalcForm.class.php';
require_once 'CalcRate.class.php';

class CalcCtrl{

    private $msgs;
    private $form;
    private $rate;

    public function __construct(){
        $this->form = new CalcForm();
        $this->rate = new CalcRate();
        $this->msgs = new Messeges();
    }

    public function getParams(){

        $this->form->kwota = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
        $this->form->lata = isset($_REQUEST['lata']) ? $_REQUEST['lata'] : null;
        $this->form->opr = isset($_REQUEST['opr']) ? $_REQUEST['opr'] : null;
    }

    public function validate(){
        if (!(isset($this->form->kwota) && isset($this->form->lata) && isset($this->form->opr)))
		    return false;

        if($this->form->kwota == ""){
            $this->msgs->addError('Nie podano kwoty!!!');
        }

        if($this->form->lata == ""){
            $this->msgs->addError('Nie podano lat!!!');
        }

        if(!$this->msgs->isError()){
            if (!is_numeric($this->form->kwota)) {
                $this->msgs->addError('Kwota musi być liczbą!!!');
            }
            
            if (!is_numeric($this->form->lata)) {
                $this->msgs->addError('Lata muszą być liczbą!!!');
                
            }
            if($this->form->lata <= 0){
                $this->msgs->addError('Lata nie mogą być liczbą ujemną!!!');
            }
            if($this->form->kwota <=0){
                $this->msgs->addError('Kwota nie może być liczbą ujemną!!!');
            }
            return !$this->msgs->isError();
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
        getSmarty()->assign('msgs', $this->msgs);


        getSmarty()->display('CalcView.html');
	}
}

?>