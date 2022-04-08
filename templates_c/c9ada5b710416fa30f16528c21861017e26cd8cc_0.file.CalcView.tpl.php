<?php
/* Smarty version 4.1.0, created on 2022-04-03 11:56:10
  from 'C:\xampp\htdocs\credit_calc\app\views\CalcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62496f3a5e7789_94891065',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9ada5b710416fa30f16528c21861017e26cd8cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\credit_calc\\app\\views\\CalcView.tpl',
      1 => 1648978964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62496f3a5e7789_94891065 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_23214699062496f3a5c9dc3_08686400', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_204029376762496f3a5cb935_06098051', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, (dirname('__FILE__')).("/templates/main.tpl"));
}
/* {block 'footer'} */
class Block_23214699062496f3a5c9dc3_08686400 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_23214699062496f3a5c9dc3_08686400',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_204029376762496f3a5cb935_06098051 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_204029376762496f3a5cb935_06098051',
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
