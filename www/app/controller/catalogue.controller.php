<?php 

/**
 * Fonction permettant de générer la page du catalogue
 *
 * @return void
 */

function generateCataloguePage() {

    $data = [
        'page_title' => "Kisen - Nos bières",
        'view' => 'app/view/catalogue.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}