<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-13 08:45:13
  from 'C:\laragon\www\tps\projet\templates\candidature.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61b708191b1a12_81775309',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9c53f24f84ae9ab8f406f15a3bee2a6fb1f62c6' => 
    array (
      0 => 'C:\\laragon\\www\\tps\\projet\\templates\\candidature.tpl',
      1 => 1639384699,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b708191b1a12_81775309 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169045718561b708191a70c9_53015825', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_63383563461b708191a7a24_70650414', 'page');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_175429031061b708191a7ff4_30870236', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_169045718561b708191a70c9_53015825 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_169045718561b708191a70c9_53015825',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Candidature<?php
}
}
/* {/block 'title'} */
/* {block 'page'} */
class Block_63383563461b708191a7a24_70650414 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page' => 
  array (
    0 => 'Block_63383563461b708191a7a24_70650414',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Candidature<?php
}
}
/* {/block 'page'} */
/* {block 'body'} */
class Block_175429031061b708191a7ff4_30870236 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_175429031061b708191a7ff4_30870236',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<form action="candidater" method="post" enctype="multipart/form-data" id='register'>
  <div>
        <label for="NomGroupe"> Nom du groupe : </label> 
        <br>
        <input type="text" name="NomGroupe" value=''>

    </div>

        <div>
    <br>
    <label for="AnneeCrea"> Année de création : </label>
    <br>
    <input type="number" name="AnneeCrea" value=''>
    </div>

    <div>
        <br>
        <label for="Departement"> Votre Département :</label> <!--Liste déroulante à partir de la table département-->
        <br>
        <select name=Departement required>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['departements']->value, 'value', false, 'key');
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
                <option value=<?php echo $_smarty_tpl->tpl_vars['valeur']->value;?>
> <?php echo $_smarty_tpl->tpl_vars['valeur']->value;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
    </div>

    <div>
        <br>
        <label for="Scene"> Votre Scène : </label> <!--Liste déroulante à partir de la table scene-->
        <br>
        <select name=Scene required>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['scene']->value, 'value', false, 'key');
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
                <option value=<?php echo $_smarty_tpl->tpl_vars['valeur']->value;?>
