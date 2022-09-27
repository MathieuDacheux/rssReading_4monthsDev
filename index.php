<?php

    if (!isset($_COOKIE['userRssReader'])) {
        include(__DIR__.'/../rssReading_4monthsDev/controllers/parametersController.php');
    } else {
        include(__DIR__.'/../rssReading_4monthsDev/controllers/homeController.php');
    }