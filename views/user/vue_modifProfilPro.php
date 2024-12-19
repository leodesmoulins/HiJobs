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
        <a href="index.php?section=acc-off"
            class="bg-yellow-500 border-2 border-yellow-500 my-6 rounded py-1 px-2">Retour</a>
        <div class="w-5/6 mt-12 h-full flex justify-start items-center">
            <form action="index.php?section=modifProfilPro" method="POST">
                <div class="mx-12">
                    <?php
                    foreach ($professionelle as $pro) { ?>
                        <input type="hidden" name="idEntreprise" value="<?php echo $pro['idEntreprise']; ?>">
                        <input required placeholder="Nom de l'entreprise" type="text" value="<?php echo $pro['NomEntreprise'] ?>"
                            name="nomEntreprise" class="w-full mb-5 h-11 border-2 border-gray-400 rounded-2xl">
                        <input required placeholder="Code Postal" type="text" value="<?php echo $pro['CodePostal'] ?>"
                            name="codePostal" class="w-full mb-5 h-11 border-2 border-gray-400 rounded-2xl">
                        <input required placeholder="Ville" type="text" value="<?php echo $pro['Ville'] ?>" name="ville"
                            class="w-full mb-5 h-11 border-2 border-gray-400 rounded-2xl">
                        <input required placeholder="Adrese de l'entreprise" type="text"
                            value="<?php echo $pro['AdresseEntreprise'] ?>" name="AdresseEntreprise"
                            class="w-full mb-5 h-11 border-2 border-gray-400 rounded-2xl">
                        <input required placeholder="Pays" type="text" value="<?php echo $pro['Pays'] ?>" name="pays"
                            class="w-full mb-5 h-11 border-2 border-gray-400 rounded-2xl">
                        <input required placeholder="Telephone de l'entreprise" type="text"
                            value="<?php echo $pro['TelephoneEntreprise'] ?>" name="telephoneEntreprise"
                            class="w-full mb-5 h-11 border-2 border-gray-400 rounded-2xl">
                        <input required placeholder="Site Web" type="text" value="<?php echo $pro['SiteWeb'] ?>" name="siteWeb"
                            class="w-full mb-5 h-11 border-2 border-gray-400 rounded-2xl">
                        <input required placeholder="Email de l'entreprise" type="text" value="<?php echo $pro['EmailEntreprise'] ?>"
                            name="emailEntreprise" class="w-full mb-5 h-11 border-2 border-gray-400 rounded-2xl">
                        <input required placeholder="Numero de Siret" type="text" value="<?php echo $pro['NumeroSiret'] ?>"
                            name="NumeroSiret" class="w-full mb-5 h-11 border-2 border-gray-400 rounded-2xl">
                        <input required placeholder="Secteur d'activité" type="text" value="<?php echo $pro['SecteurActivite'] ?>"
                            name="secteurActivite" class="w-full mb-5 h-11 border-2 border-gray-400 rounded-2xl">
                        <select name="secteurActivite" id="secteurActivite"
                            class="w-full mb-5 h-11 border-2 border-gray-400 rounded-2xl">
                            <?php
                            foreach ($ActiviteEntreprise as $act) { ?>
                                <option value="<?php echo $act['intitAct']; ?>"><?php echo $act['intitAct']; ?></option>
                            <?php } ?>
                        </select>
                        <select name="Taille" id="Taille" class="w-full mb-5 h-11 border-2 border-gray-400 rounded-2xl">
                            <?php
                            foreach ($tailleEntreprise as $taille) { ?>
                                <option value="<?php echo $taille['IntituleTaille']; ?>">
                                    <?php echo $taille['IntituleTaille']; ?>
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