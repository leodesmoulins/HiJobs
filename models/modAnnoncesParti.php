<?php

function getAnnoncesParti() {
    global $connexion;
    $requeteSql = "SELECT * FROM annonces";
    $etat = $connexion->prepare($requeteSql);
    $etat->execute();
    $annonces = $etat->fetchAll(PDO::FETCH_ASSOC);
    return $annonces;
};
?>