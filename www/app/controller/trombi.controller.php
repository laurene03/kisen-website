<?php

require_once 'app/controller/controller.php';
require_once 'app/model/trombi.model.php';

/**
 * controller en charge de la génération de la page Trombinoscope
 *
 * @return void
 */
function generateTrombiPage() {
    $data = [
        'students' => getStudents(),
        'page_title' => "Tech'Etud - Trombinoscope",
        'view' => 'app/view/trombi.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}


/**
 * controller en charge de la génération de la page Fiche
 *
 * @return void
 */

function generateFichePage() {

    $id = $_GET['id'];  //TODO: Sécuriser cette variable !

    $data = [
        'student'=> getStudent($id),
        'page_title' => "Tech'Etud - Fiche",
        'view' => 'app/view/fiche.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}