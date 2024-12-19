<?php


include_once('models/modAnnonces.php');
// Logique pour afficher les annonces

$annonces = getAnnonces(); 
// Logique pour afficher les annonces
include_once('views/annonces/vue_index.php'); // Inclusion de la vue pour afficher les annonces
?>