<?php

    // Appel des configurations
    require_once(__DIR__.'/../config/config.php');
    require_once(__DIR__.'/../config/data.php');

    // Variables
    $choices = unserialize($_COOKIE['userRssReader']);

    // Appel des fonctions
    require_once(__DIR__.'/../helpers/functions.php');
    
    // Récupération des valeurs 
    $newChoices = compareChoiceAndThemes($choices, $themes);

    // Stockage des valeurs du tableau dans des variables
    $urlOne = $newChoices[0];
    $urlTwo = $newChoices[1];
    $urlThree = $newChoices[2];
    $urlFour = $newChoices[3];
    $urlFive = $newChoices[4];

    
    // Appel des vues
    include(__DIR__.'/../views/templates/header.php');
    
    include(__DIR__.'/../views/home.php');
        
    include(__DIR__.'/../views/templates/footer.php');

