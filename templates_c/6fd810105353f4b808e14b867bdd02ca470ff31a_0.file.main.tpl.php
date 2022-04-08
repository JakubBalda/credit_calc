<?php
/* Smarty version 4.1.0, created on 2022-04-03 11:56:10
  from 'C:\xampp\htdocs\credit_calc\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62496f3a613306_20339228',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6fd810105353f4b808e14b867bdd02ca470ff31a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\credit_calc\\app\\views\\templates\\main.tpl',
      1 => 1648899872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62496f3a613306_20339228 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <title>Kalkulator kredytowy</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style.css" type="text/css" /> 
</head>
<body>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_160350190562496f3a612af9_40796350', 'content');
?>

</body>
</html><?php }
/* {block 'content'} */
class Block_160350190562496f3a612af9_40796350 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_160350190562496f3a612af9_40796350',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}
