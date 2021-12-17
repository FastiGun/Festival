<?php

Flight::route('/', function(){
    Flight::render("accueil.tpl",array());
});

/*******************************************************************************************************************************************/

Flight::route('GET /register', function(){
    Flight::render("register.tpl",array());
});

Flight::route('POST /register', function(){
    
    $db = Flight::get('db');
    $messages=array();                     //tableau récupérant les messages d'erreur 

    //récup donnéees POST
    $data = Flight::request() -> data;     //Recupération des données passées en POST

    if(empty($data->Nom)){
        $messages['Nom'] = "Le nom doit etre rempli";
    }

    if(empty($data->Prenom)){
        $messages['Prenom'] = "Le prenom doit etre rempli";
    }

    if(empty($data->Email)){
        $messages['Email'] = "L'adresse mail doit etre remplie";
    } else {
        if(!filter_var($data->Email, FILTER_VALIDATE_EMAIL)){   //Teste si l'adresse mail est valide, inutile si le type d'input du formulaire est "email"
            $messages['Email']="L'adresse mail est invalide";
        }
    }
    $email = $data->Email;
    $stmt = $db->prepare("SELECT * FROM utilisateurfest WHERE Email =?"); //Recherche dans la base si un utilisateur possède déjà l'adresse mail rentrée
    $stmt->execute([$email]);
    $utilisateur = $stmt->fetch();   //retourne faux si l'adresse mail ne se trouve pas dans la base, vrai sinon

    if($utilisateur){
        $messages['Email'] = "L'utilisateur existe déjà";    
    }

    if(empty($data->Motdepasse)){
        $messages['Motdepasse'] = "Le mot de passe ne doit pas être vide";
    }
    else
    if(strlen($data->Motdepasse) < 8){
        $messages['Motdepasse'] = "Le mot de passe doit faire 8 caracteres";
    }

    if(empty($data->Adresse)){
        $messages['Adresse'] = "L'adresse doit etre remplie";
    }

    if(empty($data->CP)){
        $messages['CP'] = "Le Code Postal doit être rempli";
    } else{
        if(strlen($data->CP) != 5) {
            $messages['CP'] = "Le Code Postal doit être sous la forme de 5 chiffres";
        }
    }

    if(count($messages) == 0){             //Si aucun message d'erreur
           Flight::redirect('/');
           $stmt = $db -> prepare("INSERT INTO utilisateurfest VALUES (:email, :Nom, :Prenom, :Motdepasse, :Adresse, :CP, :administrateur)"); //Insère les données POST dans la base de données
           $stmt->execute(array(
               ':email' => $_POST['Email'],
               ':Nom' => $_POST['Nom'],
               ':Prenom' => $_POST['Prenom'],
               ':Motdepasse' => password_hash($_POST['Motdepasse'], PASSWORD_DEFAULT), //cryptage du mdp rentré par l'utilisateur
               ':Adresse' => $_POST['Adresse'],
               ':CP' => $_POST['CP'],
               ':administrateur' => 0,    //Un utilisateur sera par défaut non admin
           ));
    } else{    //Si message d'erreur
        Flight::render('register.tpl', 
            array(
                'messages' => $messages,
                'data' => $_POST  //Insère dans les champs d'input du formulaire, les données rentrées précédemment (sauf mdp)
            ));
    }
});

/*******************************************************************************************************************************************/

Flight::route('GET /login', function(){
    Flight::render("login.tpl",array());
});

