<?php

function deleteAnnonce($connexion, $numAnnonce)
{
    $proId = $_SESSION['idEntreprise'] ?? null;
    $partiId = $_SESSION['idParti'] ?? null;

    if (!$proId && !$partiId) {
        return false; // Aucun utilisateur connecté
    }

    try {
        if ($proId) {
            $sql = "DELETE FROM annoncepro WHERE numAnnoncePro = :numAnnonce AND idEntreprise = :proId";
            $stmt = $connexion->prepare($sql);
            $stmt->bindParam(':numAnnonce', $numAnnonce, PDO::PARAM_INT);
            $stmt->bindParam(':proId', $proId, PDO::PARAM_INT);
        } else {
            $sql = "DELETE FROM annonceparticulier WHERE numAnnonceParti = :numAnnonce AND idParti = :partiId";
            $stmt = $connexion->prepare($sql);
            $stmt->bindParam(':numAnnonce', $numAnnonce, PDO::PARAM_INT);
            $stmt->bindParam(':partiId', $partiId, PDO::PARAM_INT);
        }

        return $stmt->execute();
    } catch (Exception $e) {
        // Log l'erreur ou gérez-la selon vos besoins
        error_log("Erreur lors de la suppression de l'annonce : " . $e->getMessage());
        return false;
    }
}
