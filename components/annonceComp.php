<?php
if (!empty($annonces)) {
    foreach ($annonces as $annonce) {
        $isProAnnonce = ($annonce['type_annonce'] ?? '') === 'professionnel';
        ?>
        <div
            class="py-4 hover:scale-[1.02] duration-300 shadow-2xl z-10 flex justify-center items-center bg-white rounded-2xl mx-12 mt-12">
            <a href="index.php?section=DetailAnnonce" class="w-5/6 h-full">
                <?php if ($isProAnnonce) { ?>
                    <!-- Affichage du nom de l'entreprise -->
                    <h1 class="text-4xl police-1"><?php echo htmlspecialchars($annonce['titreAnnoncePro'] ?? ''); ?></h1>
                    <p class="police-2 text-xl"><?php echo htmlspecialchars($annonce['nomEntreprise'] ?? 'Entreprise non spécifiée'); ?></p>
                    <p class="police-2"><?php echo htmlspecialchars($annonce['villeAnnoncePro'] ?? ''); ?></p>

                    <?php if (isset($annonce['typeContrat'])) { ?>
                        <div class="w-1/6 border-2 border-gray-400 bg-yellow-500 rounded text-center my-4">
                            <p><?php echo htmlspecialchars($annonce['typeContrat']); ?></p>
                        </div>
                    <?php } ?>

                    <hr class="w-full border-2 border-gray-400 my-4">
                    <p class="police-2"><?php echo htmlspecialchars($annonce['descAnnoncePro'] ?? ''); ?></p>
                <?php } else { ?>
                    <h1 class="text-4xl police-1"><?php echo htmlspecialchars($annonce['titreAnnonce'] ?? ''); ?></h1>
                    <p><?php echo htmlspecialchars($annonce['nom_complet'] ?? 'Particulier non trouvé'); ?></p>
                    <p class="police-2"><?php echo htmlspecialchars($annonce['villeAnnonceParti'] ?? ''); ?></p>
                    <hr class="w-full border-2 border-gray-400 my-4">
                    <p class="police-2"><?php echo htmlspecialchars($annonce['descriptionParti'] ?? ''); ?></p>
                <?php } ?>

                <hr class="w-full border-2 border-gray-400 my-4">
                <div class="flex justify-between items-center">
                    <p class="police-2">Crée le <?php echo htmlspecialchars($annonce['created_at'] ?? ''); ?></p>
                    
                </div>
            </a>
        </div>
    <?php
    }
} else {
    echo '<p class="text-center">Aucune annonce disponible.</p>';
}
?>