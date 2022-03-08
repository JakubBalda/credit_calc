<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Logownanie</title>
    </head>
    <body>
        <form action="<?php print(_APP_ROOT);?> /app/security/loginh.php" method="post">
        <legend>Logowanie</legend>
        <fieldset>
            <label for="id_login">Login: </label>
            <input type="text" id="id_login" name="login" value="<?php if(isset($form['login']))?>"/>
            <label for="id_pass">Hasło: </label>
            <input type="password" id="id_pass" name="password" value="<?php if(isset($form['password']))?>"/>
            </fieldset>
            <input type="submit" value="Zaloguj"/>
        </form>
    </body>


</html>