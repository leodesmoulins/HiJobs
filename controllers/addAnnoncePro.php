<?php

// Récupérer les données du formulaire
$titreAnnonce = $_POST['titreAnnonce'];
$intitEntreprise = $_POST['intitEntreprise'];
$localisation = $_POST['localisation'];
$typeContrat = $_POST['typeContrat'];
$descriptionAnnonce = $_POST['descriptionAnnonce'];

// Inclure les modèles
include './models/modAddAnnoncePro.php';
include './models/modentreprise.php';


$idEntreprise = get_entreprises($intitEntreprise);

$connexion->beginTransaction();

if ($idEntreprise) {
    if (add_annonce_pro($titreAnnonce, $descriptionAnnonce, $localisation, $typeContrat, $idEntreprise)) {
        $connexion->commit();
        header('Location: index.php');
        exit(); // Ajoutez exit pour éviter d'exécuter le reste du script
    } else {
        echo "Erreur lors de l'ajout de l'annonce.";
        $connexion->rollBack();
    }
} else {
    echo "Erreur : Aucune entreprise trouvé avec ce nom et prénom.";
    $connexion->rollBack();
}
?>