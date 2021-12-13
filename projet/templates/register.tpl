{extends file='layout.tpl'}
{block name=title}Inscription{/block}
{block name=page}Inscription{/block}
{block name=body}

<form action="register" method="post">

    <div>
        <label for="Nom"> Votre nom : </label>
        <br>
        <input type="text" name="Nom" value='{$data.Nom|escape|default:''}'>
        {$messages.Nom|default:''}
    </div>

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
    <input type="submit" value="S'inscrire">
    </div>

</form>
</div>
{/block}