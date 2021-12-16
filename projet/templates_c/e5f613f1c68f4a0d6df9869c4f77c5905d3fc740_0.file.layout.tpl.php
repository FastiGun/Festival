<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-16 20:19:46
  from 'C:\laragon\www\tps\projet\templates\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61bb9f62efc104_63199764',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5f613f1c68f4a0d6df9869c4f77c5905d3fc740' => 
    array (
      0 => 'C:\\laragon\\www\\tps\\projet\\templates\\layout.tpl',
      1 => 1639685985,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61bb9f62efc104_63199764 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
    <head>
        <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_153556693261bb9f62ef4551_55466350', 'title');
?>
</title>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185138162261bb9f62ef5a38_69522597', 'head');
?>

    </head>
    <header>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_193262230261bb9f62ef5ee7_30541401', 'menu');
?>

    </header>
    <body>
        <div class="conten-princ titre-page">
            <h1><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10728148861bb9f62efb8d8_07893740', 'page');
?>
</h1>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_145976294961bb9f62efbcf2_07195739', 'body');
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
class Block_153556693261bb9f62ef4551_55466350 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_153556693261bb9f62ef4551_55466350',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
default<?php
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_185138162261bb9f62ef5a38_69522597 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_185138162261bb9f62ef5a38_69522597',
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
class Block_193262230261bb9f62ef5ee7_30541401 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_193262230261bb9f62ef5ee7_30541401',
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
class Block_10728148861bb9f62efb8d8_07893740 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page' => 
  array (
    0 => 'Block_10728148861bb9f62efb8d8_07893740',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page'} */
/* {block 'body'} */
class Block_145976294961bb9f62efbcf2_07195739 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_145976294961bb9f62efbcf2_07195739',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
contenu generique<?php
}
}
/* {/block 'body'} */
}