Flight::route('POST /login', function(){
    $db = Flight::get('db');
    $messages=array();

    //récup donnéees POST
    $data = Flight::request() -> data;

    if(empty($data->Email)){
        $messages['Email'] = "Veuillez remplir l'adresse mail";
    } else {
        if(!filter_var($data->Email, FILTER_VALIDATE_EMAIL)){                    //inutile avec le type d'input email
            $messages['Email']="L'adresse mail est invalide";
        }
    }
    
    $email = $data->Email;
    $stmt = $db->prepare("SELECT * FROM utilisateurfest WHERE Email =?");
    $stmt->execute([$email]);
    $utilisateur = $stmt->fetch();

    if($utilisateur){        //Si l'utilisateur existe
        $passwd = $db->prepare("SELECT Motdepasse FROM utilisateurfest WHERE Email =?");       //Récupère le mot de passe crypté de l'utilisateur
        $passwd->execute([$email]);
        $mdp = $passwd->fetchColumn();   

        if(!password_verify($data->Motdepasse, $mdp)){        //Vérifie que le mot de passe entré et le mot de passe dans la base correspondent
            $messages['Motdepasse'] = "Le mot de passe ne correspond pas";
        }   
    } else {
        $messages['Email'] = "Utilisateur non trouvé, veuillez réessayer";
    }


    if(count($messages) == 0){     //Si pas de message d'erreur
        
        $infoUser = $db->prepare("SELECT Nom, Prenom, Adresse, CP, administrateur FROM utilisateurfest WHERE Email =?");   //Récupère le nom de l'utilisateur pour l'afficher
        $infoUser->execute([$email]);
        $res = $infoUser->fetch(); 
        $_SESSION['Nom'] = $res[0];     //Initialise la session au nom de l'utilisateur
        $_SESSION['Prenom'] = $res[1];         
        $_SESSION['Adresse'] = $res[2];
        $_SESSION['CP'] = $res[3];
        $_SESSION['Email'] = $email;
        $_SESSION['Admin'] = $res[4];
        if(!empty($_SESSION['Nom'])) {   //Si la session est initialisée
            Flight::redirect('/');
        }
        
    } else{
     Flight::render('login.tpl', //Redirige sur la page login
         array(
             'messages' => $messages,
             'data' => $_POST 
         ));
 }
});

/*******************************************************************************************************************************************/

Flight::route('/profil-@nomResp', function($nomResp){             //pour un utilisateur, on passe par le nom du responsable
    $db = Flight::get('db');

    $profil = $db->prepare("SELECT email, Nom, Prenom, Adresse FROM utilisateurfest WHERE Email=?");   //Récupère toutes les infos de l'utilisateur connecté
    $profil->execute([$_SESSION['Email']]);
    $profil = $profil->fetchAll(PDO::FETCH_ASSOC);   //Retourne le résultat de la requête dans un tableau associatif
    Flight::view()->assign('profil', $profil);
    
    //Affichage de la candidature côté utilisateur
    $erreur = array();
    $champs = array();
    $presGroupe = $db->prepare("SELECT * FROM candidature WHERE Email_Resp=?");     
    $presGroupe->execute([$_SESSION['Email']]);
    $presGroupe = $presGroupe->fetch();
    if(!$presGroupe){
        $erreur['Erreur'] = "Vous n'avez pas de candidature en cours";
    } else{
        $photo = explode(' ', $presGroupe[21]);
        $champs['photo1'] = "fichiers/".$presGroupe[0]."/".$photo[0];
        $champs['photo2'] = "fichiers/".$presGroupe[0]."/".$photo[1];
        $champs['NomGroupe'] = $presGroupe[0];
        $pistes = explode(' ', $presGroupe[19]);
        $champs['mp31'] = "./fichiers/".$presGroupe[0]."/".$pistes[0];
        $champs['mp32'] = "./fichiers/".$presGroupe[0]."/".$pistes[1];
        $champs['mp33'] = "./fichiers/".$presGroupe[0]."/".$pistes[2];
        $champs['Departement'] = $presGroupe[2];
        $champs['Adresse'] = $presGroupe[7];
        $champs['CP'] = $presGroupe[8];
        $champs['Style'] = $presGroupe[4];
        $champs['Scene'] = $presGroupe[3];
        $champs['Soundcloud'] = $presGroupe[14];
        $champs['SiteGroupe'] = $presGroupe[13];
        $champs['Youtube'] = $presGroupe[15];
        $champs['ExpScene'] = $presGroupe[12];
        $champs['DescGroupe'] = $presGroupe[11];
        $champs['Presse'] = "fichiers/".$presGroupe[0]."/".$presGroupe[20];
        $champs['Setlist'] = "fichiers/".$presGroupe[0]."/".$presGroupe[23];
        $champs['ficheTech'] = "fichiers/".$presGroupe[0]."/".$presGroupe[22];
    }
    
    Flight::render("profil.tpl", array(
        'erreur' => $erreur,
        'champs' => $champs
    ));
});

/*******************************************************************************************************************************************/

Flight::route('GET /candidature', function(){
        Flight::render("candidature.tpl",array());   
});

