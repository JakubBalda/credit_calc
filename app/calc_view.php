{extends file="../templates/main.html"}

{block name=footer}przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora{/block}

{block name=content}

    <div class="container" id="container" >
        <div class="form-container sign-in-container">
            <form action="<?php print($conf->app_url);?>/app/calc.php" method="post" class="form" id="login">
                <h1 class="form__title">Kalkulator kredytowy</h1>
                <fieldset>
                    <div class="form__title-group">
                        <label for="id_kwota">Kwota: </label>
                        <input type="text" id="id_kwota" name="kwota" required value="<?php $this->form->kwota;?>"/>
                    </div>
                    <div class="form__title-group">
                        <label for="id_lata">Lata: </label>
                        <input type="text" id="id_lata" name="lata" required value="<?php $this->form->lata;?>"/>
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
                    <?php
                    if (!$this->msgs->isError()) {
                        echo 'Błędnie uzupełniony formularz!!! <br />';
                        foreach ($this->msgs->getErrors() as $key => $msg) {
                            echo '<li>'.$msg.'</li>';
                        }
                        echo '</ul>';
                    }
                    if (isset($this->result->result)){
                        print('Miesięczna rata: '
                            .round($this->result->result, 2).' zł');
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <a href="<?php print($conf->app_root);?>/app/security/logout.php" class="logout_button">Wyloguj się</a>
    {/block}