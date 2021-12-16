{extends file='layout.tpl'}
{block name=title}Candidature détaillée{/block}
{block name=page}Profil{/block}
{block name=body}

{foreach from=$profil key=$key item=$value}
    {foreach from=$value key=$champs item=$valeur}
        <h2>{$champs}</h2>
        <p>{$valeur}</p>
    {/foreach}
{/foreach}

<br>


{if !$erreur}
<h1>Candidature Détaillée</h1>
<div class="row">
    <div class="col"><img src="{$champs.photo1}" widht=400px /><img src="{$champs.photo2}" widht=400px /></div>
    <div class="col">
        <div><h3>NOM DU GROUPE</h3><h4>{$champs.NomGroupe}</h4></div>
        <br>
        <div><h3>Piste 1</h3><audio controls src="{$champs.mp31}"></audio></div>
        <br>
        <div><h3>Piste 2</h3><audio controls src="{$champs.mp32}"></audio></div>
        <br>
        <div><h3>Piste 3</h3><audio controls src="{$champs.mp33}"></audio></div>
        <br>
        <div><h4>Departement</h4><h5>{$champs.Departement}</h5></div>
        <div><h4>Adresse</h4><h5>{$champs.Adresse}</h5></div>
        <div><h4>Code Postal</h4><h5>{$champs.CP}</h5></div>
        <br>
        <div><h4>Style</h4><h5>{$champs.Style}</h5></div>
        <div><h4>Scene</h4><h5>{$champs.Scene}</h5></div>
        <br>
        <div><h4>Soundcloud</h4><h5><a href="{$champs.Soundcloud}">{$champs.Soundcloud}</a></h5></div>
        <div><h4>Site du groupe</h4><h5><a href="{$champs.SiteGroupe}">{$champs.SiteGroupe}</a></h5></div>
        <div><h4>Youtube</h4><h5><a href="{$champs.Youtube}">{$champs.Youtube}</a></h5></div>
        <br>
        <div><h4>Experiences Scéniques</h4><h5>{$champs.ExpScene}</h5></div>
        <div><h4>Description du groupe</h4><h5>{$champs.DescGroupe}</h5></div>
        <br>
        <div><h4>Dossier de presse</h4></div>
        <div><h4>Setlist / Sacem</h4><h5><a href="{$champs.Setlist}">Setlist</a></h5></div>
        <div><h4>Fiche Technique</h4><h5><a href="{$champs.ficheTech}">Fiche Technique</a></h5></div>
    </div>
</div>
{else}
<h1>{$erreur.Erreur}</h1>
{/if}

{/block}
