<?php
/* Smarty version 4.1.0, created on 2022-04-05 09:55:46
  from 'E:\xampp\htdocs\credit_calc\app\views\CalcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624bf602b6e158_21615207',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b83c15489893191a99b264bbf6e55918d31e31ce' => 
    array (
      0 => 'E:\\xampp\\htdocs\\credit_calc\\app\\views\\CalcView.tpl',
      1 => 1648979990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624bf602b6e158_21615207 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27672982624bf602afc170_15451820', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_263995882624bf602b24a39_04096574', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, (dirname('__FILE__')).("/templates/main.tpl"));
}
/* {block 'footer'} */
class Block_27672982624bf602afc170_15451820 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_27672982624bf602afc170_15451820',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_263995882624bf602b24a39_04096574 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_263995882624bf602b24a39_04096574',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="container" id="container" >
        <div class="form-container sign-in-container">

            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calculated" method="post" class="form" id="login">
                <h1 class="form__title">Kalkulator kredytowy</h1>
                <fieldset>
                    <div class="form__title-group">
                        <label for="id_kwota">Kwota: </label>
                        <input type="text" id="id_kwota" name="kwota" placeholder="Kwota" required value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kwota;?>
"/>
                    </div>
                    <div class="form__title-group">
                        <label for="id_lata">Lata: </label>
                        <input type="text" id="id_lata" name="lata" required placeholder="Lata" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->lata;?>
"/>
                    </div>
                    <div class="form__title-group">
                        <label for="id_opr">Oprocentowanie: </label>
                        <select name="opr">
                            <option value="0">0%</option>
                            <option value="5">5%</option>
                            <option value="10">10%</option>
                            <option value="15">15%</option>
                            <option value="20">20%</option>
                        </select>
                    </div>
                    <div class="form__title-group">
                        <button class="form__button--calc">Wylicz</button>
                    </div>
                </fieldset>
            </form>	
        </div>

        <div class="overlay-container">
            <div class="overlay-calc">
                <div class="overlay-panel overlay-right">
                    
                    <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>  
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
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        
                    <?php }?>

                    <?php if ((isset($_smarty_tpl->tpl_vars['rate']->value->creditRate))) {?>
                        Miesięczna rata: <?php echo round($_smarty_tpl->tpl_vars['rate']->value->creditRate,2);?>
 zł
                    <?php }?>
                    
                </div>
            </div>
        </div>
    </div>
    <a href="<?php echo $_smarty_tpl->tpl_vars['app_root']->value;?>
/app/security/logout.php" class="logout_button">Wyloguj się</a>
<?php
}
}
/* {/block 'content'} */
}
