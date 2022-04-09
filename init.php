<?php

require_once 'core/Config.class.php';
$conf = new core\Config();
require_once 'config.php';

function &getConfig(){global $conf; return $conf;}

require_once getConfig()->root_path.'/core/Messeges.class.php';
$mess = new core\Messeges();

function &getMesseges(){global $mess; return $mess;}

$smarty = null;
function &getSmarty(){
    global $smarty;

    if(!isset($smarty)){

        include_once 'libs/smarty/Smarty.class.php';
		$smarty = new Smarty();

        $smarty->assign('conf', getConfig());
        $smarty->assign('msgs', getMesseges());

        $smarty->setTemplateDir(array(
            'first' => getConfig()->root_path.'/app/views',
            'second' => getConfig()->root_path.'/app/views/templates'
        ));
    }

    return $smarty;
}

require_once 'core/ClassLoader.class.php';
$classLoader = new core\ClassLoader();

function &getLoader(){
    global $classLoader;
    return $classLoader;
}

require_once'core/Router.class.php';
$router = new core\Router();
function &getRouter(){
    global $router;
    return $router;
}

require_once 'core/functions.php';
session_start();
$conf->roles = isset($_SESSION['_roles']) ? unserialize($_SESSION['_roles']) : array();
$router->setAction( getFromRequest('action') );


