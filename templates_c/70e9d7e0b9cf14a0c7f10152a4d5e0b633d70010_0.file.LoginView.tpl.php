<?php
/* Smarty version 4.1.0, created on 2022-04-09 15:01:37
  from 'E:\xampp\htdocs\credit_calc\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_625183b17b12e8_69260679',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70e9d7e0b9cf14a0c7f10152a4d5e0b633d70010' => 
    array (
      0 => 'E:\\xampp\\htdocs\\credit_calc\\app\\views\\LoginView.tpl',
      1 => 1649509294,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messeges.tpl' => 1,
  ),
),false)) {
function content_625183b17b12e8_69260679 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php ob_start();
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_234805100625183b17a47d8_52869495', 'content');
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_234805100625183b17a47d8_52869495 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_234805100625183b17a47d8_52869495',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="container" id="container" >
            <div class="form-container sign-in-container">
                <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post" class="form" id="login">
                <h1 class="form__title">Logowanie</h1>
                <fieldset>
                    <div class="form__title-group">
                        <label for="id_login">Login: </label>
                        <input required type="text" id="id_login" name="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
"/>
                    </div>
                    <div class="form__title-group">
                        <label for="id_pass">Hasło: </label>
                        <input required type="password" id="id_pass" name="password" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->password;?>
"/>
                    </div>
                    </fieldset>
                    <div class="form__title-group">
                        <input type="submit" value="Zaloguj" class="form__button"/>
                    </div>
                </form>
            </div>
        
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-right">
                        <?php $_smarty_tpl->_subTemplateRender("file:messeges.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    </div>
                </div>
            </div>
        </div>
<?php
}
}
/* {/block 'content'} */
}
