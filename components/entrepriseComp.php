<div class="grid grid-cols-2 gap-4 z-0 ml-12 w-5/6 pb-12 h-full rounded-2xl bg-gray-100 justify-center"  >
<?php foreach ($entreprises as $entreprise) { ?>
    <div class="py-4 hover:scale-[1.02] duration-300 shadow-2xl z-10 flex justify-center items-center bg-white rounded-2xl mx-12 mt-12 ">
            <a href="" class="w-5/6 h-5/6">
                <div>
                    <h1 class="text-4xl police-1">
                        <?php echo $entreprise['NomEntreprise']; ?>
                    </h1>
                </div>
            </a>
        </div>
    <?php } ?>  
</div> 

