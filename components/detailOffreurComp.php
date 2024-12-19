<div class="flex w-full bg-gray-100 h-full flex-col rounded-2xl p-6">
    <h1 class="text-4xl text-bold text-center police-1 mb-6 mt-6">Toutes les annonces publiées</h1>
    <button><a href=<?php if (isset($_SESSION['idParti'])) {
        echo "index.php?section=acc-parti";
    } else {
        echo "index.php?section=acc-off";
    } ?>
            class="bg-yellow-500 border-2 border-yellow-500 my-6 rounded py-1 px-2">Retour
        </a></button>
    <?php
    if (!empty($annoncePoste)) {
        foreach ($annoncePoste as $poste) {
            $isEntreprise = isset($_SESSION['idEntreprise']);
            $isParti = isset($_SESSION['idParti']);

            if (
                ($isEntreprise && $poste['idEntreprise'] == $_SESSION['idEntreprise']) ||
                ($isParti && $poste['idParti'] == $_SESSION['idParti'])
            ) {
                ?>
                <div
                    class="py-4 hover:scale-[1.02] duration-300 shadow-2xl z-10 flex flex-col justify-center items-center bg-white rounded-2xl mx-12 mt-12 ">
                    <a href="" class="w-5/6 h-full">
                        <h1 class="text-4xl police-1">
                            <?php
                            if ($isEntreprise) {
                                echo htmlspecialchars($poste['titreAnnoncePro'] ?? '');
                            } else {
                                echo htmlspecialchars($poste['titreAnnonce'] ?? '');
                            }
                            ?>
                        </h1>
                        <p class="police-2">
                            <?php
                            if ($isEntreprise) {
                                echo htmlspecialchars($poste['NomEntreprise'] ?? '');
                            } else {
                                echo htmlspecialchars(($poste['NomParti'] ?? '') . ' ' . ($poste['PrenomParti'] ?? ''));
                            }
                            ?>
                        </p>
                        <p class="police-2">
                            <?php
                            if ($isEntreprise) {
                                echo htmlspecialchars($poste['descAnnoncePro'] ?? '');
                            } else {
                                echo htmlspecialchars($poste['descriptionParti'] ?? '');
                            }
                            ?>
                        </p>
                        <?php if ($isEntreprise) { ?>
                            <div class="w-1/6 border-2 border-gray-400 bg-yellow-500 rounded text-center my-4">
                                <p><?php echo htmlspecialchars($poste['typeContrat']); ?></p>
                            </div>
                        <?php } ?>

                        <hr class="w-full border-2 border-gray-400 my-4">

                        <p class="police-2">
                            <?php
                            if ($isEntreprise) {
                                echo htmlspecialchars($poste['villeAnnoncePro'] ?? '');
                            } else {
                                echo htmlspecialchars($poste['villeAnnonceParti'] ?? '');
                            }
                            ?>
                        </p>



                        <hr class="w-full border-2 border-gray-400 my-4">
                        <p class="police-2">Créé le <?php echo htmlspecialchars($poste['created_at'] ?? ''); ?></p>
                        <hr class="w-full border-2 border-gray-400 my-4">
                        <div class="flex justify-center">
                            <a href="index.php?section=formModifAnnonce&idAnnonce=<?php if ($isEntreprise) {
                                echo $poste['numAnnoncePro'];
                            } else {
                                echo $poste['numAnnonceParti'];
                            } ?>" class="bg-yellow-500 border-2 border-yellow-500 rounded py-1 px-2 mx-6">
                                Modifier l'annonce
                            </a>
                            <form method="POST" action="index.php?section=supprimerAnnonce">
                                <input type="hidden" name="numAnnonce"
                                    value="<?php echo $isEntreprise ? $poste['numAnnoncePro'] : $poste['numAnnonceParti']; ?>">
                                <button type="submit" name="supprimer"
                                    class="bg-yellow-500 border-2 border-yellow-500 rounded py-1 px-2 mx-6"
                                    onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette annonce ?')">
                                    Supprimer l'annonce
                                </button>
                            </form>
                        </div>
                    </a>
                </div>
                <?php
            }
        }
    } else {
        echo "<p>Aucune annonce publiée.</p>";
    }
    ?>

</div>