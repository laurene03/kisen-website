<?php



/**
 * controller en charge de la génération de la page d'accueil
 *
 * @return void
 */
function generateHomePage() {
    $data = [
        'page_title' => "Brasserie Kisen",
        'view' => 'app/view/home.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}