<?php

?>
<div class="w-5/6 rounded-2xl flex items-center justify-end h-20 bg-gray-100 mt-12 police-1">
    <div class="w-1/6">
        <h1 class="text-5xl text-start ml-6">Hi<span class="text-yellow-500">Jobs</span></h1>
    </div>
    <div class="justify-end flex items-center w-5/6">




        <div>
            <?php if (!isset($_SESSION['validiteConnexion']) || !$_SESSION['validiteConnexion']): { ?>
                    <a href="index.php?section=index" class="text-xl font-bold mx-5 text-gray-800">Accueil</a>
                    <a href="index.php?section=connecter" class="text-xl font-bold mx-5 text-gray-800">Les Annonces</a>
                    <a href="index.php?section=connecter" class="text-xl font-bold mx-5 text-gray-800">les entreprises</a>

                <?php }endif; ?>







            <?php
            if (isset($_SESSION['validiteConnexion']) && $_SESSION['validiteConnexion'] === true) {
                if ($_SESSION['userType'] === 'particulier') {
                    echo '<a href="index.php?section=acc-parti" class="text-xl font-bold mx-5 px-4 py-2 text-gray-800 rounded-xl">Particulier</a>';
                } else if ($_SESSION['userType'] === 'professionnel') {
                    echo '<a href="index.php?section=acc-off" class="text-xl font-bold mx-5 px-4 py-2 text-gray-800 rounded-xl">Offreur</a>';
                } else if ($_SESSION['userType'] === 'etudiant') {
                    echo '<a href="index.php?section=acc-etu" class="text-xl font-bold mx-5 px-4 py-2 text-gray-800 rounded-xl">Etudiant</a>';
                }
            }
            ?>
            <?php if (isset($_SESSION['validiteConnexion']) && $_SESSION['validiteConnexion']): ?>
                <a href="index.php?section=annonce" class="text-xl font-bold mx-5 text-gray-800">Les Annonces</a>
                <a href="index.php?section=entreprise" class="text-xl font-bold mx-5 text-gray-800">les entreprises</a>
                <a href="#"
                    class="text-xl font-bold mx-5 px-4 py-2 bg-yellow-500 text-white rounded-xl"><span
                        class="text-white mr-4 text-xl font-bold bg-yellow-500 rounded-xl px-2 py-2 ">Bienvenue</span></a>
                <a href="index.php?section=logout"
                    class="text-xl font-bold mx-5 px-4 py-2 bg-yellow-500 text-white rounded-xl">Déconnexion</a>



            <?php else: ?>
                <a href="index.php?section=connecter"
                    class="text-xl font-bold mx-5 px-4 py-2 bg-yellow-500 text-white rounded-xl">Connexion</a>
                <a href="index.php?section=choixForm"
                    class="text-xl font-bold mx-5 px-4 py-2 bg-yellow-500 text-white rounded-xl">Inscription</a>
            <?php endif; ?>

        </div>
    </div>
</div>