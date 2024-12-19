<?php

// Récupérer les données du formulaire
$titreAnnonce = $_POST['titreAnnonce'];
$localisation = $_POST['localisation'];
$nomParticulier = $_POST['NomParti'];
$prenomParticulier = $_POST['PrenomParti'];
$descriptionAnnonce = $_POST['descriptionAnnonce'];

// Inclure les modèles
include './models/modAddAnnonceParti.php';
include './models/modParticulier.php';

// Récupérer l'ID du particulier en utilisant le nom et le prénom
$idParti = get_particulier2($nomParticulier, $prenomParticulier);

$connexion->beginTransaction();

if ($idParti) {
    if (add_annonce_parti($titreAnnonce, $localisation, $idParti, $descriptionAnnonce)) {
        $connexion->commit();
        header('Location: index.php');
        exit(); // Ajoutez exit pour éviter d'exécuter le reste du script
    } else {
        echo "Erreur lors de l'ajout de l'annonce.";
        $connexion->rollBack();
    }
} else {
    echo "Erreur : Aucun particulier trouvé avec ce nom et prénom.";
    $connexion->rollBack();
}
?>