<?php
require_once dirname(__FILE__).'/core/Config.class.php';

$conf = new Config();
require_once dirname(__FILE__).'/config.php';

function &getConfig(){global $conf; return $conf;}

require_once getConfig()->root_path.'/core/Messeges.class.php';
$mess = new Messeges();
function &getMesseges(){global $mess; return $mess;}

$smarty = null;

function &getSmarty(){
    global $smarty;

    if(!isset($smarty)){

        include_once getConfig()->root_path.'/libs/smarty/Smarty.class.php';
		$smarty = new Smarty();

        $smarty->assign('conf', getConfig());
        $smarty->assign('msgs', getMesseges());

        $smarty->setTemplateDir(array(
            'first' => getConfig()->root_path.'/app/views',
            'second' => getConfig()->root_path.'/app/views/template'
        ));
    }

    return $smarty;
}
require_once getConfig()->root_path.'/core/functions.php';

$action = getFromRequest('action');


