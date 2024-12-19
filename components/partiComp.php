<div class="z-0 mr-12 w-3/6 pb-12 h-full rounded-2xl flex bg-gray-100 justify-start">

    <div class="w-full h-full flex flex-col justify-center items-center">

        <h1 class="text-4xl text-bold police-1 mb-6 mt-6">Postez une annonces</h1>

        <form action="index.php?section=addAnnonceParti" method="post">
            <div class="w-full flex flex-col text-center">
                <input type="text" name="titreAnnonce" class="w-full mb-5 h-11 border-2 border-gray-400 rounded-2xl"
                    placeholder="Titre" required>
                <input type="text" name="localisation" class="w-full mb-5 h-11 border-2 border-gray-400 rounded-2xl"
                    placeholder="Localisation" required>
                <input type="text" name="NomParti" class="w-full mb-5 h-11 border-2 border-gray-400 rounded-2xl"
                    placeholder="nom du particulier" value="<?php echo $_SESSION['nomUser']; ?>" required>
                <input type="text" name="PrenomParti" class="w-full mb-5 h-11 border-2 border-gray-400 rounded-2xl"
                    placeholder="prenom du particulier" value="<?php echo $_SESSION['prenomUser']; ?>" required>
                <input type="text" name="descriptionAnnonce"
                    class="w-full mb-5 h-11 border-2 border-gray-400 rounded-2xl" placeholder="Description" required>
            </div>

            <input type="submit" value="Publier"
                class="w-full py-2 bg-yellow-500 border-2 border-yellow-500 my-6 rounded text-center">
        </form>


    </div>



</div>
<div class="flex w-3/6 bg-gray-100 h-full flex-col rounded-2xl p-6 ">
    <div class="flex flex-col text-gray-950 bg-gray-200 rounded-2xl py-6 h-full items-center justify-center">
        <?php
        foreach ($particulier as $parti) { ?>
            <h1 class="text-4xl text-bold police-1 mb-6">Information du profil</h1>
            <p placeholder="Nom" class="police-2">Nom : <?php echo $parti['NomParti']; ?></p>
            <p placeholder="Prénom" class="police-2">Prénom : <?php echo $parti['PrenomParti']; ?></p>
            <p placeholder="Adresse" class="police-2">Adresse : <?php echo $parti['AdresseParti']; ?></p>
            <p placeholder="Code Postal" class="police-2">Code postal : <?php echo $parti['CodePostalParti']; ?></p>
            <p placeholder="Ville" class="police-2">Ville : <?php echo $parti['Ville']; ?></p>
            <p placeholder="Pays" class="police-2">Pays : <?php echo $parti['Pays']; ?></p>
            <p placeholder="Telephone" class="police-2">Telephone : <?php echo $parti['Telephone']; ?></p>
            <p placeholder="Site web" class="police-2">Site web : <?php echo $parti['SiteWeb']; ?></p>
            <p placeholder="Email" class="police-2">E-mail : <?php echo $parti['Email']; ?></p>
            <p placeholder="Type de mission" class="police-2">Type de mission : <?php echo $parti['TypeMission']; ?></p>
            <div class="mt-6">
                <button><a href="index.php?section=formModifProfil"
                        class="bg-yellow-500 border-2 border-yellow-500 my-6 rounded py-1 px-2">Modifier votre
                        profil</a></button>
                <button><a href="index.php?section=formSupprProfil"
                        class="bg-yellow-500 border-2 border-yellow-500 my-6 rounded py-1 px-2"
                        onclick="return confirm('Êtes-vous sûr de vouloir supprimer votre compte ?')">Supprimer votre
                        profil</a></button>
            </div>
        <?php } ?>





    </div>
</div>


<div class="flex flex-col text-gray-950 rounded-2xl h-full items-center justify-center">
    <h1 class="text-4xl text-bold police-1 mb-6 mt-6">Annonces publiées</h1>
    <a href="index.php?section=annoncePoste">Voir toute les annonces posté</a>
</div>

</div>