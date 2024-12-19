<?php

function get_etudiant($idEtudiant)
{
    global $connexion;

    // Fetch all details for the particulier
    $req = $connexion->prepare("SELECT * FROM etudiant WHERE idEtudiant = ?");
    $req->execute([$idEtudiant]);
    $etudiant = $req->fetchAll(PDO::FETCH_ASSOC);

    if ($etudiant) {
        return $etudiant; // Return full array of details
    }

    // Log or handle the case where no user is found
    error_log("Aucun particulier trouvé avec l'id : " . $idEtudiant);
    return []; // Return empty array instead of null
}

?>