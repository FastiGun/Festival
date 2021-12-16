{extends file='layout.tpl'}
{block name=title}Accueil{/block}
{block name=page}Accueil
{if isset($Nom)}
<h1>Bienvenue {$Nom}</h1>
{$erreur[2]|escape|default:''}
{$erreurM[2]|escape|default:''}
{/if}
{/block}
