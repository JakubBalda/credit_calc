<?php
/* Smarty version 4.1.0, created on 2022-04-02 13:56:07
  from 'C:\xampp\htdocs\credit_calc\app\views\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624839d7b75524_87234878',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7d42d33fd7b7ba9f6798c8c26b6fc3f8dea967e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\credit_calc\\app\\views\\templates\\main.html',
      1 => 1648899872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624839d7b75524_87234878 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1981581285624839d7b74d83_89326043', 'content');
?>

</body>
</html><?php }
/* {block 'content'} */
class Block_1981581285624839d7b74d83_89326043 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1981581285624839d7b74d83_89326043',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}
