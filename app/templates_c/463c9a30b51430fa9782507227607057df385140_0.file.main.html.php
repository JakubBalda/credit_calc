<?php
/* Smarty version 4.1.0, created on 2022-03-30 16:59:41
  from 'C:\xampp\htdocs\credit_calc\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6244705d1577a4_11317738',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '463c9a30b51430fa9782507227607057df385140' => 
    array (
      0 => 'C:\\xampp\\htdocs\\credit_calc\\templates\\main.html',
      1 => 1648651610,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6244705d1577a4_11317738 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <title>Kalkulator kredytowy</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/style.css" type="text/css" /> 
</head>
<body>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10128979356244705d156e18_44470704', 'content');
?>

</body>
</html><?php }
/* {block 'content'} */
class Block_10128979356244705d156e18_44470704 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10128979356244705d156e18_44470704',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}
