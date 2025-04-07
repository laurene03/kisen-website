<?php

require_once 'config.php';
require_once 'app/model/model.php';

// 1 - Récupérer la demande de l'utilisateur

$route='home'; //Paramètre par défaut

if (!empty($_GET['route'])) {
    $route=$_GET['route'];
}

// 2 - Déterminer les différents cas

switch ($route) {
    case 'home':
        require_once 'app/controller/home.controller.php';
        generateHomePage();
        break;

    case 'trombi':
        require_once 'app/controller/trombi.controller.php';
        generateTrombiPage();
        break;

    case 'fiche':
        require_once 'app/controller/trombi.controller.php';
        generateFichePage();
        break;

    default:
        exit;
}


