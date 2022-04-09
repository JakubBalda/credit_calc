{extends file="main.tpl"}
{block name=content}

<div class="container" id="container" >
            <div class="form-container sign-in-container">
                <form action="{$conf->action_url}login" method="post" class="form" id="login">
                <h1 class="form__title">Logowanie</h1>
                <fieldset>
                    <div class="form__title-group">
                        <label for="id_login">Login: </label>
                        <input required type="text" id="id_login" name="login" value="{$form->login}"/>
                    </div>
                    <div class="form__title-group">
                        <label for="id_pass">Hasło: </label>
                        <input required type="password" id="id_pass" name="password" value="{$form->password}"/>
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
                        {include file="messeges.tpl"}
                    </div>
                </div>
            </div>
        </div>
{{/block}}