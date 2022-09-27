<?php

// Liens des flux RSS
$urlCompany = 'https://www.lemonde.fr/entreprises/rss_full.xml';
$urlMoney = 'https://www.lemonde.fr/argent/rss_full.xml';
$urlFrenchEconomy = 'https://www.lemonde.fr/economie-francaise/rss_full.xml';
$urlEstate = 'https://www.lemonde.fr/immobilier/rss_full.xml';
$urlWork = 'https://www.lemonde.fr/emploi/rss_full.xml';

// Chargement des flux RSS
$rssCompany = simplexml_load_file($urlCompany);
$rssMoney = simplexml_load_file($urlMoney);
$rssFrenchEconomy = simplexml_load_file($urlFrenchEconomy);
$rssEstate = simplexml_load_file($urlEstate);
$rssWork = simplexml_load_file($urlWork);

// Tableau liant les thèmes au Chargement des flux RSS
$themes = [
    '0' => $rssCompany,
    '1' => $rssMoney,
    '2' => $rssFrenchEconomy,
    '3' => $rssEstate,
    '4' => $rssWork
];
