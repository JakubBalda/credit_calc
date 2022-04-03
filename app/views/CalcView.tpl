{extends dirname(__FILE__)|cat:"/templates/main.tpl"}

{block name=footer}przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora{/block}

{block name=content}

    <div class="container" id="container" >
        <div class="form-container sign-in-container">

            <form action="{$conf->action_root}calculated" method="post" class="form" id="login">
                <h1 class="form__title">Kalkulator kredytowy</h1>
                <fieldset>
                    <div class="form__title-group">
                        <label for="id_kwota">Kwota: </label>
                        <input type="text" id="id_kwota" name="kwota" placeholder="Kwota" required value="{$form->kwota}"/>
                    </div>
                    <div class="form__title-group">
                        <label for="id_lata">Lata: </label>
                        <input type="text" id="id_lata" name="lata" required placeholder="Lata" value="{$form->lata}"/>
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
                    
                    {if $msgs->isError()}  
                            Błędnie uzupełniony formularz!!! <br />
                            {foreach $msgs->getErrors() as $msg} 
                                {strip}
                                    <li>{$msg}</li>
                                {/strip}
                            {/foreach}
                        
                    {/if}

                    {if isset($rate->creditRate)}
                        Miesięczna rata: {$rate->creditRate|round:2} zł
                    {/if}
                    
                </div>
            </div>
        </div>
    </div>
    <a href="{$app_root}/app/security/logout.php" class="logout_button">Wyloguj się</a>
{/block}