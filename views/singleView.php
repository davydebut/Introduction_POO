<?php
include 'partials/header.php';

if (isset($_GET['id'])) { ?>
    <?= '<h1>' . $character->getName() . '</h1>'; ?>
<?php }

include 'partials/footer.php';
