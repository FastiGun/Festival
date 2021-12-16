<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-16 21:32:50
  from 'C:\laragon\www\tps\projet\templates\lstCandidatures.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61bbb08203d186_57143919',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a7b8d25e1c831ae4d6a27fdb29dd5bac54b4297' => 
    array (
      0 => 'C:\\laragon\\www\\tps\\projet\\templates\\lstCandidatures.tpl',
      1 => 1639690261,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61bbb08203d186_57143919 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_99660064661bbb082033379_18390711', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_115946957061bbb082033e40_81194360', 'page');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_148889447761bbb0820344d4_93445727', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_99660064661bbb082033379_18390711 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_99660064661bbb082033379_18390711',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Liste des Candidature<?php
}
}
/* {/block 'title'} */
/* {block 'page'} */
class Block_115946957061bbb082033e40_81194360 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page' => 
  array (
    0 => 'Block_115946957061bbb082033e40_81194360',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Liste des Candidature<?php
}
}
/* {/block 'page'} */
/* {block 'body'} */
class Block_148889447761bbb0820344d4_93445727 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_148889447761bbb0820344d4_93445727',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<table>
    <tr>
        <td>Détails</td>
        <td>Nom du Groupe</td>
        <td>Departement</td>
        <td>Style</td>
        <td>Scene</td>
        <td>Adresse du Responsable</td>
        <td>Description du Groupe</td>
        <td>Expérience Scénique</td>
        
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groupe']->value, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
        <tr>
            <td><a href='./candidature_det-<?php echo $_smarty_tpl->tpl_vars['value']->value['NomGroupe'];?>
'>Détails</a></td>
            <td><?php echo $_smarty_tpl->tpl_vars['value']->value['NomGroupe'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['value']->value['Departement'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['value']->value['Style'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['value']->value['Scene'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['value']->value['Adresse_Resp'];?>
, <?php echo $_smarty_tpl->tpl_vars['value']->value['CodeP_Resp'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['value']->value['DescGroupe'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['value']->value['ExpScene'];?>
</td>
            </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
<?php
}
}
/* {/block 'body'} */
}
