<?php

Flight::route('/', function(){
    Flight::render("accueil.tpl",array());
});

Flight::route('GET /candidature', function(){
    Flight::render("candidature.tpl",array());
});

Flight::route('POST /candidature', function(){
    
});
?>