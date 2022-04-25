<?php
$conf->server_name = 'localhost';
$conf->server_url = 'http://'.$conf->server_name;
$conf->app_root = '/credit_calc';
$conf->action_root = $conf->app_root.'/frontControl.php?action=';
$conf->db_user = 'root';
$conf->db_pass = '';
$conf->db_name = 'calc';

$conf->root_path = dirname(__FILE__);
$conf->app_url = $conf->server_url.$conf->app_root;
$conf->action_url = $conf->server_url.$conf->action_root;

?>


