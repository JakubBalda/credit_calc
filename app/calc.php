<?php
require_once dirname(__FILE__).'/../config.php';


$kwota = $_REQUEST ['kwota'];
$lata = $_REQUEST ['lata'];
$opr = $_REQUEST ['opr'];


// nie potrzebna jest walidacja czy zostały uzupełnione pola ze wzglądu na atrybut 'required' w znacznikach input
	if (!is_numeric($kwota)) {
		$messages [] = 'Kwota musi być liczbą';
	}
	
	if (!is_numeric($lata)) {
		$messages [] = 'Ilość lat musi być liczbą';
	}	

if (empty($messages)) { 

	$kwota = floatval($kwota);
	$lata = intval($lata);
    $opr = intval($opr);
	
    If($opr != 0)
        $rate = ($kwota + ($kwota *($opr/100) ))/($lata*12);
    else
        $rate = $kwota/($lata*12); 
}

include 'calc_view.php';