<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-16 20:13:41
  from 'C:\laragon\www\tps\projet\templates\profil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61bb9df5624e53_08539495',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8d08e53ce921baea19a24d92b565967554238dc' => 
    array (
      0 => 'C:\\laragon\\www\\tps\\projet\\templates\\profil.tpl',
      1 => 1639685619,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61bb9df5624e53_08539495 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_199299225761bb9df56185f2_70165046', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_110243352561bb9df5618ca9_27253244', 'page');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15475020761bb9df5619146_64107591', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_199299225761bb9df56185f2_70165046 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_199299225761bb9df56185f2_70165046',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Candidature détaillée<?php
}
}
/* {/block 'title'} */
/* {block 'page'} */
class Block_110243352561bb9df5618ca9_27253244 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page' => 
  array (
    0 => 'Block_110243352561bb9df5618ca9_27253244',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Profil<?php
}
}
/* {/block 'page'} */
/* {block 'body'} */
class Block_15475020761bb9df5619146_64107591 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_15475020761bb9df5619146_64107591',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profil']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['value']->value, 'valeur', false, 'champs');
$_smarty_tpl->tpl_vars['valeur']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['champs']->value => $_smarty_tpl->tpl_vars['valeur']->value) {
$_smarty_tpl->tpl_vars['valeur']->do_else = false;
?>
        <h2><?php echo $_smarty_tpl->tpl_vars['champs']->value;?>
</h2>
        <p><?php echo $_smarty_tpl->tpl_vars['valeur']->value;?>
</p>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<br>


<?php if (!$_smarty_tpl->tpl_vars['erreur']->value) {?>
<h1>Candidature Détaillée</h1>
<div class="row">
    <div class="col"><img src="<?php echo $_smarty_tpl->tpl_vars['champs']->value['photo1'];?>
" widht=400px /><img src="<?php echo $_smarty_tpl->tpl_vars['champs']->value['photo2'];?>
" widht=400px /></div>
    <div class="col">
        <div><h3>NOM DU GROUPE</h3><h4><?php echo $_smarty_tpl->tpl_vars['champs']->value['NomGroupe'];?>
</h4></div>
        <br>
        <div><h3>Piste 1</h3><audio controls src="<?php echo $_smarty_tpl->tpl_vars['champs']->value['mp31'];?>
"></audio></div>
        <br>
        <div><h3>Piste 2</h3><audio controls src="<?php echo $_smarty_tpl->tpl_vars['champs']->value['mp32'];?>
"></audio></div>
        <br>
        <div><h3>Piste 3</h3><audio controls src="<?php echo $_smarty_tpl->tpl_vars['champs']->value['mp33'];?>
"></audio></div>
        <br>
        <div><h4>Departement</h4><h5><?php echo $_smarty_tpl->tpl_vars['champs']->value['Departement'];?>
</h5></div>
        <div><h4>Adresse</h4><h5><?php echo $_smarty_tpl->tpl_vars['champs']->value['Adresse'];?>
</h5></div>
        <div><h4>Code Postal</h4><h5><?php echo $_smarty_tpl->tpl_vars['champs']->value['CP'];?>
</h5></div>
        <br>
        <div><h4>Style</h4><h5><?php echo $_smarty_tpl->tpl_vars['champs']->value['Style'];?>
</h5></div>
        <div><h4>Scene</h4><h5><?php echo $_smarty_tpl->tpl_vars['champs']->value['Scene'];?>
</h5></div>
        <br>
        <div><h4>Soundcloud</h4><h5><a href="<?php echo $_smarty_tpl->tpl_vars['champs']->value['Soundcloud'];?>
"><?php echo $_smarty_tpl->tpl_vars['champs']->value['Soundcloud'];?>
</a></h5></div>
        <div><h4>Site du groupe</h4><h5><a href="<?php echo $_smarty_tpl->tpl_vars['champs']->value['SiteGroupe'];?>
"><?php echo $_smarty_tpl->tpl_vars['champs']->value['SiteGroupe'];?>
</a></h5></div>
        <div><h4>Youtube</h4><h5><a href="<?php echo $_smarty_tpl->tpl_vars['champs']->value['Youtube'];?>
"><?php echo $_smarty_tpl->tpl_vars['champs']->value['Youtube'];?>
</a></h5></div>
        <br>
        <div><h4>Experiences Scéniques</h4><h5><?php echo $_smarty_tpl->tpl_vars['champs']->value['ExpScene'];?>
</h5></div>
        <div><h4>Description du groupe</h4><h5><?php echo $_smarty_tpl->tpl_vars['champs']->value['DescGroupe'];?>
</h5></div>
        <br>
        <div><h4>Dossier de presse</h4></div>
        <div><h4>Setlist / Sacem</h4><h5><a href="<?php echo $_smarty_tpl->tpl_vars['champs']->value['Setlist'];?>
">Setlist</a></h5></div>
        <div><h4>Fiche Technique</h4><h5><a href="<?php echo $_smarty_tpl->tpl_vars['champs']->value['ficheTech'];?>
">Fiche Technique</a></h5></div>
    </div>
</div>
<?php } else { ?>
<h1><?php echo $_smarty_tpl->tpl_vars['erreur']->value['Erreur'];?>
</h1>
<?php }?>

<?php
}
}
/* {/block 'body'} */
}
