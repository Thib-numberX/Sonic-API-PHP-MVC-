<!-- start accueil -->
<?php //var_dump($character); //!les persos sont ici. Attention, extract nous fait utiliser la varaible $character, qui est créée dans la method homeAction dans MainController avec le tableau data
?>
<section>
    <?php foreach ($character as $persoData => $valueData) : ?>
        <div class="div--portrait">
            <img class="portrait" src="<?= $absoluteUrl. '/../docs/images/'. $character[$persoData]->getPicture(); ?>" alt="portrait perso">
            <div>

                <p class="titre"><?= $character[$persoData]->getName(); ?></p>
                <p><?= $character[$persoData]->getDescription(); ?></p>
                <time><?= $character[$persoData]->getCreatedAt(); ?></time>
                <time><?= $character[$persoData]->getUpdatedAt(); ?></time>

            </div>
        </div>
    <?php endforeach; ?>
</section>

<!-- end accueil -->