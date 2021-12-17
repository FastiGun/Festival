{extends file='layout.tpl'}
{block name=title}Candidature{/block}
{block name=page}Candidature{/block}
{block name=body}

<form action="candidature" method="post" enctype="multipart/form-data" id='register'>
    <div class="row">
        <div class="col-6"><label for="NomGroupe">Nom du groupe</label> 
        <br>
        <input class="form-control" type="text" name="NomGroupe" value='{$data.NomGroupe|escape|default:''}' required></div>
        <br>
        <div class="col-6"><label for="AnneeCrea">Année de création</label>
        <br>
        <input class="form-control" type="number" name="AnneeCrea" value='{$data.AnneeCrea|escape|default:''}' required><!--{$messages.AnneeCrea|escape|default:''}--></div>
        <br>
        <div class="col-6"><label for="Style">Style de musique</label>
        <br>
        <input class="form-control" type="text" name="Style" value='{$data.Style|escape|default:''}' required></div>
    </div>
    
    <br>

    <div class="row">
        <div class="col"
            <label for="Departement">Votre Département</label> <!--Liste déroulante à partir de la table département-->
            <br>
            <select class="form-control" name="Departement" required>
            {foreach from=$departements key=$key item=$value}
                {foreach from=$value key=$champs item=$valeur}
                    <option value='{$valeur}'>{$valeur}</option>
                {/foreach}
            {/foreach}
            </select>
        </div>
        <div class="col">
            <label for="Scene">Votre Scène</label> <!--Liste déroulante à partir de la table scene-->
            <br>
            <select class="form-control" name="Scene" required>
            {foreach from=$scene key=$key item=$value}
                {foreach from=$value key=$champs item=$valeur}
                    <option value='{$valeur}'>{$valeur}</option>
                {/foreach}
            {/foreach}
            </select>
        </div>
    </div><br>

    <br>    

    <label for="Responsable">Information du responsable (Compte principal)</label>
    <br>
    <div class="row">
        <div class="col"><input class="form-control" type="text" name="Nom_Resp" placeholder='Nom du responsable' value='{$Nom}' required></div>
        <div class="col"><input class="form-control" type="text" name="Prenom_Resp" placeholder='Prenom du responsable' value='{$Prenom}' required></div>
    </div>
    <br>
    <div class="row">
        <div class="col"><input class="form-control" type="text" name="Adresse_Resp" placeholder='Adresse du responsable' value='{$Adresse}' required></div>
        <div class="col"><input class="form-control" type="number" name="CodeP_Resp" placeholder='Code Postal du responsable' value='{$CP}' required>{$messages.CopdeP_Resp|escape|default:''}</div>
    </div>
    <br>
    <div class="row">
        <div class="col"><input class="form-control" type="email" name="email_Resp" placeholder='Adresse mail du responsable' value='{$Email}' required></div>
        <div class="col"><input class="form-control" type="tel" name="Tel_Resp" placeholder='Téléphone du responsable' value='{$data.Tel_Resp|escape|default:''}' minlength='10' maxlength='10' required></div>
    </div>

    <div class="row">
        <div class="col">
        <br>
        <label for="DescGroupe">Description du groupe (500 caractères max)</label>
        <br>
        <textarea class="form-control" name='DescGroupe' rows='5' cols='64' maxlength='500' required>{$data.DescGroupe|escape|default:''}</textarea>
        </div>

        <div class="col">
        <br>
        <label for="ExpScene">Expériences scéniques du groupe (500 caractères max)</label>
        <br>
        <textarea class="form-control" name='ExpScene' rows='5' cols='64' maxlength='500' required>{$data.ExpScene|escape|default:''}</textarea>
        </div>
    </div>

    <div class="row">
        <div class="col">
        <br>
        <label for="siteGroupe">Site du groupe</label>
        <br>
        <input class="form-control" type='url' name='siteGroupe'  value='{$data.siteGroupe|escape|default:''}' placeholder='https://example.com' required>
        </div>

        <div class="col">
        <br>
        <label for="soundcloud">Page soundcloud (facultatif)</label>
        <br>
        <input class="form-control" type="url" name ="soundcloud" value='{$data.soundcloud|escape|default:''}' >
        </div>

        <div class="col">
        <br>
        <label for="youtube">Page Youtube (facultatif)</label>
        <br>
        <input class="form-control" type='url' name='youtube' value='{$data.youtube|escape|default:''}'>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <br>
            <label for="membre1">Informations membre 1</label>
            <br>
            <input class="form-control" type="text" name="Nom_mem[]" placeholder='Nom' value='{$data.Nom_mem[0]|escape|default:''}' required>
            <input class="form-control" type="text" name="Prenom_mem[]" placeholder='Prenom' value='{$data.Prenom_mem[0]|escape|default:''}' required>
            <input class="form-control" type="text" name="Instrument_mem[]" placeholder='Instrument' value='{$data.Instrument_mem[0]|escape|default:''}' required>
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
        <input type='radio' name='statutAssos' value='1' checked required><label> Oui</label><br>
        <input type='radio' name='statutAssos' value='0'><label> Non</label>
        </div>

        <div class="col">
        <br>
        <label for="sacem">Inscription à la SACEM</label>
        <br>
        <input type='radio' name='sacem' value='1' checked required><label> Oui</label><br>
        <input type='radio' name='sacem' value='0'><label> Non</label>
        </div>

        <div class="col">
        <br>
        <label for="producteur">Présence de producteur</label>
        <br>
        <input type='radio' name='producteur' value='1' checked required><label> Oui</label><br>
        <input type='radio' name='producteur' value='0'><label> Non</label>
        </div>
    </div>

    <div class="row">
        <div class="col">
        <br>
        <label for="fichiermp3">3 fichiers audio au format MP3</label>
        <br>
        <input type='file' name='fichiermp3[]' accept=".mp3" multiple required>
        {$messages.fichiermp3|escape|default:''}
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
        {$messages.photogroupe|escape|default:''}
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
{/block}
