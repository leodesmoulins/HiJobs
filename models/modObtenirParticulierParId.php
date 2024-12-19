<?php

function get_adherentSurId($id)
//renvoie le compte de l'adhérent correpondant à son identifiant passé en paramètre
{
    global $connexion;

    $req = $connexion->prepare("SELECT * from particulier        
                             	  where idParti = ?");
    $req->execute([$id]);
    $PARTI = $req->fetch();

    return $PARTI;
}