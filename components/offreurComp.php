<div class="z-0 mr-12 w-4/6 pb-12 h-full rounded-2xl flex bg-gray-100 justify-start">

    <div class="w-full h-full flex flex-col justify-center items-center">

        <h1 class="text-4xl text-bold police-1 mb-6 mt-6">Postez une annonces</h1>

        <form action="index.php?section=addAnnoncePro" method="post">
            <div class="w-full flex flex-col text-center">
                <input type="text" name="titreAnnonce" class="w-full mb-5 h-11 border-2 border-gray-400 rounded-2xl"
                    placeholder="Titre">
                <input type="text" name="intitEntreprise" value="<?php echo $_SESSION['nomEntreprise']; ?>"
                    class="w-full mb-5 h-11 border-2 border-gray-400 rounded-2xl" placeholder="Nom de l'entreprise">
                <input type="text" name="localisation" class="w-full mb-5 h-11 border-2 border-gray-400 rounded-2xl"
                    placeholder="Localisation">
                
                       

                <select name="typeContrat" class="w-full mb-5 h-11 border-2 border-gray-400 rounded-2xl">
                    <?php foreach ($typedecontrat as $typeContrat) { ?>
                        <option value="<?php echo $typeContrat['IntituleContrat']; ?>">
                            <?php echo $typeContrat['IntituleContrat']; ?>
                        </option>
                    <?php } ?>
                </select>
                <input type="text" name="descriptionAnnonce"
                    class="w-full mb-5 h-11 border-2 border-gray-400 rounded-2xl" placeholder="Description">
            </div>

            <input type="submit" value="Publier"
                class="w-full py-2 bg-yellow-500 border-2 border-yellow-500 my-6 rounded text-center">
        </form>


    </div>



</div>

<div class="flex w-3/6 bg-gray-100 h-full flex-col rounded-2xl p-6 ">
    <div class="flex flex-col text-gray-950 bg-gray-200 rounded-2xl py-6 h-full items-center justify-center">
        <?php
        foreach ($professionelle as $pro) { ?>
            <h1 class="text-4xl text-bold police-1 mb-6">Information du profil</h1>
            <p placeholder="Nom de l'entreprise" class="police-2">Nom Entreprise : <?php echo $pro['NomEntreprise']; ?></p>
            <p placeholder="Code Postal" class="police-2">Code Postal : <?php echo $pro['CodePostal']; ?></p>
            <p placeholder="Ville" class="police-2">Ville : <?php echo $pro['Ville']; ?></p>
            <p placeholder="Adresse de l'entreprise" class="police-2">Adresse entreprise :
                <?php echo $pro['AdresseEntreprise']; ?>
            </p>
            <p placeholder="Pays" class="police-2">Pays : <?php echo $pro['Pays']; ?></p>
            <p placeholder="Téléphone Pro" class="police-2">Téléphone profesionelle :
                <?php echo $pro['TelephoneEntreprise']; ?>
            </p>
            <p placeholder="Site web" class="police-2">Site Web : <?php echo $pro['SiteWeb']; ?></p>
            <p placeholder="Email Pro" class="police-2">Email profesionelle : <?php echo $pro['EmailEntreprise']; ?></p>
            <p placeholder="Numéro de Siret" class="police-2">Numéro Siret : <?php echo $pro['NumeroSiret']; ?></p>
            <p placeholder="Secteur d'activité" class="police-2">Secteur d'activité : <?php echo $pro['SecteurActivite']; ?>
            </p>
            <p placeholder="Taille de l'entreprise" s class="police-2">Taille de l'entreprise :
                <?php echo $pro['Taille']; ?></>
            <div class="mt-6">
                <button><a href="index.php?section=formModifProfilPro"
                        class="bg-yellow-500 border-2 border-yellow-500 my-6 rounded py-1 px-2">Modifier votre
                        profil</a></button>
                <button><a href="index.php?section=formSupprProfilPro"
                        class="bg-yellow-500 border-2 border-yellow-500 my-6 rounded py-1 px-2"
                        onclick="return confirm('Êtes-vous sûr de vouloir supprimer votre compte ?')">Supprimer votre
                        profil</a></button>
            </div>
        <?php } ?>






    </div>
</div>

<div class="flex w-2/6 bg-gray-100 h-full flex-col rounded-2xl p-6">

    <h1 class="text-4xl text-bold police-1 mb-6 mt-6">Annonces publiées</h1>
    <a href="index.php?section=annoncePoste">Voir toute les annonces posté</a>

</div>