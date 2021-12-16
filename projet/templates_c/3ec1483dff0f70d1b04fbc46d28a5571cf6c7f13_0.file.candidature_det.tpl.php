<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-16 21:35:45
  from 'C:\laragon\www\tps\projet\templates\candidature_det.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61bbb1317b76b7_33001749',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ec1483dff0f70d1b04fbc46d28a5571cf6c7f13' => 
    array (
      0 => 'C:\\laragon\\www\\tps\\projet\\templates\\candidature_det.tpl',
      1 => 1639690343,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61bbb1317b76b7_33001749 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_189186145361bbb1317afc08_77884869', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_26547651961bbb1317b0471_70277364', 'page');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121268339561bbb1317b09f5_93546881', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_189186145361bbb1317afc08_77884869 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_189186145361bbb1317afc08_77884869',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Candidature Détaillée<?php
}
}
/* {/block 'title'} */
/* {block 'page'} */
class Block_26547651961bbb1317b0471_70277364 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page' => 
  array (
    0 => 'Block_26547651961bbb1317b0471_70277364',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Candidature Détaillée<?php
}
}
/* {/block 'page'} */
/* {block 'body'} */
class Block_121268339561bbb1317b09f5_93546881 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_121268339561bbb1317b09f5_93546881',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


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

<?php
}
}
/* {/block 'body'} */
}
