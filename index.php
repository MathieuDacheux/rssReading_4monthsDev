<?php

    if (!isset($_COOKIE['userRssReader']) && !isset($_COOKIE['numberArticles']) && !isset($_COOKIE['theme'])) {
        include(__DIR__.'/../rssReading_4monthsDev/controllers/parametersController.php');
    } else {
        include(__DIR__.'/../rssReading_4monthsDev/controllers/homeController.php');
    }