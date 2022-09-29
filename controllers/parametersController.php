<?php

    // Appel des configurations
    require_once(__DIR__.'/../config/config.php');
    require_once(__DIR__.'/../config/data.php');

    // Appel des fonctions
    require_once(__DIR__.'/../helpers/functions.php');

    // Variables
    $choices = [];
    $method = ($_SERVER['REQUEST_URI'] == '/controllers/pagesController.php') ? './pagesController.php' : './controllers/pagesController.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $theme = filterAndValidateThemeMode();
        $number = filterAndValidateRadio();
        $subjects = filterAndValidateCheckbox();
        if (isset($_COOKIE['userRssReader']) && isset($_COOKIE['numberArticles']) && isset($_COOKIE['theme'])) {
            header('Location: /controllers/homeController.php');
            exit();
        } else {
            
        }
    }

    // Appel des vues
    include(__DIR__.'/../views/templates/header.php');

    include(__DIR__.'/../views/parameters.php');
        
    include(__DIR__.'/../views/templates/footer.php');