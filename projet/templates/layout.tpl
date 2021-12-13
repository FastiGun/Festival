<html>
    <head>
        <title>{block name=title}default{/block}</title>
        {block name=head}
        <meta charset="utf-8">
        <meta name="viewport" content="">
        <link rel="stylesheet" href="style/style.css"/>
        <link rel="stylesheet" href="style/bootstrap.min.css"/>
        {/block}
    </head>
    <header>
        {block name=menu}
        <div class="container">
            <div class="row justify-content-center">
                <label class="col-md-2 col-11 titre-site"><a href="./">Festival</a></label>
                <div class="col-md-3 col-11 link">
                    {if isset($Nom)}
                    <a href="profil">Profil</a>
                    {else}
                    <a href="register">S'inscire</a>
                    {/if}
                </div>
                <div class="col-md-3 col-11 link">
                    {if isset($Nom)}
                    {if $Admin == '1'}
                    <a href="lstCandidatures">Liste des candidatures</a>

                    {else}
                    <a href="candidature">Candidater</a>
                    {/if}
                    {else}
                    <a href="candidature">Candidater</a>
                    {/if}
                </div>
                <div class="col-md-3 col-11 link">
                    {if isset($Nom)}
                    <a href="logout">Se déconnecter</a>
                    {else}
                    <a href="login">Se connecter</a>
                    {/if}
                </div>
            </div>
        </div>
        {/block}
    </header>
    <body>
        <div class="conten-princ titre-page">
            <h1>{block name=page}{/block}</h1>
        </div>
        {block name=body}contenu generique{/block}
    </body>
    <footer>
        <div class="conteneur-footer">
            <div class="colon-footer col-md-3">
                <p>Pages</p>
                <div><a href="listegrp">Liste des groupes</a></div>
                <div><a href="register">Inscription</a></div>
                <div><a href="login">Connexion</a></div>
            </div>
            <div class="colon-footer col-md-3">
                <p>Mentions légales</p>
                <div><a href="">Conditions générales</a></div>
                <div><a href="">Conditions d'inscription</a></div>
                <div><a href="">Réglements des festivals</a></div>
            </div>
            <div class="colon-footer col-md-3">
                <p>Réseaux sociaux</p>
                <div><a href="">Facebook</a></div>
                <div><a href="">Twitter</a></div>
                <div><a href="">Instagram</a></div>
            </div>
            <div class="colon-footer col-md-3">
                <p>Nous contacter</p>
                <div><a href="">Mail</a></div>
                <div><a href="">Téléphone</a></div>
                <div><a href="">Adresse physique</a></div>
            </div>
        </div>
        <div class="copyright">
            <p>©Copyright 2021 - Benjamin HEBERT - Axel GORET</p>
        </div>
    </footer>
    
</html>