<?php
require_once dirname(__FILE__).'/../config.php';

//include $conf->root_path.'/libs/smarty/Smarty.class.php';
include $conf->root_path.'/app/security/check.php';
require_once $conf->root_path.'/app/CalcCtrl.class.php';

$calcCtrl = new CalcCtrl();
$calcCtrl->process();
/*function getParams(&$kwota, &$lata, &$opr)
{
	$kwota = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
	$lata = isset($_REQUEST['lata']) ? $_REQUEST['lata'] : null;
	$opr = isset($_REQUEST['opr']) ? $_REQUEST['opr'] : null;
}
function validParams(&$kwota,&$lata, &$opr,&$messages)
{
	
	if (!(isset($kwota) && isset($lata) && isset($opr)))
		return false;

	if (!is_numeric($kwota)) {
		$messages [] = 'Kwota musi być liczbą!';
		return false;
	}
	
	if (!is_numeric($lata)) {
		$messages [] = 'Ilość lat musi być liczbą!';
		return false;
	}
	if($lata <= 0)
	{
		$messages [] = 'Błędna liczba lat!';
		return false;
	}
	if($kwota <=0)
	{
		$messages [] = 'Błędne podana kwota';
		return false;
	}
	return true;	
}
function calculate(&$kwota,&$lata,&$opr,&$rate)
{
	
	$kwota = floatval($kwota);
	$lata = intval($lata);
	$opr = intval($opr);
	
	If($opr != 0)
		$rate = ($kwota + ($kwota *($opr/100) ))/($lata*12);
	else
		$rate = $kwota/($lata*12); 
	
}

$kwota = null;
$lata = null;
$opr = null;
$messages = array();
$rate = null;

getParams($kwota,$lata,$opr);
if(validParams($kwota, $lata, $opr, $messages))
{
	
	calculate($kwota,$lata,$opr,$rate);
}

//public function generateView(){
$smarty = new Smarty();

$smarty->assign('app_url',$conf->app_url);
$smarty->assign('app_root', $conf->app_root);
$smarty->assign('root_path',$conf->root_path);
$smarty->assign('page_title','Kalkulator kredytowy');


$smarty->assign('kwota',$kwota);
$smarty->assign('rate',$rate);
$smarty->assign('messages',$messages);
$smarty->assign('lata', $lata);


$smarty->display($conf->root_path.'/app/CalcView.html');
//}*/