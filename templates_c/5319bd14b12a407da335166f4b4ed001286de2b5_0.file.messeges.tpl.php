<?php
/* Smarty version 4.1.0, created on 2022-04-09 13:40:24
  from 'E:\xampp\htdocs\credit_calc\app\views\templates\messeges.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_625170a852a158_97670326',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5319bd14b12a407da335166f4b4ed001286de2b5' => 
    array (
      0 => 'E:\\xampp\\htdocs\\credit_calc\\app\\views\\templates\\messeges.tpl',
      1 => 1649502735,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_625170a852a158_97670326 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>  
    Błędnie uzupełniony formularz!!! <br />
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?> 
        <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
