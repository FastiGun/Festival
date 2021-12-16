<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-15 08:26:51
  from 'C:\laragon\www\tps\projet\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61b9a6cb90e082_51532461',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e21210229fc30fc757c770f0d875396152f581c4' => 
    array (
      0 => 'C:\\laragon\\www\\tps\\projet\\templates\\register.tpl',
      1 => 1639556641,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b9a6cb90e082_51532461 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_152084812261b9a6cb8fbe51_36329770', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_176023985161b9a6cb8fc6e0_50806551', 'page');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_196879826061b9a6cb8fcbe5_42139592', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_152084812261b9a6cb8fbe51_36329770 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_152084812261b9a6cb8fbe51_36329770',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Inscription<?php
}
}
/* {/block 'title'} */
/* {block 'page'} */
class Block_176023985161b9a6cb8fc6e0_50806551 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page' => 
  array (
    0 => 'Block_176023985161b9a6cb8fc6e0_50806551',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Inscription<?php
}
}
/* {/block 'page'} */
/* {block 'body'} */
class Block_196879826061b9a6cb8fcbe5_42139592 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_196879826061b9a6cb8fcbe5_42139592',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<form action="register" method="post">

    <div>
        <label for="Nom">Votre nom </label>
        <br>
        <input type="text" name="Nom" placeholder="GORET" value='<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['Nom'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
'>
        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['messages']->value['Nom'])===null||$tmp==='' ? '' : $tmp);?>

    </div>

    <div>
        <label for="Prenom">Votre prenom </label>
        <br>
        <input type="text" name="Prenom" placeholder="Axel" value='<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['Prenom'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
'>
        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['messages']->value['Prenom'])===null||$tmp==='' ? '' : $tmp);?>

    </div>

    <div>
        <br>
        <label for="Email">Votre Email </label>
        <br>
        <input type="email" name="Email" placeholder="goret@gmail.com" value='<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['Email'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
'>
        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['messages']->value['Email'])===null||$tmp==='' ? '' : $tmp);?>

    </div>

    <div>
        <label for="Adresse">Votre adresse </label>
        <br>
        <input type="text" name="Adresse" value='<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['Adresse'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
'>
        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['messages']->value['Adresse'])===null||$tmp==='' ? '' : $tmp);?>

    </div>

    <div>
        <label for="CP">Votre code postal </label>
        <br>
        <input type="number" name="CP" value='<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['CP'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
'>
        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['messages']->value['CP'])===null||$tmp==='' ? '' : $tmp);?>

    </div>

    <div>
        <br>
        <label for="Motdepasse">Mot de Passe </label>
        <br>
        <input type="password" placeholder="*********" name="Motdepasse">
        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['messages']->value['Motdepasse'])===null||$tmp==='' ? '' : $tmp);?>

    </div>

    <div>
    <br>
    <input class="bouton-form btn btn-primary"type="submit" value="S'inscrire">
    </div>

</form>
</div>
<?php
}
}
/* {/block 'body'} */
}
