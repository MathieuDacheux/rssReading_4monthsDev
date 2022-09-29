<?php

    if (!isset($_COOKIE['userRssReader']) && !isset($_COOKIE['numberArticles']) && !isset($_COOKIE['theme'])) {
        header('Location: /parameters');
        exit();
    } else {
        header('Location: /home');
        exit();
    }
