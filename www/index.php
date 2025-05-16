<?php

session_start();

require_once 'config.php';
require_once 'app/model/model.php';
require_once 'app/controller/controller.php';

//1 - Récupérer la demande de l'utilisateur

$route='accueil'; //Paramètre par défaut

if (!empty($_GET['route'])) {
    $route=$_GET['route'];
 }

//2 - Déterminer les différents cas

switch ($route) {
    case 'accueil':
        require_once 'app/controller/accueil.controller.php';
        generateHomePage();

        break;

    case 'catalogue':
        require_once 'app/controller/catalogue.controller.php';
        generateCataloguePage();

        break;

    default:
       exit;
}


