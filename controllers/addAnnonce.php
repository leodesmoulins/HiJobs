<?php

// Récupérer les données du formulaire
$titreAnnonce = $_POST['titreAnnonce'];
$intitEntreprise = $_POST['intitEntreprise'];
$localisation = $_POST['localisation'];
$typeContrat = $_POST['typeContrat'];
$descriptionAnnonce = $_POST['descriptionAnnonce'];

// Inclure les modèles
include './models/modAddAnnonces.php';
include './models/modentreprise.php';

// Démarrer la transaction
$connexion->beginTransaction();

// Ajouter l'entreprise ou récupérer son ID si elle existe
$idEntreprise = get_entreprises($intitEntreprise); // Cela retourne l'ID de l'entreprise

if ($idEntreprise) {
    // Ajouter l'annonce avec l'ID de l'entreprise
    if (add_Annonce($titreAnnonce, $idEntreprise, $localisation, $typeContrat, $descriptionAnnonce, $numUser)) {
        // Si tout a réussi, valider la transaction
        $connexion->commit();
        header('Location: index.php'); // Redirection après succès
    } else {
        // Gérer l'erreur d'ajout d'annonce
        echo "Erreur lors de l'ajout de l'annonce.";
        $connexion->rollBack(); // Annuler la transaction
    }
} else {
    // Gérer l'erreur d'ajout d'entreprise
    echo "Erreur lors de l'ajout de l'entreprise.";
    $connexion->rollBack(); // Annuler la transaction
}
?>
