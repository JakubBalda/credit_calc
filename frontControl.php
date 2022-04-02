<?php
require_once dirname(__FILE__).'/../config.php';


include $conf->root_path.'/app/security/check.php';

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

switch($action)
{
	default:
		require_once $conf->root_path.'/app/calculator/CalcCtrl.class.php';
		$calcCtrl = new CalcCtrl();
		$calcCtrl->generateView();
	break;

	case 'calculated':
		require_once $conf->root_path.'/app/calculator/CalcCtrl.class.php';
		$calcCtrl = new CalcCtrl();
		$calcCtrl->process();
	break;
}