> <?php echo $_smarty_tpl->tpl_vars['valeur']->value;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>

    </div>

    <div>
        <br>
        <label for="Responsable"> Information du responsable : (Compte principal)</label>
        <br>
        <input type="text" name="Nom_Resp" placeholder='Nom du responsable' required>
        <input type="text" name="Prenom_Resp" placeholder='Prenom du responsable' required>
        <input type="text" name="Adresse_Resp" placeholder='Adresse du responsable' required>
        <input type="number" name="CodeP_Resp" placeholder='Code Postal du responsable' required>
        <input type="email" name="email_Resp" placeholder='Adresse mail du responsable' required>
        <input type="tel" name="Tel_Resp" placeholder='Téléphone du responsable' minlength='10' maxlength='10' required>
    </div>

    
    <div>
    <br>
    <label for="DescGroupe"> Description du groupe (500 caractères max) : </label>
    <br>
    <textarea name='DescGroupe' form='register' rows='5' cols='64' maxlength='500' required></textarea>
    </div>

    <div>
    <br>
    <label for="ExpScene"> Expériences scéniques du groupe (500 caractères max) : </label>
    <br>
    <textarea name='ExpScene' form='register' rows='5' cols='64' maxlength='500' required></textarea>
    </div>

    <div>
    <br>
    <label for="siteGroupe"> Site du groupe : </label>
    <br>
    <input type='url' name='siteGroupe' placeholder='https://example.com' required>
    </div>

    <div>
    <br>
    <label for="soundcloud"> Page soundcloud (facultatif) : </label>
    <br>
    <input type="url" name ="soundcloud">
    </div>

    <div>
    <br>
    <label for="youtube"> Page Youtube (facultatif) : </label>
    <br>
    <input type='url' name='youtube'>
    </div>

    <div>
        <br>
        <label for="membre1"> Informations membre 1</label>
        <br>
        <input type="text" name="Nom_mem1" placeholder='Nom du membre 1' required>
        <input type="text" name="Prenom_mem1" placeholder='Prenom du membre 1' required>
        <input type="text" name="Instrument_mem1" placeholder='Instrument du membre 1' required>
    </div>

    <div>
        <br>
        <label for="membre2"> Informations membre 2</label>
        <br>
        <input type="text" name="Nom_mem1" placeholder='Nom du membre 2'>
        <input type="text" name="Prenom_mem1" placeholder='Prenom du membre 2'>
        <input type="text" name="Instrument_mem1" placeholder='Instrument du membre 2'>
    </div>

    <div>
        <br>
        <label for="membre3"> Informations membre 3</label>
        <br>
        <input type="text" name="Nom_mem3" placeholder='Nom du membre 3'>
        <input type="text" name="Prenom_mem3" placeholder='Prenom du membre 3'>
        <input type="text" name="Instrument_mem3" placeholder='Instrument du membre 3'>
    </div>

    <div>
        <br>
        <label for="membre4"> Informations membre 4</label>
        <br>
        <input type="text" name="Nom_mem4" placeholder='Nom du membre 4'>
        <input type="text" name="Prenom_mem4" placeholder='Prenom du membre 4'>
        <input type="text" name="Instrument_mem4" placeholder='Instrument du membre 4'>
    </div>

        <div>
        <br>
        <label for="membre5"> Informations membre 5</label>
        <br>
        <input type="text" name="Nom_mem5" placeholder='Nom du membre 5'>
        <input type="text" name="Prenom_mem5" placeholder='Prenom du membre 5'>
        <input type="text" name="Instrument_mem5" placeholder='Instrument du membre 5'>
    </div>

    <div>
        <br>
        <label for="membre6"> Informations membre 6</label>
        <br>
        <input type="text" name="Nom_mem6" placeholder='Nom du membre 6'>
        <input type="text" name="Prenom_mem6" placeholder='Prenom du membre 6'>
        <input type="text" name="Instrument_mem6" placeholder='Instrument du membre 6'>
    </div>

    <div>
        <br>
        <label for="membre7"> Informations membre 7</label>
        <br>
        <input type="text" name="Nom_mem7" placeholder='Nom du membre 7'>
        <input type="text" name="Prenom_mem7" placeholder='Prenom du membre 7'>
        <input type="text" name="Instrument_mem7" placeholder='Instrument du membre 7'>
    </div>

    <div>
        <br>
        <label for="membre8"> Informations membre 8</label>
        <br>
        <input type="text" name="Nom_mem8" placeholder='Nom du membre 8'>
        <input type="text" name="Prenom_mem8" placeholder='Prenom du membre 8'>
        <input type="text" name="Instrument_mem8" placeholder='Instrument du membre 8'>
    </div>

    <div>
    <br>
    <label for="statutAssos"> Statut associatif ? </label>
    <br>
    <input type='radio' name='statutAssos' value='oui' required>
    <input type='radio' name='statutAssos' value='non'>
    </div>

    <div>
    <br>
    <label for="sacem"> Inscrit à la SACEM ? </label>
    <br>
    <input type='radio' name='sacem' value='oui' required>
    <input type='radio' name='sacem' value='non'>
    </div>

    <div>
    <br>
    <label for="producteur"> Producteur ? </label>
    <br>
    <input type='radio' name='producteur' value='oui' required>
    <input type='radio' name='producteur' value='non'>
    </div>

    <div>
    <br>
    <label for="fichiermp3"> Merci d'uploader 3 fichiers au format mp3 </label>
    <br>
    <input type='file' name='fichiermp3[]' accept=".mp3" multiple required>
    </div>

    <div>
    <br>
    <label for="presse"> uploader un article de presse au format pdf (facultatif) </label>
    <br>
    <input type='file' name='presse' accept=".pdf">
    </div>

    <div>
    <br>
    <label for="photogroupe"> Merci d'uploader 2 images au format PNG </label>
    <br>
    <input type='file' name='photogroupe[]' accept=".png" multiple required>
    </div>

    <div>
    <br>
    <label for="ficheTech"> Uploader une fiche technique au format pdf </label>
    <br>
    <input type='file' name='ficheTech' accept=".pdf" required>
    </div>

    <div>
    <br>
    <label for="ficheTech"> Uploader une fiche technique au format pdf </label>
    <br>
    <input type='file' name='ficheTech' accept=".pdf" required>
    </div>

    <div>
    <br>
    <label for="setlist"> Uploader un document de la SACEM ou le détail des morceaux de la setlist au format pdf </label>
    <br>
    <input type='file' name='setlist' accept=".pdf" required>
    </div>

    <div>
    <br>
    <input type="submit" value="S'inscrire">
    </div>
</form>
<?php
}
}
/* {/block 'body'} */
}
