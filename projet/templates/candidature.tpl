{extends file='layout.tpl'}
{block name=title}Candidature{/block}
{block name=page}Candidature{/block}
{block name=body}

<form action="candidater" method="post" enctype="multipart/form-data" id='register'>
    <div class="row">
        <div class="col-6"><label for="NomGroupe">Nom du groupe</label> 
        <br>
        <input class="form-control" type="text" name="NomGroupe" value=''></div>
        <br>
        <div class="col-6"><label for="AnneeCrea">Année de création</label>
        <br>
        <input class="form-control" type="number" name="AnneeCrea" value=''></div>
    </div>
    
    <br>

    <div class="row">
        <div class="col"
            <label for="Departement">Votre Département</label> <!--Liste déroulante à partir de la table département-->
            <br>
            <select class="form-control" name=Departement required>
            {foreach from=$departements key=$key item=$value}
                {foreach from=$value key=$champs item=$valeur}
                    <option value={$valeur}> {$valeur}</option>
                {/foreach}
            {/foreach}
            </select>
        </div>
        <div class="col">
            <label for="Scene">Votre Scène</label> <!--Liste déroulante à partir de la table scene-->
            <br>
            <select class="form-control" name=Scene required>
            {foreach from=$scene key=$key item=$value}
                {foreach from=$value key=$champs item=$valeur}
                    <option value={$valeur}> {$valeur}</option>
                {/foreach}
            {/foreach}
            </select>
        </div>
    </div><br>

    <br>    

    <label for="Responsable">Information du responsable (Compte principal)</label>
    <br>
    <div class="row">
        <div class="col"><input class="form-control" type="text" name="Nom_Resp" placeholder='Nom du responsable' required></div>
        <div class="col"><input class="form-control" type="text" name="Prenom_Resp" placeholder='Prenom du responsable' required></div>
    </div>
    <br>
    <div class="row">
        <div class="col"><input class="form-control" type="text" name="Adresse_Resp" placeholder='Adresse du responsable' required></div>
        <div class="col"><input class="form-control" type="number" name="CodeP_Resp" placeholder='Code Postal du responsable' required></div>
    </div>
    <br>
    <div class="row">
        <div class="col"><input class="form-control" type="email" name="email_Resp" placeholder='Adresse mail du responsable' required></div>
        <div class="col"><input class="form-control" type="tel" name="Tel_Resp" placeholder='Téléphone du responsable' minlength='10' maxlength='10' required></div>
    </div>

    <div class="row">
        <div class="col">
        <br>
        <label for="DescGroupe">Description du groupe (500 caractères max)</label>
        <br>
        <textarea class="form-control" name='DescGroupe' form='register' rows='5' cols='64' maxlength='500' required></textarea>
        </div>

        <div class="col">
        <br>
        <label for="ExpScene">Expériences scéniques du groupe (500 caractères max)</label>
        <br>
        <textarea class="form-control" name='ExpScene' form='register' rows='5' cols='64' maxlength='500' required></textarea>
        </div>
    </div>

    <div class="row">
        <div class="col">
        <br>
        <label for="siteGroupe">Site du groupe</label>
        <br>
        <input class="form-control" type='url' name='siteGroupe' placeholder='https://example.com' required>
        </div>

        <div class="col">
        <br>
        <label for="soundcloud">Page soundcloud (facultatif)</label>
        <br>
        <input class="form-control" type="url" name ="soundcloud">
        </div>

        <div class="col">
        <br>
        <label for="youtube">Page Youtube (facultatif)</label>
        <br>
        <input class="form-control" type='url' name='youtube'>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <br>
            <label for="membre1">Informations membre 1</label>
            <br>
            <input class="form-control" type="text" name="Nom_mem1" placeholder='Nom' required>
            <input class="form-control" type="text" name="Prenom_mem1" placeholder='Prenom' required>
            <input class="form-control" type="text" name="Instrument_mem1" placeholder='Instrument' required>
        </div>

        <div class="col">
            <br>
            <label for="membre2">Informations membre 2</label>
            <br>
            <input class="form-control" type="text" name="Nom_mem1" placeholder='Nom'>
            <input class="form-control" type="text" name="Prenom_mem1" placeholder='Prenom'>
            <input class="form-control" type="text" name="Instrument_mem1" placeholder='Instrument'>
        </div>

        <div class="col">
            <br>
            <label for="membre3">Informations membre 3</label>
            <br>
            <input class="form-control" type="text" name="Nom_mem3" placeholder='Nom'>
            <input class="form-control" type="text" name="Prenom_mem3" placeholder='Prenom'>
            <input class="form-control" type="text" name="Instrument_mem3" placeholder='Instrument'>
        </div>

        <div class="col">
            <br>
            <label for="membre4">Informations membre 4</label>
            <br>
            <input class="form-control" type="text" name="Nom_mem4" placeholder='Nom'>
            <input class="form-control" type="text" name="Prenom_mem4" placeholder='Prenom'>
            <input class="form-control" type="text" name="Instrument_mem4" placeholder='Instrument'>
        </div>

        <div class="col">
            <br>
            <label for="membre5">Informations membre 5</label>
            <br>
            <input class="form-control" type="text" name="Nom_mem5" placeholder='Nom'>
            <input class="form-control" type="text" name="Prenom_mem5" placeholder='Prenom'>
            <input class="form-control" type="text" name="Instrument_mem5" placeholder='Instrument'>
        </div>

        <div class="col">
            <br>
            <label for="membre6">Informations membre 6</label>
            <br>
            <input class="form-control" type="text" name="Nom_mem6" placeholder='Nom'>
            <input class="form-control" type="text" name="Prenom_mem6" placeholder='Prenom'>
            <input class="form-control" type="text" name="Instrument_mem6" placeholder='Instrument'>
        </div>

        <div class="col">
            <br>
            <label for="membre7">Informations membre 7</label>
            <br>
            <input class="form-control" type="text" name="Nom_mem7" placeholder='Nom'>
            <input class="form-control" type="text" name="Prenom_mem7" placeholder='Prenom'>
            <input class="form-control" type="text" name="Instrument_mem7" placeholder='Instrument'>
        </div>

        <div class="col">
            <br>
            <label for="membre8">Informations membre 8</label>
            <br>
            <input class="form-control" type="text" name="Nom_mem8" placeholder='Nom'>
            <input class="form-control" type="text" name="Prenom_mem8" placeholder='Prenom'>
            <input class="form-control" type="text" name="Instrument_mem8" placeholder='Instrument'>
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
        <label for="producteur">Présence d'un producteur</label>
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
