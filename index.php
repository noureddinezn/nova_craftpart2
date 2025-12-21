<?php

session_start();
require __DIR__ . "/config/database.php";

$routes = [
    '/'           => 'homecontroller',
    '/services'   => 'servicescontroller',
    '/about'      => 'aboutcontroller',
    '/contact'    => 'contactcontroller',
    '/registrer'  => 'registrercontroller',
    '/login'      => 'logincontroller',
    '/logout'      => 'logoutcontroller',
    '/profile'    => 'profilcontroller',
];

$uri = rtrim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/') ?: '/';

$page = $routes[$uri] ?? '404';

$titles = [
    'home'      => 'Accueil - DigitalWave',
    'services'  => 'Nos Services - DigitalWave',
    'about'     => 'À propos - DigitalWave',
    'contact'   => 'Contact - DigitalWave',
    'registrer' => 'Page - registrer',
    'login'     => 'Page - login',
    'profile'   => 'Page - profile',
    '404'       => 'Page introuvable - DigitalWave'
];

$title = $titles[$page] ?? 'DigitalWave';

$controller = __DIR__ . "/controllers/$page.php";

if (!file_exists($controller)) {
    $controller = __DIR__ . "/controllers/404.php";
}

require $controller;
