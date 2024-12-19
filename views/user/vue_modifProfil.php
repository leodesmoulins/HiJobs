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
        <a href="index.php?section=acc-parti"
            class="bg-yellow-500 border-2 border-yellow-500 my-6 rounded py-1 px-2">Retour</a>
        <div class="w-5/6 mt-12 h-full flex justify-start items-center">
            <form action="index.php?section=modifProfil" method="POST">


                <div class="mx-12">
                    <?php
                    foreach ($particulier as $parti) { ?>
                        <input type="hidden" name="idParti" value="<?php echo $parti['idParti']; ?>">
                        <input required placeholder="Nom Particulier" type="text" value="<?php echo $parti['NomParti'] ?>"
                            name="nomParti" class="w-full mb-5 h-11 border-2 border-gray-400 rounded-2xl">
                        <input required placeholder="Prénom Particulier" type="text" value="<?php echo $parti['PrenomParti'] ?>"
                            name="prenomParti" class="w-full mb-5 h-11 border-2 border-gray-400 rounded-2xl">
                        <input required placeholder="Adresse Particulier" type="text" value="<?php echo $parti['AdresseParti'] ?>"
                            name="adresseParti" class="w-full mb-5 h-11 border-2 border-gray-400 rounded-2xl">
                        <input required placeholder="Code Postal" type="text" value="<?php echo $parti['CodePostalParti'] ?>"
                            name="codePostalParti" class="w-full mb-5 h-11 border-2 border-gray-400 rounded-2xl">
                        <input required placeholder="Ville" type="text" value="<?php echo $parti['Ville'] ?>" name="ville"
                            class="w-full mb-5 h-11 border-2 border-gray-400 rounded-2xl">
                        <input required placeholder="Pays" type="text" value="<?php echo $parti['Pays'] ?>" name="pays"
                            class="w-full mb-5 h-11 border-2 border-gray-400 rounded-2xl">
                        <input required placeholder="Téléphone" type="text" value="<?php echo $parti['Telephone'] ?>"
                            name="telephone" class="w-full mb-5 h-11 border-2 border-gray-400 rounded-2xl">
                        <input required placeholder="Site Web" type="text" value="<?php echo $parti['SiteWeb'] ?>" name="siteWeb"
                            class="w-full mb-5 h-11 border-2 border-gray-400 rounded-2xl">
                        <input required placeholder="Email" type="text" value="<?php echo $parti['Email'] ?>" name="email"
                            class="w-full mb-5 h-11 border-2 border-gray-400 rounded-2xl">
                        <select name="typeMission" id="typeMission"
                            class="w-full mb-5 h-11 border-2 border-gray-400 rounded-2xl">
                            <?php
                            foreach ($mission as $missions) { ?>
                                <option value="<?php echo $missions['IntituleParti']; ?>">
                                    <?php echo $missions['IntituleParti']; ?>
                                </option>
                            <?php } ?>
                        </select>
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