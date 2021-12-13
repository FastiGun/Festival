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

$db = Flight::get('db');
$departements = $db->prepare("SELECT NomDepartement FROM departements");   
$departements->execute();
$departements = $departements->fetchAll(PDO::FETCH_ASSOC);   
Flight::view()->assign('departements', $departements);      

$scene = $db->prepare("SELECT scene FROM scene");   
$scene->execute();
$scene = $scene->fetchAll(PDO::FETCH_ASSOC);   
Flight::view()->assign('scene', $scene); 

if(isset($_SESSION['Nom'])){
    Flight::view()->assign('Nom', $_SESSION['Nom']);
    
}

if(isset($_SESSION['Admin'])){
    Flight::view()->assign('Admin', $_SESSION['Admin']);
    
}

Flight::start();