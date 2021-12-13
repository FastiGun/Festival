<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-13 10:15:29
  from 'C:\laragon\www\tps\projet\templates\accueil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61b71d41741b04_29797300',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd55c909210d6560c938cf276631b3a0f423d57e7' => 
    array (
      0 => 'C:\\laragon\\www\\tps\\projet\\templates\\accueil.tpl',
      1 => 1639390528,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b71d41741b04_29797300 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174679151961b71d4173bbb1_48840572', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_70896406861b71d4173c704_51867557', 'page');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_174679151961b71d4173bbb1_48840572 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_174679151961b71d4173bbb1_48840572',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Accueil<?php
}
}
/* {/block 'title'} */
/* {block 'page'} */
class Block_70896406861b71d4173c704_51867557 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page' => 
  array (
    0 => 'Block_70896406861b71d4173c704_51867557',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Accueil
<?php if ((isset($_smarty_tpl->tpl_vars['Nom']->value))) {?>
<h1>Bienvenue <?php echo $_smarty_tpl->tpl_vars['Nom']->value;?>
</h1>
<?php }
}
}
/* {/block 'page'} */
}
