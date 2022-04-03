<?php
require_once dirname(__FILE__).'/init.php';

include $conf->root_path.'/app/security/check.php';

switch($action)
{
	default:
		require_once $conf->root_path.'/app/controllers/CalcCtrl.class.php';
		$calcCtrl = new app\controllers\CalcCtrl();
		$calcCtrl->generateView();
	break;

	case 'calculated':
		require_once $conf->root_path.'/app/controllers/CalcCtrl.class.php';
		$calcCtrl = new app\controllers\CalcCtrl();
		$calcCtrl->process();
	break;
}