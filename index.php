<?php
session_start();

include_once('./config/config.php');

$okConnexion = false;

if (isset($_SESSION['validiteConnexion']) && $_SESSION['validiteConnexion'] === true) {
    $okConnexion = true;

    $_SESSION['idEntreprise'] = $_SESSION['idEntreprise'] ?? null;
    $_SESSION['idParti'] = $_SESSION['idParti'] ?? null;
    $_SESSION['idEtudiant'] = $_SESSION['idEtudiant'] ?? null;
} else {
    unset($_SESSION['idEntreprise']);
    unset($_SESSION['idParti']);
    unset($_SESSION['idEtudiant']);
}








$section = isset($_GET['section']) ? htmlspecialchars($_GET['section']) : 'index';

if ($section == 'index') {
    require_once('controllers/accueil.php');
} else {
    switch ($section) {
        case 'annonce':
            include_once('controllers/annonce.php');
            break;
        case 'entreprise':
            include_once('controllers/entreprise.php');
            break;
        case 'connecter':
            include_once('controllers/login.php');
            break;
        case 'enregistrer':
            include_once('controllers/register.php');
            break;
        case 'acc-off':
            include_once('controllers/account-offreur.php');
            break;
        case 'acc-etu':
            include_once('controllers/account-etudiant.php');
            break;
        case 'acc-parti':
            include_once('controllers/account-particulier.php');
            break;
        case 'logout':
            include_once('controllers/logout.php');
            break;
        case 'acceuilconnecter':
            include_once('controllers/accueilConnecter.php');
            break;
        case 'addAnnoncePro':
            include_once('controllers/addAnnoncePro.php');
            break;
        case 'addAnnonceParti':
            include_once('controllers/addAnnonceParti.php');
            break;
        case 'addEntreprise':
            include_once('controllers/addEntreprise.php');
            break;
        case 'annoncePoste':
            include_once('controllers/detailAnnoncePoste.php');
            break;
            //modification d'une annonce
        case 'formModifAnnonce':
            include_once('controllers/formModifAnnonce.php');
            break;
            //suppression d'une annonce
        case 'supprimerAnnonce':
            include_once('controllers/SupprAnnonce.php');
            break;
        case 'DetailAnnonce':
            include_once('controllers/DetailAnnonce.php');
            break;
        case 'ModifAnnonce':
            include_once('controllers/modifAnnonce.php');
            break;
        case 'FormPostuler':
            include_once('controllers/formPostuler.php');
            break;
        case 'choixForm':
            include_once('controllers/choixForm.php');
            break;
        case 'proForm':
            include_once('controllers/proForm.php');
            break;
        case 'etuFrom':
            include_once('controllers/etuForm.php');
            break;
        case 'partiFrom':
            include_once('controllers/partiForm.php');
            break;
        case 'registerProForm':
            include_once('controllers/RegisterProForm.php');
            break;
        case 'registerEtuForm':
            include_once('controllers/RegisterEtuForm.php');
            break;
        case 'registerPartiForm':
            include_once('controllers/RegisterPartiForm.php');
            break;
        case 'formModifProfil':
            include_once('controllers/formModifProfil.php');
            break;
        case 'formModifProfilPro':
            include_once('controllers/formModifProfilPro.php');
            break;
        case 'formModifProfilEtu':
            include_once('controllers/formModifProfilEtu.php');
            break;
        case 'formSupprProfil':
            include_once('controllers/formSupprProfil.php');
            break;
        case 'formSupprProfilPro':
            include_once('controllers/formSupprProfil.php');
            break;
        case 'formSupprProfilEtu':
            include_once('controllers/formSupprProfil.php');
            break;
        case 'modifProfil':
            include_once('controllers/modifProfil.php');
            break;
        case 'modifProfilPro':
            include_once('controllers/modifProfilPro.php');
            break;
        case 'modifProfilEtu':
            include_once('controllers/modifProfilEtu.php');
            break;
        case 'SupprProfil':
            include_once('controllers/SupprProfil.php');
            break;
        default:
            echo "Erreur : le contrôleur demandé est introuvable.";
            include_once('controllers/404.php');
            break;
    }
}

