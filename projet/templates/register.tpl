{extends file='layout.tpl'}
{block name=title}Inscription{/block}
{block name=page}Inscription{/block}
{block name=body}

<form action="register" method="post">

    <div>
        <label for="Nom">Votre nom </label>
        <br>
        <input type="text" name="Nom" placeholder="GORET" value='{$data.Nom|escape|default:''}'>
        {$messages.Nom|default:''}
    </div>

    <div>
        <label for="Prenom">Votre prenom </label>
        <br>
        <input type="text" name="Prenom" placeholder="Axel" value='{$data.Prenom|escape|default:''}'>
        {$messages.Prenom|default:''}
    </div>

    <div>
        <br>
        <label for="Email">Votre Email </label>
        <br>
        <input type="email" name="Email" placeholder="goret@gmail.com" value='{$data.Email|escape|default:''}'>
        {$messages.Email|default:''}
    </div>

    <div>
        <label for="Adresse">Votre adresse </label>
        <br>
        <input type="text" name="Adresse" value='{$data.Adresse|escape|default:''}'>
        {$messages.Adresse|default:''}
    </div>

    <div>
        <label for="CP">Votre code postal </label>
        <br>
        <input type="number" name="CP" value='{$data.CP|escape|default:''}'>
        {$messages.CP|default:''}
    </div>

    <div>
        <br>
        <label for="Motdepasse">Mot de Passe </label>
        <br>
        <input type="password" placeholder="*********" name="Motdepasse">
        {$messages.Motdepasse|default:''}
    </div>

    <div>
    <br>
    <input class="bouton-form btn btn-primary"type="submit" value="S'inscrire">
    </div>

</form>
</div>
{/block}