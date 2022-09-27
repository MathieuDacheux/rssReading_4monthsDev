<?php

    // !FILTRER ET VALIDER LES CHECKBOX

    function filterAndValidateCheckbox () {
        // FILTRAGE DU TABLEAU DE CHECKBOX
        $subjects = filter_input(INPUT_GET, 'subject', FILTER_SANITIZE_NUMBER_INT, FILTER_REQUIRE_ARRAY) ?? [];

        // VÉRIFICATION SI UTILISATEUR CHECK 3 ÉLÉMENTS
        if (count($subjects) <= 4) {
            echo '<h1>Choisissez 5 sujets</h1>';
        } else if (count($subjects) > 5) {
            echo '<h1>Vous avez choici trop de sujets</h1>';
        } else {
            echo '<h1>Chargement de vos articles</h1>';
            return $subjects;
        }
    };

    // !CRÉATION D'UN COOKIE
    function setFirstCookie ($cookieValue) {
        $value = serialize($cookieValue); 
        setcookie(
            'userRssReader',
            $value,
            time() + (86400 * 30),
            "/"
        );
        return $value;
    };

    // !COMPARAISON ENTRE COOKIE VALUE ET $THEMES
    function compareChoiceAndThemes ($choices, $themes) {
        foreach ($choices as $valueChoice) {
            foreach ($themes as  $keyTheme => $valueTheme) {
                if ($valueChoice == $keyTheme) {
                    $valueChoice = $valueTheme;
                }
            }
        }
        var_dump($choices);
        return $choices;
    };