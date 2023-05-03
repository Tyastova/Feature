<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/views/templates/header.php";  ?>

<div class="style_one">
    <?php foreach ($styleOneFoto as $style) : ?>
        <div class="foto_one_style">
            <img class="foto_one" src="/upload/<?= $style->photoOne ?>" />
        </div>
    <?php endforeach ?>
</div>