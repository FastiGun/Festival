<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-15 16:06:07
  from 'C:\laragon\www\tps\projet\templates\accueil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61ba126fbe8a91_66110818',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd55c909210d6560c938cf276631b3a0f423d57e7' => 
    array (
      0 => 'C:\\laragon\\www\\tps\\projet\\templates\\accueil.tpl',
      1 => 1639584293,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61ba126fbe8a91_66110818 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_79538308261ba126fbe0335_43681438', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59087099761ba126fbe0bc3_15127330', 'page');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_79538308261ba126fbe0335_43681438 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_79538308261ba126fbe0335_43681438',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Accueil<?php
}
}
/* {/block 'title'} */
/* {block 'page'} */
class Block_59087099761ba126fbe0bc3_15127330 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page' => 
  array (
    0 => 'Block_59087099761ba126fbe0bc3_15127330',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Accueil
<?php if ((isset($_smarty_tpl->tpl_vars['Nom']->value))) {?>
<h1>Bienvenue <?php echo $_smarty_tpl->tpl_vars['Nom']->value;?>
</h1>
<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['erreur']->value[2], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>

<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['erreurM']->value[2], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>

<?php }
}
}
/* {/block 'page'} */
}