Flight::route('POST /candidature', function(){
    $db = Flight::get('db');
    $messages=array();                     //tableau récupérant les messages d'erreur 

    //récup donnéees POST
    $data = Flight::request() -> data;     //Recupération des données passées en POST

    if(strlen($data->AnneeCrea) != 4){   
            $messages['AnneeCrea']="L'année doit être au format YYYY";
    }
    
    
    if(strlen($data->CodeP_Resp) !=5 ){
        $messages['CodeP_Resp'] = "Le code postal est une suite de 5 chiffres";
    }

    if(count($_FILES['fichiermp3']['name']) !=3 ){
        $messages['fichiermp3'] = "Merci d'uploader exactement 3 fichiers au format mp3";
    }

    if(count($_FILES['photogroupe']['name']) != 2){
        $messages['photogroupe'] = "Merci d'uploader exactement 2 fichiers au format png";
    }

    if(empty($_POST['Nom_mem'])){
        $messages['Nom_mem'] = "Merci de saisir au moins 1 membre du groupe";
    }
    

    if(count($messages) == 0){             //Si aucun message d'erreur   

        $destination = "./fichiers/".$_POST['NomGroupe'];
        mkdir($destination);                                 //On crée le fichier du groupe en local 

        $nomMp3 = array();                                      //Va permettre de passer à la base de données les noms de fichiers rentrés dans un champ multiple, ici les fichiers mp3
        for($i=0;$i<3;$i++){
            $filename = $_POST['NomGroupe']."_mp3_".$i.".mp3";    //Renomme les fichiers au format {nomGroupe}_mp3_{numFichier}.mp3
            move_uploaded_file($_FILES['fichiermp3']['tmp_name'][$i], $destination."/".$filename);    //Déplace les fichiers dans le dossier local du groupe
            $_FILES['fichiermp3']['name'][$i] = $filename;
            array_push($nomMp3, $_FILES['fichiermp3']['name'][$i]);         //met le nom des 3 fichiers dans un tableau qui sera inséré dans la base de données                  
        }

        $nomPhotos = array();
        for($i=0;$i<2;$i++){
            $filename = $filename = $_POST['NomGroupe']."_photo_".$i.".png";  //Renomme les fichiers au format {nomGroupe}_photo_{numFichier}.png
            move_uploaded_file($_FILES['photogroupe']['tmp_name'][$i], $destination."/".$filename);
            $_FILES['photogroupe']['name'][$i] = $filename;
            array_push($nomPhotos, $_FILES['photogroupe']['name'][$i]);       //pareil que les fichiers mp3
        }

        if(!empty($_FILES['presse']['name'])){    //Ce test est là car ces fichiers sont facultatifs, on ne renomerra un fichier inexistant
            $filename = $_POST['NomGroupe']."_presse.pdf";
            move_uploaded_file($_FILES['presse']['tmp_name'], $destination."/".$filename);
            $_FILES['presse']['name'] = $filename;    //renomme le fichier  
        } 

        if(!empty($_FILES['ficheTech']['name'])){
            $filename = $_POST['NomGroupe']."_ficheTech.pdf";
            move_uploaded_file($_FILES['ficheTech']['tmp_name'], $destination."/".$filename);
            $_FILES['ficheTech']['name'] = $filename;   //renomme le fichier  
        }

        if(!empty($_FILES['setlist']['name'])){
            $filename = $_POST['NomGroupe']."_setlist.pdf";
            move_uploaded_file($_FILES['setlist']['tmp_name'], $destination."/".$filename);
            $_FILES['setlist']['name'] = $filename;    //renomme le fichier  
        }

        $candi = $db -> prepare("INSERT INTO candidature VALUES (:NomGroupe, :AnneeCrea, :Departement, :Scene, :Style, :Nom_Resp, :Prenom_Resp, :Adresse_Resp, :CodeP_Resp, :Email_Resp, :Tel_Resp, :DescGroupe, :ExpScene, :siteGroupe, :soundcloud, :youtube, :statutAssos, :sacem, :producteur, :fichiermp3, :presse, :photogroupe, :ficheTech, :setlist)"); //Insère les données POST dans la base de données
        $candi->execute(array(
                ':NomGroupe' => $_POST['NomGroupe'],
                ':AnneeCrea' => $_POST['AnneeCrea'],
                ':Departement' => $_POST['Departement'],
                ':Scene' => $_POST['Scene'],
                ':Style' => $_POST['Style'],
                ':Nom_Resp' => $_POST['Nom_Resp'],
                ':Prenom_Resp' => $_POST['Prenom_Resp'],
                ':Adresse_Resp' => $_POST['Adresse_Resp'],
                ':CodeP_Resp' => $_POST['CodeP_Resp'],
                ':Email_Resp' => $_POST['email_Resp'],
                ':Tel_Resp' => $_POST['Tel_Resp'],
                ':DescGroupe' => $_POST['DescGroupe'],
                ':ExpScene' => $_POST['ExpScene'],
                ':siteGroupe' => $_POST['siteGroupe'],
                ':soundcloud' => $_POST['soundcloud'],
                ':youtube' => $_POST['youtube'],
                ':statutAssos' => $_POST['statutAssos'],
                ':sacem' => $_POST['sacem'],
                ':producteur' => $_POST['producteur'],
                ':fichiermp3' => implode(" ", $nomMp3),  //Transforme le tableau nomMp3 en chaîne de caractère séparée par " "
                ':presse' => $_FILES['presse']['name'],
                ':photogroupe' => implode(" ", $nomPhotos), //Transforme le tableau photoGroupe en chaîne de caractère séparée par " "
                ':ficheTech' => $_FILES['ficheTech']['name'],
                ':setlist' => $_FILES['setlist']['name'],
        ));

        
        $countmembres = count($_POST['Nom_mem']);   //Compte le nombre de membres rentrés dans le formulaire
        $membre = $db -> prepare("INSERT INTO membresgroupe VALUES (:NomGroupe, :Nom, :Prenom, :Instrument)");
        for($i=0;$i<$countmembres;$i++){
            if(!empty($_POST['Nom_mem'][$i])){
                $membre->execute(array(               //Pour chaque membre entré dans le formulaire de candidature, insérer les informations dans la table membresgroupe
                ':NomGroupe' => $_POST['NomGroupe'],
                ':Nom' => $_POST['Nom_mem'][$i],
                ':Prenom' => $_POST['Prenom_mem'][$i],
                ':Instrument' => $_POST['Instrument_mem'][$i],
                ));
            }        
        }

        Flight::redirect('/');
        
        } else{    //Si message d'erreur
        Flight::render('candidature.tpl', 
            array(
                'messages' => $messages,       //Passe le tableau d'erreurs au template
                'data' => $_POST  //Insère dans les champs d'input du formulaire, les données rentrées précédemment (sauf mdp)
            ));

    }
});


