<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-11 12:38:59
  from 'C:\laragon\www\tps\projet\templates\accueil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61b49be3d5ded0_74704637',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd55c909210d6560c938cf276631b3a0f423d57e7' => 
    array (
      0 => 'C:\\laragon\\www\\tps\\projet\\templates\\accueil.tpl',
      1 => 1639225606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b49be3d5ded0_74704637 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_204064195261b49be3d53922_32086378', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_156305497461b49be3d5cfb3_15640963', 'page');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_204064195261b49be3d53922_32086378 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_204064195261b49be3d53922_32086378',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Accueil<?php
}
}
/* {/block 'title'} */
/* {block 'page'} */
class Block_156305497461b49be3d5cfb3_15640963 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page' => 
  array (
    0 => 'Block_156305497461b49be3d5cfb3_15640963',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Accueil<?php
}
}
/* {/block 'page'} */
}
