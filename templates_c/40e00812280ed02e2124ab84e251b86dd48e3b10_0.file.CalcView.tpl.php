<?php
/* Smarty version 4.1.0, created on 2022-04-09 16:47:04
  from 'E:\xampp\htdocs\credit_calc\app\views\CalcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62519c68b42a74_58069297',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40e00812280ed02e2124ab84e251b86dd48e3b10' => 
    array (
      0 => 'E:\\xampp\\htdocs\\credit_calc\\app\\views\\CalcView.tpl',
      1 => 1649515559,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messeges.tpl' => 1,
  ),
),false)) {
function content_62519c68b42a74_58069297 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_35130670962519c68b2a089_02777916', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_116289146162519c68b2b6a9_79097764', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'footer'} */
class Block_35130670962519c68b2a089_02777916 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_35130670962519c68b2a089_02777916',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_116289146162519c68b2b6a9_79097764 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_116289146162519c68b2b6a9_79097764',
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
                    
                    <?php $_smarty_tpl->_subTemplateRender("file:messeges.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    <?php if ((isset($_smarty_tpl->tpl_vars['rate']->value->creditRate))) {?>
                        Miesięczna rata: <?php echo round($_smarty_tpl->tpl_vars['rate']->value->creditRate,2);?>
 zł
                    <?php }?>
                    
                </div>
            </div>
        </div>
    </div>
    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout" class="logout_button">Wyloguj się</a>
<?php
}
}
/* {/block 'content'} */
}
