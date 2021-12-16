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
    {foreach from=$groupe item=$value}
        <tr>
            <td><a href='./candidature_det-{$value['NomGroupe']}'>Détails</a></td>
            <td>{$value['NomGroupe']}</td>
            <td>{$value['Departement']}</td>
            <td>{$value['Style']}</td>
            <td>{$value['Scene']}</td>
            <td>{$value['Adresse_Resp']}, {$value['CodeP_Resp']}</td>
            <td>{$value['DescGroupe']}</td>
            <td>{$value['ExpScene']}</td>
            </tr>
    {/foreach}
</table>
{/block}