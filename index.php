<?php

    if (!isset($_COOKIE['userRssReader']) && !isset($_COOKIE['numberArticles']) && !isset($_COOKIE['theme'])) {
        header('Location: /controllers/parametersController.php');
        exit();
    } else {
        header('Location: /controllers/homeController.php');
        exit();
    }
