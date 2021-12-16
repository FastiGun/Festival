<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-15 08:26:50
  from 'C:\laragon\www\tps\projet\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61b9a6ca0af980_75463429',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '021cf12260d35732d2dd8eb396753f0a526bea82' => 
    array (
      0 => 'C:\\laragon\\www\\tps\\projet\\templates\\login.tpl',
      1 => 1639492938,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b9a6ca0af980_75463429 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12120297061b9a6ca09c915_91808866', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_208473427661b9a6ca09d7b3_89716789', 'page');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_64885174261b9a6ca09dcd7_52357121', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_12120297061b9a6ca09c915_91808866 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_12120297061b9a6ca09c915_91808866',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Connexion<?php
}
}
/* {/block 'title'} */
/* {block 'page'} */
class Block_208473427661b9a6ca09d7b3_89716789 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page' => 
  array (
    0 => 'Block_208473427661b9a6ca09d7b3_89716789',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Connexion<?php
}
}
/* {/block 'page'} */
/* {block 'body'} */
class Block_64885174261b9a6ca09dcd7_52357121 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_64885174261b9a6ca09dcd7_52357121',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div>
<form action="login" method="post">
<div>
        <br>
        <label for="Email">Votre Email</label>
        <br>
        <input type="email" name="Email" value='<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['Email'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
'>
        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['messages']->value['Email'])===null||$tmp==='' ? '' : $tmp);?>

    </div>

    <div>
        <br>
        <label for="Motdepasse">Mot de Passe</label>
        <br>
        <input type="password" name="Motdepasse">
        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['messages']->value['Motdepasse'])===null||$tmp==='' ? '' : $tmp);?>

    </div>

    <div>
    <br>
    <input class="bouton-form btn btn-primary" type="submit" value="Se connecter">
    </div>
</form>
</div>
<?php
}
}
/* {/block 'body'} */
}
