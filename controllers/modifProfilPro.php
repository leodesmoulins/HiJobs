<?php

require_once('./models/modModifProfilPro.php');


if (!empty($_SERVER['REQUEST_METHOD'] === 'POST')) {
    $idEntreprise = $_POST['idEntreprise'] ?? null;
    $NomEntreprise = $_POST['nomEntreprise'];
    $CodePostalPro = $_POST['codePostal'];
    $Ville = $_POST['ville'];
    $AdresseEntreprise = $_POST['AdresseEntreprise'];
    $Pays = $_POST['pays'];
    $TelephoneEntreprise = $_POST['telephoneEntreprise'];
    $siteweb = $_POST['siteWeb'];
    $EmailEntreprise = $_POST['emailEntreprise'];
    $NumeroSiret = $_POST['NumeroSiret'];
    $SecteurActivite = $_POST['secteurActivite'];
    $Taille = $_POST['Taille'];

    $result = modifProfilPro($idEntreprise, $NomEntreprise, $CodePostalPro, $Ville, $AdresseEntreprise, $Pays, $TelephoneEntreprise, $siteweb, $EmailEntreprise, $NumeroSiret, $SecteurActivite, $Taille);

    if ($result) {
        // Redirection ou message de succès
        header('Location: index.php?section=acc-off');
        exit;
    } else {
        // Gestion de l'erreur
        $error = "Une erreur est survenue lors de la mise à jour du profil.";
    }
}