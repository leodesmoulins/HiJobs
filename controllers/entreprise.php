<?php


include_once('models/modAfficherEntreprise.php');
// Logique pour afficher les annonces

$entreprises = afficher_entreprise(); 
// Logique pour afficher les annonces
include_once('views/entreprises/vue_index.php'); // Inclusion de la vue pour afficher les annonces
?>