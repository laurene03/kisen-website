<?php

require_once 'model.php';

/* fonction qui recupere les donnees du tableau*/

function getStudents() {
    $db = getDatabaseConnexion();
    $stmt = $db->prepare(" SELECT * FROM students");
    $stmt->execute();
    return $stmt->fetchAll();
}


/* fonction qui recupere un etudiant correspondant à l'identifiant passé en paramètre */

function getOneStudent(int $id) {
    $db = getDatabaseConnexion();
    $stmt = $db->prepare(" SELECT * FROM students WHERE id=:id"); // parametre de requete donc faire une liaison
    $stmt->bindParam(':id', $id, PDO::PARAM_INT); 
    $stmt->execute(); 
    return $stmt->fetch();
}


/*

function getStudents() {
    $pdo= getDatabaseConnexion(); // ouvre la connection a la base de données 
    $sql =" SELECT * FROM students"; // creer la requete sql 
    $stmt = $pdo->prepare($sql); // prepare la requete 
    return $stmt->fetchAll(); // recupere les resultats 
}

*/

function findStudent(string $recherche)  {
    $db = getDatabaseConnexion();

    $search= "%".$recherche."%" ; 
    $stmt = $db->prepare("  SELECT * FROM students WHERE firstname LIKE :recherche OR lastname LIKE ':recherche"); // parametre de requete donc faire une liaison
    $stmt->bindParam(':recherche', $search, PDO::PARAM_STR); 
    $stmt->execute(); 
    return $stmt->fetch();}