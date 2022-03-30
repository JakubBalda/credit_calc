<?php
/* Smarty version 4.1.0, created on 2022-03-30 18:27:48
  from 'C:\xampp\htdocs\credit_calc1\app\CalcView.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624485045b88d5_76228699',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c3c3ec2a8ad295b5734cfd01a4b1864d962dea4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\credit_calc1\\app\\CalcView.html',
      1 => 1648657052,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624485045b88d5_76228699 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9059357766244850459a7f6_47843347', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7281181866244850459ba55_69445419', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'footer'} */
class Block_9059357766244850459a7f6_47843347 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_9059357766244850459a7f6_47843347',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_7281181866244850459ba55_69445419 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7281181866244850459ba55_69445419',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="container" id="container" >
        <div class="form-container sign-in-container">

            <form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post" class="form" id="login">
                <h1 class="form__title">Kalkulator kredytowy</h1>
                <fieldset>
                    <div class="form__title-group">
                        <label for="id_kwota">Kwota: </label>
                        <input type="text" id="id_kwota" name="kwota" required value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kwota;?>
"/>
                    </div>
                    <div class="form__title-group">
                        <label for="id_lata">Lata: </label>
                        <input type="text" id="id_lata" name="lata" required value="<?php echo $_smarty_tpl->tpl_vars['form']->value->lata;?>
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
