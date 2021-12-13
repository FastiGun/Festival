{extends file='layout.tpl'}
{block name=title}Accueil{/block}
{block name=page}Accueil
{if isset($Nom)}
<h1>Bienvenue {$Nom}</h1>
{/if}
{/block}
