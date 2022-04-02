<?php
require_once dirname(__FILE__).'/../../core/Config.class.php';
$conf = new Config();

require_once dirname(__FILE__).'/../../config.php';
session_start();
session_destroy();
header("Location: ".$conf->app_url);

?>