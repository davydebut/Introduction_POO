<?php include 'partials/header.php'; ?>
<div class="row">
    <?php foreach ($characters as $character) { ?>
        <div class="col s12 m6">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title"><?php echo $character->getName() ?></span>
                </div>
                <div class="card-action">
                    <a href="<?= 'single.php?id=' . $character->id_character ?>"><?= $character->getHp(); ?></a>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
<?php include 'partials/footer.php'; ?>