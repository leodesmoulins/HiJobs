<div class="flex w-3/6 bg-gray-100 h-full flex-col rounded-2xl p-6 ">
    <div class="flex flex-col text-gray-950 bg-gray-200 rounded-2xl py-6 h-full items-center justify-center">
        <?php
        foreach ($etudiant as $etu) { ?>
            <h1 class="text-4xl text-bold police-1 mb-6">Information du profil</h1>
            <p placeholder="Nom" class="police-2">Nom : <?php echo $etu['nom']; ?></p>
            <p placeholder="Prénom" class="police-2">Prénom : <?php echo $etu['prenom']; ?></p>
            <p placeholder="Code Postal" class="police-2">Code Postal : <?php echo $etu['codePostal']; ?></p>
            <p placeholder="Ville" class="police-2">Ville : <?php echo $etu['Ville']; ?></p>
            <p placeholder="Adresse" class="police-2">Adresse : <?php echo $etu['Adresse']; ?></p>
            <p placeholder="Pays" class="police-2">Pays : <?php echo $etu['Pays']; ?></p>
            <p placeholder="Téléphone" class="police-2">Téléphone : <?php echo $etu['Telephone']; ?></p>
            <p placeholder="Email" class="police-2">E-mail : <?php echo $etu['EmailEtudiant']; ?></p>
            <p placeholder="Niveau d'étude" class="police-2">Niveau d'étude : <?php echo $etu['NiveauEtude']; ?></p>
            <p placeholder="Nom de la formation" class="police-2">Nom de la formation : <?php echo $etu['NomFormation']; ?></>
            <div class="mt-6">
                <button><a href="index.php?section=formModifProfilEtu"
                        class="bg-yellow-500 border-2 border-yellow-500 my-6 rounded py-1 px-2">Modifier votre
                        profil</a></button>
                <button><a href="index.php?section=formSupprProfilEtu"
                        class="bg-yellow-500 border-2 border-yellow-500 my-6 rounded py-1 px-2"
                        onclick="return confirm('Êtes-vous sûr de vouloir supprimer votre compte ?')">Supprimer votre
                        profil</a></button>
            </div>
        <?php } ?>






    </div>
</div>