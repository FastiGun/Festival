<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-15 15:56:20
  from 'C:\laragon\www\tps\projet\templates\candidature.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61ba1024603705_30289874',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9c53f24f84ae9ab8f406f15a3bee2a6fb1f62c6' => 
    array (
      0 => 'C:\\laragon\\www\\tps\\projet\\templates\\candidature.tpl',
      1 => 1639583778,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61ba1024603705_30289874 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_65510596961ba10245f2a91_13862084', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_129468645161ba10245f3215_86693519', 'page');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_49360800561ba10245f36c3_82442795', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_65510596961ba10245f2a91_13862084 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_65510596961ba10245f2a91_13862084',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Candidature<?php
}
}
/* {/block 'title'} */
/* {block 'page'} */
class Block_129468645161ba10245f3215_86693519 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page' => 
  array (
    0 => 'Block_129468645161ba10245f3215_86693519',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Candidature<?php
}
}
/* {/block 'page'} */
/* {block 'body'} */
class Block_49360800561ba10245f36c3_82442795 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_49360800561ba10245f36c3_82442795',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<form action="candidature" method="post" enctype="multipart/form-data" id='register'>
    <div class="row">
        <div class="col-6"><label for="NomGroupe">Nom du groupe</label> 
        <br>
        <input class="form-control" type="text" name="NomGroupe" value='<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['NomGroupe'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
' required></div>
        <br>
        <div class="col-6"><label for="AnneeCrea">Année de création</label>
        <br>
        <input class="form-control" type="number" name="AnneeCrea" value='<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['AnneeCrea'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
' required><!--<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['AnneeCrea'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
--></div>
        <br>
        <div class="col-6"><label for="Style">Style de musique</label>
        <br>
        <input class="form-control" type="text" name="Style" value='<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['Style'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
' required></div>
    </div>
    
    <br>

    <div class="row">
        <div class="col"
            <label for="Departement">Votre Département</label> <!--Liste déroulante à partir de la table département-->
            <br>
            <select class="form-control" name="Departement" required>
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
                    <option value='<?php echo $_smarty_tpl->tpl_vars['valeur']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['valeur']->value;?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
        <div class="col">
            <label for="Scene">Votre Scène</label> <!--Liste déroulante à partir de la table scene-->
            <br>
            <select class="form-control" name="Scene" required>
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
                    <option value='<?php echo $_smarty_tpl->tpl_vars['valeur']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['valeur']->value;?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
    </div><br>

    <br>    

    <label for="Responsable">Information du responsable (Compte principal)</label>
    <br>
    <div class="row">
        <div class="col"><input class="form-control" type="text" name="Nom_Resp" placeholder='Nom du responsable' value='<?php echo $_smarty_tpl->tpl_vars['Nom']->value;?>
' required></div>
        <div class="col"><input class="form-control" type="text" name="Prenom_Resp" placeholder='Prenom du responsable' value='<?php echo $_smarty_tpl->tpl_vars['Prenom']->value;?>
' required></div>
    </div>
    <br>
    <div class="row">
        <div class="col"><input class="form-control" type="text" name="Adresse_Resp" placeholder='Adresse du responsable' value='<?php echo $_smarty_tpl->tpl_vars['Adresse']->value;?>
' required></div>
        <div class="col"><input class="form-control" type="number" name="CodeP_Resp" placeholder='Code Postal du responsable' value='<?php echo $_smarty_tpl->tpl_vars['CP']->value;?>
' required><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['CopdeP_Resp'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</div>
    </div>
    <br>
    <div class="row">
        <div class="col"><input class="form-control" type="email" name="email_Resp" placeholder='Adresse mail du responsable' value='<?php echo $_smarty_tpl->tpl_vars['Email']->value;?>
' required></div>
        <div class="col"><input class="form-control" type="tel" name="Tel_Resp" placeholder='Téléphone du responsable' value='<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['Tel_Resp'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
' minlength='10' maxlength='10' required></div>
    </div>

    <div class="row">
        <div class="col">
        <br>
        <label for="DescGroupe">Description du groupe (500 caractères max)</label>
        <br>
        <textarea class="form-control" name='DescGroupe' rows='5' cols='64' maxlength='500' value='<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['DescGroupe'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
' required></textarea>
        </div>

        <div class="col">
        <br>
        <label for="ExpScene">Expériences scéniques du groupe (500 caractères max)</label>
        <br>
        <textarea class="form-control" name='ExpScene' rows='5' cols='64' maxlength='500' value='<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['ExpScene'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
' required></textarea>
        </div>
    </div>

    <div class="row">
        <div class="col">
        <br>
        <label for="siteGroupe">Site du groupe</label>
        <br>
        <input class="form-control" type='url' name='siteGroupe'  value='<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['siteGroupe'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
' placeholder='https://example.com' required>
        </div>

        <div class="col">
        <br>
        <label for="soundcloud">Page soundcloud (facultatif)</label>
        <br>
        <input class="form-control" type="url" name ="soundcloud" value='<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['soundcloud'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
' >
        </div>

        <div class="col">
        <br>
        <label for="youtube">Page Youtube (facultatif)</label>
        <br>
        <input class="form-control" type='url' name='youtube' value='<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['youtube'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
