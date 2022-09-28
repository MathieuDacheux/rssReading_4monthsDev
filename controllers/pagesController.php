<?php

    // Appel des configurations
    require_once(__DIR__.'/../config/config.php');
    require_once(__DIR__.'/../config/data.php');

    // Appel des fonctions
    require_once(__DIR__.'/../helpers/functions.php');
    
    // Variables
    $choices = unserialize($_COOKIE['userRssReader']);
    $newChoices = compareChoiceAndThemes($choices, $themes);
    $maxLenght = $_COOKIE['numberArticles'];
    $themeStyle = ($_COOKIE['theme'] == '1') ? 'light' : 'dark';
    $userChoice = filterAndValidateHomeSelect();
    $method = ($_SERVER['REQUEST_URI'] == '/controllers/pagesController.php') ? './pagesController.php' : './controllers/pagesController.php';

    // Appel des vues

    include(__DIR__.'/../views/templates/header.php');

    include(__DIR__.'/../views/pages.php');
        
    include(__DIR__.'/../views/templates/footer.php');