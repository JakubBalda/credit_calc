<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <title>Kalkulator kredytowy</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" /> 
</head>
<body>

    <div class="container" id="container" >
        <div class="form-container sign-in-container">

            <form action="<?php print(_APP_URL);?>/app/calc.php" method="post" class="form" id="login">
                <h1 class="form__title">Kalkulator kredytowy</h1>
                <fieldset>
                    <div class="form__title-group">
                        <label for="id_kwota">Kwota: </label>
                        <input type="text" id="id_kwota" name="kwota" required value="<?php if(isset($kwota)) print($kwota);?>"/>
                    </div>
                    <div class="form__title-group">
                        <label for="id_lata">Lata: </label>
                        <input type="text" id="id_lata" name="lata" required value="<?php if(isset($lata)) print($lata);?>"/>
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
                    if (isset($messages)) {
                        if (count($messages) > 0) {
                            echo '<ul style="margin: 20px; padding: 10px 10px 10px 30px; color: #fff; background-color: #860500; width:300px;">';
                            echo 'Błędnie uzupełniony formularz!!! <br />';
                            foreach ($messages as $key => $msg) {
                                echo '<li>'.$msg.'</li>';
                            }
                            echo '</ul>';
                        }
                    }
                    ?>
                </div>
            </div>
        </div>

        <?php if (isset($rate)){ ?>
        <div style="margin: 20px; padding: 10px;  background-color: #021548;color: white; width:300px;">
        <?php echo 'Miesięczna rata: '.round($rate, 2).' zł'; ?>
        </div>
        <?php } ?>
    </div>
    <a href="<?php print(_APP_ROOT);?>/app/security/logout.php" class="logout_button">Wyloguj się</a>
</body>
</html>