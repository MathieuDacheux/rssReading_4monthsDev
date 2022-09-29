<?php

    // Appel des configurations
    require_once(__DIR__.'/../config/config.php');
    require_once(__DIR__.'/../config/data.php');

    // Appel des fonctions
    require_once(__DIR__.'/../helpers/functions.php');
    
    // Variables
    $userChoice = filterAndValidateHomeSelect();
    $newChoices = compareChoiceAndThemes($choices, $themes);

    // Appel des vues
    include(__DIR__.'/../views/templates/header.php');
    include(__DIR__.'/../views/pages.php');
    include(__DIR__.'/../views/templates/footer.php');