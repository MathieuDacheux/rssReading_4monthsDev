<?php

    // Appel des configurations
    require_once(__DIR__.'/../config/config.php');
    require_once(__DIR__.'/../config/data.php');

    // Variables
    $choices = unserialize($_COOKIE['userRssReader']);
    $maxArticles = $_COOKIE['numberArticles'];
    $themeStyle = ($_COOKIE['theme'] == '1') ? 'light' : 'dark';
    $title = 'Entreprendre';
    $method = ($_SERVER['REQUEST_URI'] == '/controllers/pagesController.php') ? './pagesController.php' : './controllers/pagesController.php';


    // Appel des fonctions
    require_once(__DIR__.'/../helpers/functions.php');
    
    // Récupération des valeurs 
    $newChoices = compareChoiceAndThemes($choices, $themes);

    // Stockage des valeurs du tableau dans des variables
    $urlOne = $newChoices[0];
    $urlTwo = $newChoices[1];
    $urlThree = $newChoices[2];

    
    // Appel des vues
    include(__DIR__.'/../views/templates/header.php');
    
    include(__DIR__.'/../views/home.php');
        
    include(__DIR__.'/../views/templates/footer.php');

