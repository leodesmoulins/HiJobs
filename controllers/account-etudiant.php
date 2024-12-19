<?php


include_once('models/modEtudiant.php');
$idEtudiant = $_SESSION['idEtudiant'];

$etudiant = get_etudiant($idEtudiant);





// Logique pour gérer les étudiants
include_once('views/vue_etudiant.php'); // Inclusion de la vue pour les étudiants
?>
