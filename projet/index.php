<?php
require '../../includes/flight-master/flight/Flight.php';
// Load Smarty library
require '../../includes/smarty-3.1.35/libs/Smarty.class.php';
require '../../includes/pdo.php';
require "routes.php";

session_start();

$pdo = new PDO(
    "mysql:host = localhost;
     port=3306;dbname=m3104;charset=utf8",
     "root",
     "",
);

Flight::set('db', $pdo);

// Register Smarty as the view class
// Also pass a callback function to configure Smarty on load
Flight::register('view', 'Smarty', array(), function($smarty){
    $smarty->template_dir = './templates/';
    $smarty->compile_dir = './templates_c/';
    $smarty->config_dir = './config/';
    $smarty->cache_dir = './cache/';    
});

Flight::map('render', function($template, $data){
    Flight::view()->assign($data);
    Flight::view()->display($template);
    
});

//Récupère tous les enregistrement de la table departement et les met dans une variable globale departements, accessible dans les templates
$db = Flight::get('db');
$departements = $db->prepare("SELECT NomDepartement FROM departements");   
$departements->execute();
$departements = $departements->fetchAll(PDO::FETCH_ASSOC);   
Flight::view()->assign('departements', $departements);

//Récupère tous les enregistrement de la table candidature et les met dans une variable globale groupe, accessible dans les templates
$groupe = $db->prepare("SELECT NomGroupe AS NomLien, NomGroupe, Departement, Style, Scene, Adresse_Resp, CodeP_Resp, DescGroupe, ExpScene  FROM candidature");   
$groupe->execute();
$groupe = $groupe->fetchAll(PDO::FETCH_ASSOC);   
Flight::view()->assign('groupe', $groupe);


//Récupère tous les enregistrement de la table scene et les met dans une variable globale scene, accessible dans les templates
$scene = $db->prepare("SELECT scene FROM scene");   
$scene->execute();
$scene = $scene->fetchAll(PDO::FETCH_ASSOC);   
Flight::view()->assign('scene', $scene); 


//Si la session est initialisée, toutes les infos de l'utilisateur sont passée en varaible globale (utile pour le préremplissage de la candidature)
if(isset($_SESSION['Nom'])){
    Flight::view()->assign('Nom', $_SESSION['Nom']);
    Flight::view()->assign('Prenom', $_SESSION['Prenom']);
    Flight::view()->assign('Email', $_SESSION['Email']);
    Flight::view()->assign('Adresse', $_SESSION['Adresse']);
    Flight::view()->assign('CP', $_SESSION['CP']);
    Flight::view()->assign('Admin', $_SESSION['Admin']);
}



Flight::start();