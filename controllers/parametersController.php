<?php

// Appel des configurations
require_once(__DIR__.'/../config/config.php');
require_once(__DIR__.'/../config/data.php');

// Variables


// Appel des fonctions
require_once(__DIR__.'/../helpers/functions.php');

// Appel des vues

include(__DIR__.'/../views/templates/header.php');

include(__DIR__.'/../views/parameters.php');
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $subjects = filterAndValidateCheckbox();
        setFirstCookie($subjects);
    }
    
include(__DIR__.'/../views/templates/footer.php');