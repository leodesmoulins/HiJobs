<?php

function get_particulier($idParticulier)
{
    global $connexion;

    // Fetch all details for the particulier
    $req = $connexion->prepare("SELECT * FROM particulier WHERE idParti = ?");
    $req->execute([$idParticulier]);
    $particulier = $req->fetchAll(PDO::FETCH_ASSOC);

    if ($particulier) {
        return $particulier; // Return full array of details
    }

    // Log or handle the case where no user is found
    error_log("Aucun particulier trouvé avec l'id : " . $idParticulier);
    return []; // Return empty array instead of null
}

function get_particulier2($nomParticulier, $prenomParticulier)
{
    global $connexion;

    $req = $connexion->prepare("SELECT idParti FROM particulier WHERE NomParti = ? AND PrenomParti = ?");  
    $req->execute([$nomParticulier, $prenomParticulier]);
    $idParti = $req->fetchColumn();

    if ($idParti) {
        return $idParti; // Retourne directement l'ID
    }

    error_log("Aucun particulier trouvé avec le Nom et Prénom : " . $nomParticulier . " " . $prenomParticulier);
    return null; // Retourne null si aucun particulier n'est trouvé
}