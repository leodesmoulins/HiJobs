<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - HIJOBS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <div class="w-full h-full flex justify-center items-center flex-col">
        <?php include "./components/navbar.php" ?>
        <a href="index.php?section=acc-etu"
            class="bg-yellow-500 border-2 border-yellow-500 my-6 rounded py-1 px-2">Retour</a>
        <div class="w-5/6 mt-12 h-full flex justify-start items-center">
            <form action="index.php?section=modifProfilEtu" method="POST">
                <div class="mx-12">
                    <?php
                    foreach ($etudiant as $etu) { ?>
                        <input type="hidden" name="idEtudiant" value="<?php echo $etu['idEtudiant']; ?>">
                        <input placeholder="Nom étudiant" required type="text" value="<?php echo $etu['nom'] ?>" name="nom"
                            class="w-full mb-5 h-11 border-2 border-gray-400 rounded-2xl">
                        <input placeholder="Prénom étudiant" required type="text" value="<?php echo $etu['prenom'] ?>"
                            name="prenom" class="w-full mb-5 h-11 border-2 border-gray-400 rounded-2xl">
                        <input placeholder="Code Postal" required type="text" value="<?php echo $etu['codePostal'] ?>"
                            name="codePostal" class="w-full mb-5 h-11 border-2 border-gray-400 rounded-2xl">
                        <input placeholder="Ville" required type="text" value="<?php echo $etu['Ville'] ?>" name="ville"
                            class="w-full mb-5 h-11 border-2 border-gray-400 rounded-2xl">
                        <input placeholder="Adresse" required type="text" value="<?php echo $etu['Adresse'] ?>"
                            name="adresse" class="w-full mb-5 h-11 border-2 border-gray-400 rounded-2xl">
                        <input placeholder="Pays" required type="text" value="<?php echo $etu['Pays'] ?>" name="pays"
                            class="w-full mb-5 h-11 border-2 border-gray-400 rounded-2xl">
                        <input placeholder="Téléphone" required type="text" value="<?php echo $etu['Telephone'] ?>"
                            name="telephone" class="w-full mb-5 h-11 border-2 border-gray-400 rounded-2xl">
                        <input placeholder="Email" required type="text" value="<?php echo $etu['EmailEtudiant'] ?>"
                            name="emailEtudiant" class="w-full mb-5 h-11 border-2 border-gray-400 rounded-2xl">
                        <input placeholder="Niveau d'étude" required type="text" value="<?php echo $etu['NiveauEtude'] ?>"
                            name="niveauEtude" class="w-full mb-5 h-11 border-2 border-gray-400 rounded-2xl">
                        <input placeholder="Nom de la Formation" required type="text"
                            value="<?php echo $etu['NomFormation'] ?>" name="nomFormation"
                            class="w-full mb-5 h-11 border-2 border-gray-400 rounded-2xl">
                    <?php } ?>
                    <input type="submit" value="Modifier"
                        class="px-6 mb-12 py-1 h-11 w-full bg-yellow-400 rounded-lg police-2">

                </div>
            </form>



        </div>
    </div>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap');

        .police-1 {
            font-family: "Bebas Neue", system-ui;
            font-weight: 400;
            font-style: normal;
        }

        .police-2 {
            font-family: "Nunito", sans-serif;
            font-optical-sizing: auto;
            font-weight: weight;
            font-style: normal;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
    </style>
</body>

</html>