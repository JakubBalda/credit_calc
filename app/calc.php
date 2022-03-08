<?php
require_once dirname(__FILE__).'/../config.php';

include _ROOT_PATH.'/app/security/check.php';

function getParams(&$kwota, &$lata, &$opr)
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
	}
	
	if (!is_numeric($lata)) {
		$messages [] = 'Ilość lat musi być liczbą!';
	}
	if($lata <= 0)
	{
		$messages [] = 'Błędna liczba lat!';
	}
	if($kwota <=0)
	{
		$messages [] = 'Błędne podana kwota';
	}	
}
function calculate(&$kwota,&$lata,&$opr)
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
	calculate($kwota,$lata,$opr,$rate);
include 'calc_view.php';