<?php
namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcRate;
use mysqli;

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

    public function saveResults(){
        global $conf;

        $connect = new mysqli($conf->server_name, $conf->db_user, $conf->db_pass, $conf->db_name);

        if($connect->connect_errno!=0){
            print("Błąd");
        }

        $query = "INSERT INTO Results (Kwota, Lata, Opr, Rate) VALUES 
                    (".$this->form->kwota.", ".$this->form->lata.", ".$this->form->opr.", ".$this->rate->creditRate.")";
        $connect->query($query);
        $connect->close();

    }

    public function action_calculated(){
        
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
        $this->saveResults();
        $this->generateView();
    }

    public function action_calcShow(){
        $this->generateView();
    }

    public function generateView(){
		global $conf;
		
        getSmarty()->assign('conf', $conf);

        getSmarty()->assign('user',unserialize($_SESSION['user']));

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