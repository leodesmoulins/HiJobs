<?php
include('./config/config.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = "adminJobs";
    $servername = "localhost";
    $passwordServ = "admin";
    error_reporting(E_ALL); ini_set("display_errors", 1);
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordConf = $_POST['passconf'];
    $prenomUser = $_POST['name'];
    $nomUser = $_POST['lastname'];
    $pro = $_POST['pro'];
    $requeteSql = "INSERT INTO utilisateurs (emailUser, passwordUser, prenomUser, nomUser, professionnel) VALUES (?,?, ?, ?, ?)";
    $etat = $connexion->prepare($requeteSql);

    if($password !== $passwordConf){
        echo "Les mots de passes ne sont pas identiques veuillez recommencer";
    } else {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        if($etat->execute([$email, $hash, $prenomUser, $nomUser, $pro])){
            echo "Vous êtes bien enregistré";
            header('Location: index.php');
        } else {
            echo "Une erreur est survenue";
        }
    }
}
include_once('views/user/vue_inscription.php');
?>