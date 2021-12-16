<?php

Flight::route('/', function(){
    Flight::render("accueil.tpl",array());
});

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
    

    if(count($messages) == 0){             //Si aucun message d'erreur   

        $destination = "./fichiers/".$_POST['NomGroupe'];
        mkdir($destination);
        $countfiles = count($_FILES['fichiermp3']['name']);
        $nomMp3 = array();
        for($i=0;$i<$countfiles;$i++){
            $filename = $_POST['NomGroupe']."_mp3_".$i.".mp3";
            move_uploaded_file($_FILES['fichiermp3']['tmp_name'][$i], $destination."/".$filename);
            $_FILES['fichiermp3']['name'][$i] = $filename;
            array_push($nomMp3, $_FILES['fichiermp3']['name'][$i]);
        }

        $countfiles = count($_FILES['photogroupe']['name']);
        $nomPhotos = array();
        for($i=0;$i<$countfiles;$i++){
            $filename = $filename = $_POST['NomGroupe']."_photo_".$i.".png";
            move_uploaded_file($_FILES['photogroupe']['tmp_name'][$i], $destination."/".$filename);
            $_FILES['photogroupe']['name'][$i] = $filename;
            array_push($nomPhotos, $_FILES['photogroupe']['name'][$i]);
        }

        if(!empty($_FILES['presse']['name'])){
            $filename = $filename = $_POST['NomGroupe']."_presse.pdf";
            move_uploaded_file($_FILES['presse']['tmp_name'], $destination."/".$filename);
            $_FILES['presse']['name'] = $filename;
        } 

        if(!empty($_FILES['ficheTech']['name'])){
            $filename = $filename = $_POST['NomGroupe']."_ficheTech.pdf";
            move_uploaded_file($_FILES['ficheTech']['tmp_name'], $destination."/".$filename);
            $_FILES['ficheTech']['name'] = $filename;
        }

        if(!empty($_FILES['setlist']['name'])){
            $filename = $filename = $_POST['NomGroupe']."_setlist.pdf";
            move_uploaded_file($_FILES['setlist']['tmp_name'], $destination."/".$filename);
            $_FILES['setlist']['name'] = $filename;
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
                ':fichiermp3' => implode(" ", $nomMp3),
                ':presse' => $_FILES['presse']['name'],
                ':photogroupe' => implode(" ", $nomPhotos),
                ':ficheTech' => $_FILES['ficheTech']['name'],
                ':setlist' => $_FILES['setlist']['name'],
        ));
        $err = $candi->errorInfo();

        
        $countfiles = count($_POST['Nom_mem']);
            $membre = $db -> prepare("INSERT INTO membresgroupe VALUES (:NomGroupe, :Nom, :Prenom, :Instrument)");
            for($i=0;$i<$countfiles;$i++){
                if(!empty($_POST['Nom_mem'][$i])){
                    $membre->execute(array(
                    ':NomGroupe' => $_POST['NomGroupe'],
                    ':Nom' => $_POST['Nom_mem'][$i],
                    ':Prenom' => $_POST['Prenom_mem'][$i],
                    ':Instrument' => $_POST['Instrument_mem'][$i],
                    ));
                }        
            };
            $errrr = $membre->errorInfo();
        Flight::render('accueil.tpl', array('erreur' => $err, 'erreurM' => $errrr));
        
        } else{    //Si message d'erreur
        Flight::render('candidature.tpl', 
            array(
                'messages' => $messages,
                'data' => $_POST  //Insère dans les champs d'input du formulaire, les données rentrées précédemment (sauf mdp)
            ));

    }
});

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
               ':administrateur' => 0,
           ));
    } else{    //Si message d'erreur
        Flight::render('register.tpl', 
            array(
                'messages' => $messages,
                'data' => $_POST  //Insère dans les champs d'input du formulaire, les données rentrées précédemment (sauf mdp)
            ));
    }
});

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
        if(!filter_var($data->Email, FILTER_VALIDATE_EMAIL)){
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

    if(strlen($data->Motdepasse) < 8){
        $messages['Motdepasse'] = "Le mot de passe doit faire 8 caractères";
    }

    $admin = $db->prepare("SELECT administrateur FROM utilisateurfest WHERE Email =?");
    $admin->execute([$email]);
    $admin = $admin->fetchColumn();

    if(count($messages) == 0){     //Si pas de message d'erreur
        
        $infoUser = $db->prepare("SELECT Nom, Prenom, Adresse, CP FROM utilisateurfest WHERE Email =?");   //Récupère le nom de l'utilisateur pour l'afficher
        $infoUser->execute([$email]);
        $res = $infoUser->fetch(); 
        $_SESSION['Nom'] = $res[0];     //Initialise la session au nom de l'utilisateur
        $_SESSION['Prenom'] = $res[1];         
        $_SESSION['Adresse'] = $res[2];
        $_SESSION['CP'] = $res[3];
        $_SESSION['Email'] = $email;
        $_SESSION['Admin'] = $admin;
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

Flight::route('/logout', function(){
    session_unset();     //vide le tableau de session
    Flight::redirect('/');
});

Flight::route('/lstCandidatures', function(){
    Flight::render("lstCandidatures.tpl",array());
});

Flight::route('/profil-@nomGroupe', function($nomGroupe))
?>