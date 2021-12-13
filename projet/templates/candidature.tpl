{extends file='layout.tpl'}
{block name=title}Enregistrement{/block}
{block name=page}Enregistrement{/block}
{block name=body}

<form action="register" method="post" enctype="multipart/form-data" id='register'>
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
        {foreach from=$departements key=$key item=$value}
            {foreach from=$value key=$champs item=$valeur}
                <option value={$valeur}> {$valeur}</option>
            {/foreach}
        {/foreach}
        </select>
    </div>

    <div>
        <br>
        <label for="Scene"> Votre Scène : </label> <!--Liste déroulante à partir de la table scene-->
        <br>
        <select name=Scene required>
        {foreach from=$scene key=$key item=$value}
            {foreach from=$value key=$champs item=$valeur}
                <option value={$valeur}> {$valeur}</option>
            {/foreach}
        {/foreach}
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
    <input type="submit" value="S'inscrire">
    </div>
</form>
{/block}
