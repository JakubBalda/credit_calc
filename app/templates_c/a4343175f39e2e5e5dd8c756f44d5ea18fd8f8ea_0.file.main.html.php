<?php
/* Smarty version 4.1.0, created on 2022-03-30 18:27:48
  from 'C:\xampp\htdocs\credit_calc1\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624485045d1fb1_83928008',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4343175f39e2e5e5dd8c756f44d5ea18fd8f8ea' => 
    array (
      0 => 'C:\\xampp\\htdocs\\credit_calc1\\templates\\main.html',
      1 => 1648651610,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624485045d1fb1_83928008 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_840654101624485045d1790_82097820', 'content');
?>

</body>
</html><?php }
/* {block 'content'} */
class Block_840654101624485045d1790_82097820 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_840654101624485045d1790_82097820',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}