/*******************************************************************************************************************************************/

Flight::route('/logout', function(){
    session_unset();                  //vide le tableau de session
    Flight::redirect('/');
});

/*******************************************************************************************************************************************/

Flight::route('/lstCandidatures', function(){
    Flight::render("lstCandidatures.tpl",array());
});

/*******************************************************************************************************************************************/

Flight::route('/candidature_det-@NomGroupe', function($NomGroupe){          //Ici pour l'administrateur, on passe par le nom du groupe
    
    $db = Flight::get('db');
    
     //Affichage de la candidature côté administrateur
    $champs = array();
    $presGroupe = $db->prepare("SELECT * FROM candidature WHERE NomGroupe=?");
    $presGroupe->execute([$NomGroupe]);
    $presGroupe = $presGroupe->fetch();

    $photo = explode(' ', $presGroupe[21]);
    $champs['photo1'] = "fichiers/".$presGroupe[0]."/".$photo[0];   //chemin de la photo 1
    $champs['photo2'] = "fichiers/".$presGroupe[0]."/".$photo[1];   //chemin de la photo 2
    $champs['NomGroupe'] = $presGroupe[0];
    $pistes = explode(' ', $presGroupe[19]);
    $champs['mp31'] = "./fichiers/".$presGroupe[0]."/".$pistes[0];  //chemin de la piste 1
    $champs['mp32'] = "./fichiers/".$presGroupe[0]."/".$pistes[1];
    $champs['mp33'] = "./fichiers/".$presGroupe[0]."/".$pistes[2];
    $champs['Departement'] = $presGroupe[2];
    $champs['Adresse'] = $presGroupe[7];
    $champs['CP'] = $presGroupe[8];
    $champs['Style'] = $presGroupe[4];
    $champs['Scene'] = $presGroupe[3];
    $champs['Soundcloud'] = $presGroupe[14];
    $champs['SiteGroupe'] = $presGroupe[13];
    $champs['Youtube'] = $presGroupe[15];
    $champs['ExpScene'] = $presGroupe[12];
    $champs['DescGroupe'] = $presGroupe[11];
    $champs['Presse'] = "fichiers/".$presGroupe[0]."/".$presGroupe[20];   //chemin des fichiers 
    $champs['Setlist'] = "fichiers/".$presGroupe[0]."/".$presGroupe[23];
    $champs['ficheTech'] = "fichiers/".$presGroupe[0]."/".$presGroupe[22];

    Flight::render("candidature_det.tpl", array(
        'champs' => $champs
    ));

});
?>