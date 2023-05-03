<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/views/templates/header.php";  ?>

<div class="show_master">
    <div class="master_img_show">
        <img src="/upload/<?= $masterShow->photo ?>" class="show_master_img">
    </div>
    <p class="name_show"><?= $masterShow->name ?> <?= $masterShow->surname ?></p>

    <div class="photo_show">
        <?php foreach ($portMaster as $photo) : ?>
            <img class="img_show" src="/upload/<?= $photo->photo ?>">
        <?php endforeach ?>
    </div>
</div>

<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/views/templates/footer.php"  ?>