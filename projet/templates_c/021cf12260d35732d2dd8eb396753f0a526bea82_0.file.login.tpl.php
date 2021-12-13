<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-13 09:39:08
  from 'C:\laragon\www\tps\projet\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61b714bcb531c7_58199292',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '021cf12260d35732d2dd8eb396753f0a526bea82' => 
    array (
      0 => 'C:\\laragon\\www\\tps\\projet\\templates\\login.tpl',
      1 => 1639388106,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b714bcb531c7_58199292 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_77524157861b714bcb477c9_18743426', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_57339714061b714bcb48a41_39950205', 'page');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30423177661b714bcb49350_14241924', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_77524157861b714bcb477c9_18743426 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_77524157861b714bcb477c9_18743426',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Connexion<?php
}
}
/* {/block 'title'} */
/* {block 'page'} */
class Block_57339714061b714bcb48a41_39950205 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page' => 
  array (
    0 => 'Block_57339714061b714bcb48a41_39950205',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Connexion<?php
}
}
/* {/block 'page'} */
/* {block 'body'} */
class Block_30423177661b714bcb49350_14241924 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_30423177661b714bcb49350_14241924',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div>
<form action="login" method="post">
<div>
        <br>
        <label for="Email"> Votre Email : </label>
        <br>
        <input type="email" name="Email" value='<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['Email'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
'>
        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['messages']->value['Email'])===null||$tmp==='' ? '' : $tmp);?>

    </div>

    <div>
        <br>
        <label for="Motdepasse"> Mot de Passe : </label>
        <br>
        <input type="password" name="Motdepasse">
        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['messages']->value['Motdepasse'])===null||$tmp==='' ? '' : $tmp);?>

    </div>

    <div>
    <br>
    <input type="submit" value="Se connecter">
    </div>
</form>
</div>
<?php
}
}
/* {/block 'body'} */
}
