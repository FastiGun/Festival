<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-13 07:34:04
  from 'C:\laragon\www\tps\projet\templates\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61b6f76c553646_15686630',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5f613f1c68f4a0d6df9869c4f77c5905d3fc740' => 
    array (
      0 => 'C:\\laragon\\www\\tps\\projet\\templates\\layout.tpl',
      1 => 1639380737,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b6f76c553646_15686630 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
    <head>
        <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_48041015161b6f76c52c727_19455517', 'title');
?>
</title>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_37802642361b6f76c551cc4_87780896', 'head');
?>

    </head>
    <header>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_190755391761b6f76c5523e5_69921209', 'menu');
?>

    </header>
    <body>
        <div class="conten-princ titre-page">
            <h1><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_145101578161b6f76c552a60_28947322', 'page');
?>
</h1>
        </div>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_139369661b6f76c552ff1_16722677', 'body');
?>

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
    
</html><?php }
/* {block 'title'} */
class Block_48041015161b6f76c52c727_19455517 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_48041015161b6f76c52c727_19455517',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
default<?php
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_37802642361b6f76c551cc4_87780896 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_37802642361b6f76c551cc4_87780896',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <meta charset="utf-8">
        <meta name="viewport" content="">
        <link rel="stylesheet" href="style/style.css"/>
        <link rel="stylesheet" href="style/bootstrap.min.css"/>
        <?php
}
}
/* {/block 'head'} */
/* {block 'menu'} */
class Block_190755391761b6f76c5523e5_69921209 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_190755391761b6f76c5523e5_69921209',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="container">
            <div class="row justify-content-center">
                <label class="col-md-2 col-11 titre-site"><a href="./">Festival</a></label>
                <div class="col-md-3 col-11 link">
                    <a href="listegrp">Liste des groupes</a>
                </div>
                <div class="col-md-3 col-11 link">
                    <a href="candidature">Candidater</a>
                </div>
                <div class="col-md-3 col-11 link">
                    <a href="login">Se connecter</a>
                </div>
            </div>
        </div>
        <?php
}
}
/* {/block 'menu'} */
/* {block 'page'} */
class Block_145101578161b6f76c552a60_28947322 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page' => 
  array (
    0 => 'Block_145101578161b6f76c552a60_28947322',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page'} */
/* {block 'body'} */
class Block_139369661b6f76c552ff1_16722677 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_139369661b6f76c552ff1_16722677',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
contenu generique<?php
}
}
/* {/block 'body'} */
}
