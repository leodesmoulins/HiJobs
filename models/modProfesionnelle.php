<?php


function get_profesionnelle($idProfessionelle)
{
    global $connexion;

    // Fetch all details for the particulier
    $req = $connexion->prepare(query: "SELECT * FROM professionelle WHERE idEntreprise = ?");
    $req->execute([$idProfessionelle]);
    $profesionelle = $req->fetchAll(PDO::FETCH_ASSOC);

    if ($profesionelle) {
        return $profesionelle; // Return full array of details
    }

    // Log or handle the case where no user is found
    error_log("Aucun particulier trouvé avec l'id : " . $idProfessionelle);
    return []; // Return empty array instead of null
}