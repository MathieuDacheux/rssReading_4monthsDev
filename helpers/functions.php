<?php

    // !FILTRER ET VALIDER LES CHECKBOX
    function filterAndValidateCheckbox () {
        // FILTRAGE DU TABLEAU DE CHECKBOX
        $subjects = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_NUMBER_INT, FILTER_REQUIRE_ARRAY) ?? [];

        // VÉRIFICATION SI UTILISATEUR CHECK 3 ÉLÉMENTS
        if (empty($subjects)) {
            echo '<p>Champs obligatoire</p>';
        } else if (count($subjects) > 5) {
            echo '<h1>Vous avez choisi trop de sujets</h1>';
        } else {
        // SI PASSAGE DES TEST, HASHASGE DU TABLEAU POUR LE STOCKER DANS UN COOKIE
            $value = serialize($subjects); 
            setcookie(
                'userRssReader',
                $value,
                time() + (86400 * 30),
                "/"
            );
        return $subjects;
        }
    };

    // !COMPARER LES CHOIX DE L'UTILISATEUR ET LE TABLEAU THÈME
    function compareChoiceAndThemes ($choices, $themes) {
        $newChoices = [];
        foreach ($choices as $keyChoice => $valueChoice) {
            foreach ($themes as $keyTheme => $valueTheme) {
                if ($valueChoice == $keyTheme) {
                    array_push($newChoices, $valueTheme);
                }
            }
        }
        return $newChoices;
    }

    // !AFFICHAGE DES CHOIX DE L'UTLISATEUR
    function displayChoices ($url) {
        echo '<div cardContainer>';
            for ($i = 0; $i <= 5; $i++) {
                $item = $url->channel->item[$i];
                $image = $item->children('media', true)->content->attributes();
                $title = $item->title;
                $link = $item->guid;
                $description = $item->description;
                echo '<img src="'.$image.'">';
                echo '<h2>'.$title.'</h2>';
                echo '<p>'.$description.'</p>';
                echo '<a href="'.$link.'" target="_blank">Voir l\'article complet</a>';
            }
        echo '</div>';
    };
    