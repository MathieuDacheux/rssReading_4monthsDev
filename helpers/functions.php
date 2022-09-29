<?php

    // !FILTRER ET VALIDER LES CHECKBOX
    function filterAndValidateCheckbox () {
        // FILTRAGE DU TABLEAU DE CHECKBOX
        $subjects = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_NUMBER_INT, FILTER_REQUIRE_ARRAY) ?? [];

        // VÉRIFICATION SI UTILISATEUR CHECK 3 ÉLÉMENTS
        if (empty($subjects)) {
            $error[2] = 'Ce champs est vide';
        } else if (count($subjects) > 3 && count($subjects) < 4) {
            $error[2] = 'Ce champs n\'est pas conforme';
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

    // !FILTRER ET VALIDER LES RADIOS
    function filterAndValidateRadio () {
        // FILTRAGE DU BOUTON RADIO CHOISI
        $number = filter_input(INPUT_POST, 'number', FILTER_SANITIZE_NUMBER_INT);
        
        // VÉRIFICATION SI LE RADIO EST LE BON
        if (empty($number)) {
            $error[1] = 'Ce champs est vide';
            return $error;
        } else if ($number != 6 && $number != 9 && $number != 12) {
            $error[1] = 'Ce champs n\'est pas conforme';
            return $error;
        } else {
            setcookie (
                'numberArticles',
                $number,
                time() + (86400 * 30),
                "/"
            );
            return $number;
        }
    }

    // !FILTRER ET VALIDER LES RADIOS
    function filterAndValidateThemeMode () {
        // FILTRAGE DU BOUTON RADIO CHOISI
        $theme = filter_input(INPUT_POST, 'theme', FILTER_SANITIZE_NUMBER_INT);
        
        // VÉRIFICATION SI LE RADIO EST LE BON
        if (empty($theme)) {
            $error[0] = 'Ce champs est vide';
            return $error;
        } else if ($theme != 1 && $theme != 2) {
            $error[0] = 'Ce champs n\'est pas conforme';
            return $error;
        } else {
            setcookie (
                'theme',
                $theme,
                time() + (86400 * 30),
                "/"
            );
            return $theme;
        }
    }

    // !FILTRER ET VALIDER LES RADIOS DEPUIS HOME.PHP
    function filterAndValidateHomeSelect () {
        // FILTRAGE DU BOUTON RADIO CHOISI
        $userChoice = filter_input(INPUT_POST, 'userChoice', FILTER_SANITIZE_NUMBER_INT);
        
        // VÉRIFICATION SI LE RADIO EST LE BON
        if (empty($userChoice)) {
            echo '<p>Il n\'y a pas de choix</p>';
        } else if ($userChoice != 1 && $userChoice != 2 && $userChoice != 3) {
            echo '<p>Le choix n\'est pas conforme</p>';
        } else {
            return $userChoice;
        }
    }

    // !COMPARER LES CHOIX DE L'UTILISATEUR ET LE TABLEAU THÈME
    function compareChoiceAndThemes ($choices, $themes) {
        $newChoices = [];
        foreach ($choices as $valueChoice) {
            foreach ($themes as $keyTheme => $valueTheme) {
                if ($valueChoice == $keyTheme) {
                    array_push($newChoices, $valueTheme);
                }
            }
        }
        return $newChoices;
    }

    // !AFFICHAGE DES CHOIX DE L'UTLISATEUR
    function displayChoices ($url, $maxLenght, $themeStyle) {
            for ($i = 1; $i <= $maxLenght; $i++) {
                $item = $url->channel->item[$i];
                $image = $item->children('media', true)->content->attributes();
                $title = $item->title;
                $link = $item->guid;
                $description = $item->description;
                $date = date('d/m/Y', strtotime(substr($item->pubDate, 5, 11)));

                echo '<div class="card m-auto mb-5 '.$themeStyle.'">
                        <img src="'.$image.'" alt="Image de l\'article \'Le Monde\'">
                        <div class="card-body d-flex flex-column m-auto p-auto">
                            <div class="titleContainer">
                                <h3 class="card-title'.$themeStyle.'">'.$title.'</h3>
                            </div>
                            <div class="descriptionContainer">
                                <p class="card-text'.$themeStyle.'">'.$description.'</p>
                            </div>
                            <div class="containerDate">
                                <p class="card-date">'.$date.'</p>
                            </div>
                            <div class="buttonContainer">
                                <a class="btn btn-primary '.$themeStyle.'" href="'.$link.'" role="button">Voir l\'article complet</a>
                            </div>
                        </div>
                </div>';
            }
    };

    // !AFFICHAGE DES ÉLÉMENTS DE LA NAVBAR
    function displayNavbar ($choices, $subjectsValue){
        if (!isset($_COOKIE['userRssReader'])) {
            return false;
        } else {
            $navbar = compareChoiceAndThemes($choices, $subjectsValue);
            return $navbar;
        }
    } 
    
    // !AFFICHAGE DE L'ÉLÉMENT CHOISI DEPUIS LA NAVBAR HOME.PHP
    function displayUniqueSubject ($newChoices ,$userChoice, $maxLenght, $themeStyle) {
        if ($userChoice != 1 && $userChoice != 2 && $userChoice != 3) {
            echo '<p>La valeur n\'existe pas</p>';
        } else if ($userChoice == null) {
            displayChoices($newChoices[2], $maxLenght, $themeStyle);
        } else {
            displayChoices($newChoices[$userChoice- 1], $maxLenght, $themeStyle);
        }
    }