<?php
function get_entreprises($intitEntreprise) {
    global $connexion;

    $req = $connexion->prepare("SELECT idEntreprise FROM professionelle WHERE nomEntreprise = ?");
    $req->execute([$intitEntreprise]);
    $pro = $req->fetch(PDO::FETCH_ASSOC);

    if ($pro) {
        return $pro['idEntreprise'];
    }
    
    // Log or handle the case where no user is found
    error_log("Aucun particulier trouvé avec le nom: $intitEntreprise");
    return null; // Retourner null si aucun résultat n'est trouvé
}