'>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <br>
            <label for="membre1">Informations membre 1</label>
            <br>
            <input class="form-control" type="text" name="Nom_mem[]" placeholder='Nom' value='<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['Nom_mem'][0], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
' required>
            <input class="form-control" type="text" name="Prenom_mem[]" placeholder='Prenom' value='<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['Prenom_mem'][0], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
' required>
            <input class="form-control" type="text" name="Instrument_mem[]" placeholder='Instrument' value='<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['Instrument_mem'][0], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
' required>
        </div>

        <div class="col">
            <br>
            <label for="membre2">Informations membre 2</label>
            <br>
            <input class="form-control" type="text" name="Nom_mem[]" placeholder='Nom'>
            <input class="form-control" type="text" name="Prenom_mem[]" placeholder='Prenom'>
            <input class="form-control" type="text" name="Instrument_mem[]" placeholder='Instrument'>
        </div>

        <div class="col">
            <br>
            <label for="membre3">Informations membre 3</label>
            <br>
            <input class="form-control" type="text" name="Nom_mem[]" placeholder='Nom'>
            <input class="form-control" type="text" name="Prenom_mem[]" placeholder='Prenom'>
            <input class="form-control" type="text" name="Instrument_mem[]" placeholder='Instrument'>
        </div>

        <div class="col">
            <br>
            <label for="membre4">Informations membre 4</label>
            <br>
            <input class="form-control" type="text" name="Nom_mem[]" placeholder='Nom'>
            <input class="form-control" type="text" name="Prenom_mem[]" placeholder='Prenom'>
            <input class="form-control" type="text" name="Instrument_mem[]" placeholder='Instrument'>
        </div>

        <div class="col">
            <br>
            <label for="membre5">Informations membre 5</label>
            <br>
            <input class="form-control" type="text" name="Nom_mem[]" placeholder='Nom'>
            <input class="form-control" type="text" name="Prenom_mem[]" placeholder='Prenom'>
            <input class="form-control" type="text" name="Instrument_mem[]" placeholder='Instrument'>
        </div>

        <div class="col">
            <br>
            <label for="membre6">Informations membre 6</label>
            <br>
            <input class="form-control" type="text" name="Nom_mem[]" placeholder='Nom'>
            <input class="form-control" type="text" name="Prenom_mem[]" placeholder='Prenom'>
            <input class="form-control" type="text" name="Instrument_mem[]" placeholder='Instrument'>
        </div>

        <div class="col">
            <br>
            <label for="membre7">Informations membre 7</label>
            <br>
            <input class="form-control" type="text" name="Nom_mem[]" placeholder='Nom'>
            <input class="form-control" type="text" name="Prenom_mem[]" placeholder='Prenom'>
            <input class="form-control" type="text" name="Instrument_mem[]" placeholder='Instrument'>
        </div>

        <div class="col">
            <br>
            <label for="membre8">Informations membre 8</label>
            <br>
            <input class="form-control" type="text" name="Nom_mem[]" placeholder='Nom'>
            <input class="form-control" type="text" name="Prenom_mem[]" placeholder='Prenom'>
            <input class="form-control" type="text" name="Instrument_mem[]" placeholder='Instrument'>
        </div>
    </div>

    <div class="row">
        <div class="col">
        <br>
        <label for="statutAssos">Statut associatif</label>
        <br>
        <input type='radio' name='statutAssos' value='1' required><label> Oui</label><br>
        <input type='radio' name='statutAssos' value='0'><label> Non</label>
        </div>

        <div class="col">
        <br>
        <label for="sacem">Inscription à la SACEM</label>
        <br>
        <input type='radio' name='sacem' value='1' required><label> Oui</label><br>
        <input type='radio' name='sacem' value='0'><label> Non</label>
        </div>

        <div class="col">
        <br>
        <label for="producteur">Présence de producteur</label>
        <br>
        <input type='radio' name='producteur' value='1' required><label> Oui</label><br>
        <input type='radio' name='producteur' value='0'><label> Non</label>
        </div>
    </div>

    <div class="row">
        <div class="col">
        <br>
        <label for="fichiermp3">3 fichiers audio au format MP3</label>
        <br>
        <input type='file' name='fichiermp3[]' accept=".mp3" multiple required>
        <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['fichiermp3'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>

        </div>

        <div class="col">
        <br>
        <label for="presse">Article de presse au format PDF (facultatif)</label>
        <br>
        <input type='file' name='presse' accept=".pdf">
        </div>

        <div class="col">
        <br>
        <label for="photogroupe">2 images au format PNG </label>
        <br>
        <input type='file' name='photogroupe[]' accept=".png" multiple required>
        <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['photogroupe'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>

        </div>

        <div class="col">
        <br>
        <label for="ficheTech">Fiche technique au format PDF</label>
        <br>
        <input type='file' name='ficheTech' accept=".pdf" required>
        </div>

        <div class="col">
        <br>
        <label for="setlist">Document de la SACEM ou le détail des morceaux de la setlist au format PDF</label>
        <br>
        <input type='file' name='setlist' accept=".pdf" required>
        </div>
    </div>

    <div>
    <br>
    <input class="bouton-form btn btn-primary" type="submit" value="Envoyer la candidature">
    </div>
</form>
<?php
}
}
/* {/block 'body'} */
}
