<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-16 21:19:09
  from 'C:\laragon\www\tps\projet\templates\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61bbad4d612133_45255808',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5f613f1c68f4a0d6df9869c4f77c5905d3fc740' => 
    array (
      0 => 'C:\\laragon\\www\\tps\\projet\\templates\\layout.tpl',
      1 => 1639689545,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61bbad4d612133_45255808 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
    <head>
        <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_147152472461bbad4d60ab57_66206705', 'title');
?>
</title>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36034668261bbad4d60b351_86396120', 'head');
?>

    </head>
    <header>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174745354761bbad4d60b945_06788427', 'menu');
?>

    </header>
    <body>
        <div class="conten-princ titre-page">
            <h1><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_76339832261bbad4d610af8_21967901', 'page');
?>
</h1>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_38932488161bbad4d611603_84216583', 'body');
?>

        </div>  
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
            <p>© Copyright 2021 - Benjamin HEBERT - Axel GORET - Quentin PRADINES</p>
        </div>
    </footer>
    
</html><?php }
/* {block 'title'} */
class Block_147152472461bbad4d60ab57_66206705 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_147152472461bbad4d60ab57_66206705',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
default<?php
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_36034668261bbad4d60b351_86396120 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_36034668261bbad4d60b351_86396120',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <meta charset="utf-8">
        <meta name="viewport" content="">
        <link rel="stylesheet" href="templates/style.css">
        <link rel="stylesheet" href="templates/bootstrap.min.css">
        <?php
}
}
/* {/block 'head'} */
/* {block 'menu'} */
class Block_174745354761bbad4d60b945_06788427 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_174745354761bbad4d60b945_06788427',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="container">
            <div class="row justify-content-center">
                <label class="col-md-2 col-11 titre-site"><a href="./">Festival</a></label>
                <div class="col-md-3 col-11 link">
                    <?php if ((isset($_smarty_tpl->tpl_vars['Nom']->value))) {?>
                        <?php if ($_smarty_tpl->tpl_vars['Admin']->value == '0') {?>
                            <a href="profil-<?php echo $_smarty_tpl->tpl_vars['Nom']->value;?>
">Profil</a>
                        <?php } else { ?>
                            <a href="lstCandidatures">Profil</a>
                        <?php }?>
                    <?php } else { ?>
                        <a href="register">S'inscire</a>
                    <?php }?>
                </div>
                <div class="col-md-3 col-11 link">
                    <?php if ((isset($_smarty_tpl->tpl_vars['Nom']->value))) {?>
                        <?php if ($_smarty_tpl->tpl_vars['Admin']->value == '1') {?>
                            <a href="lstCandidatures">Liste des candidatures</a>
                        <?php } else { ?>
                            <a href="candidature">Candidater</a>
                        <?php }?>
                    <?php } else { ?>
                        <a href="login">Candidater</a>
                    <?php }?>
                </div>
                <div class="col-md-3 col-11 link">
                    <?php if ((isset($_smarty_tpl->tpl_vars['Nom']->value))) {?>
                        <a href="logout">Se déconnecter</a>
                    <?php } else { ?>
                        <a href="login">Se connecter</a>
                    <?php }?>
                </div>
            </div>
        </div>
        <?php
}
}
/* {/block 'menu'} */
/* {block 'page'} */
class Block_76339832261bbad4d610af8_21967901 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page' => 
  array (
    0 => 'Block_76339832261bbad4d610af8_21967901',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page'} */
/* {block 'body'} */
class Block_38932488161bbad4d611603_84216583 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_38932488161bbad4d611603_84216583',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
contenu generique<?php
}
}
/* {/block 'body'} */
}
