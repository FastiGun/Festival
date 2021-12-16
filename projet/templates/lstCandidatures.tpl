{extends file='layout.tpl'}
{block name=title}Liste des Candidature{/block}
{block name=page}Liste des Candidature{/block}
{block name=body}

<table>
    <tr>
        <td>Détails</td>
        <td>Nom du Groupe</td>
        <td>Departement</td>
        <td>Style</td>
        <td>Scene</td>
        <td>Adresse du Responsable</td>
        <td>Description du Groupe</td>
        <td>Expérience Scénique</td>
        
    </tr>
    {foreach from=$groupe key=$key item=$value}
        <tr>
        <td><a href=''>Détails</a></td>
        {foreach from=$value key=$champs item=$valeur}
            <td>{$valeur}</td>
        {/foreach}
        </tr>
    {/foreach}
</table>
{/block}