<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Logownanie</title>

        <link rel="stylesheet" type="text/css" href="<?php print($conf->app_root); ?> /css/style.css" />
        <script src="<?php print($conf->app_root); ?>/js/login_script.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container" id="container" >
            <div class="form-container sign-in-container">
                <form action="<?php print($conf->app_root);?> /app/security/login.php" method="post" class="form" id="login">
                <h1 class="form__title">Logowanie</h1>
                <fieldset>
                    <div class="form__title-group">
                        <label for="id_login">Login: </label>
                        <input type="text" id="id_login" name="login" value="<?php if(isset($form['login']))?>"/>
                    </div>
                    <div class="form__title-group">
                        <label for="id_pass">Hasło: </label>
                        <input type="password" id="id_pass" name="password" value="<?php if(isset($form['password']))?>"/>
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
                        <?php
                            foreach($messeges as $key => $mes)
                            {
                                print('<span class="errorMessage">'.$mes.'</span>');
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>

    </body>


</html>