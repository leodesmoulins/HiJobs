<?php

function getAnnonces() {
    global $connexion;
    
    try {
        // Requête pour les annonces particulier avec le type explicitement défini
        $requeteSql = "SELECT *, 'particulier' as type_annonce,
                      CONCAT(NomParti, ' ', PrenomParti) AS nom_complet
                      FROM annonceparticulier
                      JOIN particulier ON annonceparticulier.idParti = particulier.idParti";
        $etat = $connexion->prepare($requeteSql);
        $etat->execute();
        $annoncesParticulier = $etat->fetchAll(PDO::FETCH_ASSOC);
        
        // Requête pour les annonces pro avec le type explicitement défini
        $requetesSql = "SELECT *, professionelle.nomEntreprise, 'professionnel' as type_annonce 
                       FROM annoncepro
                       JOIN professionelle ON annoncepro.idEntreprise = professionelle.idEntreprise";
        $etats = $connexion->prepare($requetesSql);
        $etats->execute();
        $annoncesPro = $etats->fetchAll(PDO::FETCH_ASSOC);
        
        // Combiner les deux types d'annonces
        return array_merge($annoncesParticulier, $annoncesPro);
        
    } catch(PDOException $e) {
        // Gestion des erreurs
        error_log("Erreur dans getAnnonces: " . $e->getMessage());
        return [];
    }
}