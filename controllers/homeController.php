<?php

    // Appel des configurations
    require_once(__DIR__.'/../config/config.php');
    require_once(__DIR__.'/../config/data.php');

    // Variables

    $choices = unserialize($_COOKIE['userRssReader']);

    // Appel des fonctions
    require_once(__DIR__.'/../helpers/functions.php');

    $choices = compareChoiceAndThemes($choices, $themes);
    var_dump($choices);


    // Appel des vues

    include(__DIR__.'/../views/templates/header.php');

    include(__DIR__.'/../views/home.php');
        
    include(__DIR__.'/../views/templates/footer.php');

