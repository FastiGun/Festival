{extends file='layout.tpl'}
{block name=title}Connexion{/block}
{block name=page}Connexion{/block}
{block name=body}
<div>
<form action="login" method="post">
<div>
        <br>
        <label for="Email"> Votre Email : </label>
        <br>
        <input type="email" name="Email" value='{$data.Email|escape|default:''}'>
        {$messages.Email|default:''}
    </div>

    <div>
        <br>
        <label for="Motdepasse"> Mot de Passe : </label>
        <br>
        <input type="password" name="Motdepasse">
        {$messages.Motdepasse|default:''}
    </div>

    <div>
    <br>
    <input type="submit" value="Se connecter">
    </div>
</form>
</div>
{/block}