<?php
require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messeges.class.php';
require_once $conf->root_path.'/app/CalcForm.class.php';
require_once $conf->root_path.'/app/CalcResult.class.php';

class CalcCtrl{

    private $msgs;
    private $form;
    private $result;

    public function __construct(){
        $this->form = new CalcForm();
        $this->result = new CalcResult();
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
            return $this->msgs->isError();
            }
        }

    public function process(){

        $this->getParams();

        if($this->validate()){
            $this->form->kwota = floatval($this->form->kwota);
			$this->form->lata = intval($this->form->lata);
            $this->form->opr = intval($$this->form->opr);

            if($this->form->opr != 0){
		        $this->result->result = ($this->form->kwota + 
                    ($this->form->kwota *($this->form->opr/100)))
                        /($this->form->lata*12);
            }
            else{
                $this->result->result = $this->form->kwota
                    /($this->form->lata*12);
            }
        }

        $this->generateView();
    }

    public function generateView(){
		global $conf;
		
		$smarty = new Smarty();
		$smarty->assign('conf',$conf);
		
		$smarty->assign('page_title','Kalkulator kredytowy');
		//$smarty->assign('page_description','Obiektowość. Funkcjonalność aplikacji zamknięta w metodach różnych obiektów. Pełen model MVC.');
		//$smarty->assign('page_header','Obiekty w PHP');
				
		$smarty->assign('msgs',$this->msgs);
		$smarty->assign('form',$this->form);
		$smarty->assign('res',$this->result);
		
		$smarty->display($conf->root_path.'/app/CalcView.html');
	}
}

?>