<?php 
require_once dirname(__FILE__).'/../../config.php';

function getLoginParams(&$form)
{
    $form['login'] = isset($_REQUEST['login']) ? $_REQUEST['login'] : null;
    $form['password'] = isset($_REQUEST['password']) ? $_REQUEST['password'] : null;
}
function validParams(&$form, $messeges)
{
    if(!(isset($form['login']) && isset($form['password'])))
    {
        return false;
    } 
    
    if ($form['login'] == "")
        $messeges[] = "Nie podano loginu!";
    if ($form['password'] == "")
        $messeges[] = "Nie podano hasła";

    if ($messeges >0) 
        return false;
    
    if($form['login'] == "jakub" && $form['password'] == "baldzik123")
    {
        session_start();
        $_SESSION['role'] = 'admin';
        return true;
    }

    if($form['login'] == "Michal" && $form['password'] == "securitypass123")
    {
        session_start();
        $_SESSION['role'] = 'user';
        return true;
    }

    $messeges[] = "Niepoprawny login lub hasło";
    return false;

    }

$form = array();
$messeges = array();

getLoginParams($form);

if(!validParams($form, $messeges))
{
    include _ROOT_PATH.'/xampp/htdocs/credit_calc/app/security/login_view.php';
}

?>