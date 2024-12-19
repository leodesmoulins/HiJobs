<div class="flex w-full bg-gray-100 h-full flex-col rounded-2xl p-6">
    <div class="w-full h-full flex flex-col justify-center items-center">
        <a href=<?php if (isset($_SESSION['idParti'])) {
            echo "index.php?section=acc-parti";
        } else {
            echo "index.php?section=acc-off";
        } ?>
            class="bg-yellow-500 border-2 border-yellow-500 my-6 rounded py-1 px-2">Retour</a>
        <h1 class="text-4xl text-bold police-1 mb-6 mt-6">Modifier votre annonces</h1>

        <form action="index.php?section=ModifAnnonce" method="post">
            <div class="w-full flex flex-col text-center">
                <?php
                if (!empty($annonceModif)) {
                    foreach ($annonceModif as $modif) {

                        $isEntreprise = isset($_SESSION['idEntreprise']);
                        $isParti = isset($_SESSION['idParti']);

                        if (
                            ($isEntreprise && $modif['idEntreprise'] == $_SESSION['idEntreprise']) ||
                            ($isParti && $modif['idParti'] == $_SESSION['idParti'])
                        ) {
                            if ($isEntreprise) { ?>

                                <input type="hidden" name="numAnnoncePro" value="<?php echo $modif['numAnnoncePro']; ?>">
                            <?php } else { ?>
                                <input type="hidden" name="numAnnonceParti" value="<?php echo $modif['numAnnonceParti']; ?>">
                            <?php } ?>
                            <input type="text" required value="<?php if ($isEntreprise) {
                                echo htmlspecialchars($modif['titreAnnoncePro'] ?? '');
                            } else {
                                echo htmlspecialchars($modif['titreAnnonce'] ?? '');
                            } ?>" name="<?php echo $isEntreprise ? 'titreAnnoncePro' : 'titreAnnonceParti'; ?>"
                                class="w-full mb-5 h-11 border-2 border-gray-400 rounded-2xl" placeholder="Titre">


                            <input type="text" required value="<?php if ($isEntreprise) {
                                echo htmlspecialchars($modif['NomEntreprise'] ?? '');

                            } else {
                                echo htmlspecialchars($modif['NomParti'] ?? '');

                            } ?>" name="<?php echo $isEntreprise ? 'nomEntreprise' : 'nomParti'; ?>"
                                class="w-full mb-5 h-11 border-2 border-gray-400 rounded-2xl" placeholder="Nom">


                            <?php if ($isParti) { ?>
                                <input type="text" required value="<?php if ($isParti) {
                                    echo htmlspecialchars($modif['PrenomParti'] ?? '');
                                } ?>" name="prenomParti" class="w-full mb-5 h-11 border-2 border-gray-400 rounded-2xl"
                                    placeholder="Prénom">
                            <?php } ?>


                            <input type="text" required value="<?php if ($isEntreprise) {
                                echo htmlspecialchars($modif['villeAnnoncePro'] ?? '');
                            } else {
                                echo htmlspecialchars($modif['villeAnnonceParti'] ?? '');
                            } ?>" name="<?php echo $isEntreprise ? 'villeAnnoncePro' : 'villeAnnonceParti'; ?>"
                                class="w-full mb-5 h-11 border-2 border-gray-400 rounded-2xl" placeholder="Ville">


                            <?php if ($isEntreprise) { ?>
                                    <select name="typeContrat" id="typeContrat" class="w-full mb-5 h-11 border-2 border-gray-400 rounded-2xl">
                                        <?php
                                        foreach ($TypeContrat as $type) { ?>
                                            <option value="<?php echo $type['IntituleContrat']; ?>"><?php echo $type['IntituleContrat']; ?></option>
                                        <?php } ?>
                                    </select>
                            <?php } ?>


                            <input type="text" required value="<?php if ($isEntreprise) {
                                echo htmlspecialchars($modif['descAnnoncePro'] ?? '');
                            } else {
                                echo htmlspecialchars($modif['descriptionParti'] ?? '');
                            } ?>"
                                name="<?php echo $isEntreprise ? 'descriptionAnnoncePro' : 'descriptionAnnonceParti'; ?>"
                                class="w-full mb-5 h-11 border-2 border-gray-400 rounded-2xl" placeholder="Description">
                        <?php }
                    }
                }
                ?>
            </div>
            <input type="submit" value="Modifier"
                class="w-full py-2 bg-yellow-500 border-2 border-yellow-500 my-6 rounded text-center">
        </form>
    </div>
</div>