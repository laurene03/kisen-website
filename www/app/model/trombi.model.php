<?php 

require_once 'model.php' ;

/**
 * Fonction permettant de récupérer tous les étudiants stockés dnas la base de données sous forme de tableau
 * 
 * @return array
 */

function getStudents() {

    $db = getDatabaseConnexion(); // connexion à la base de données
    $stmt = $db->prepare("SELECT * FROM students"); // préparation de la requête
    $stmt->execute();
    return $stmt->fetchAll(); // récupération de tous les résultats

} 


/**
 * Fonction permettant de récupérer un étudiant correspondant à l'identifiant passé en paramètre
 * 
 * @return array
 */


function getStudent(int $id) {

    $db = getDatabaseConnexion(); // connexion à la base de données 
    $stmt = $db->prepare("SELECT * FROM students WHERE id =:id"); // préparation de la requête
    $stmt->bindParam(':id', $id, PDO::PARAM_INT); // liaison des paramètres
    $stmt->execute();
    return $stmt->fetch(); // récupération de tous les résultats

} 