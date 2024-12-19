<?php

include_once('models/modParticulier.php');


$idParticulier = $_SESSION['idParti'];



$particulier = get_particulier($idParticulier);









//$professionelle = get_profesionnelle($idProfessionelle);


// Logique pour gérer les offreurs (recruteurs, entreprises)
include_once('views/vue_particulier.php'); // Inclusion de la vue pour les offreurs
?>
