<?php
/* Smarty version 4.1.0, created on 2022-04-09 13:40:24
  from 'E:\xampp\htdocs\credit_calc\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_625170a8213b90_84874528',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70e9d7e0b9cf14a0c7f10152a4d5e0b633d70010' => 
    array (
      0 => 'E:\\xampp\\htdocs\\credit_calc\\app\\views\\LoginView.tpl',
      1 => 1649503803,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messeges.tpl' => 1,
  ),
),false)) {
function content_625170a8213b90_84874528 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php ob_start();
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_444706422625170a8206645_91911313', 'content');
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_444706422625170a8206645_91911313 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_444706422625170a8206645_91911313',
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
                        <button class="form__button">Zaloguj</button>
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
